<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

function jsonResponse(int $statusCode, array $payload): void
{
    http_response_code($statusCode);
    echo json_encode($payload, JSON_UNESCAPED_UNICODE);
    exit;
}

function postString(string $key): string
{
    $value = $_POST[$key] ?? '';
    return is_string($value) ? trim($value) : '';
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    jsonResponse(405, [
        'success' => false,
        'error' => 'Nepovolená metoda.',
    ]);
}

$honeypot = postString('website');
if ($honeypot !== '') {
    jsonResponse(400, [
        'success' => false,
        'error' => 'Požadavek nebyl přijat.',
    ]);
}

$name    = postString('name');
$email   = postString('email');
$phone   = postString('phone');
$message = postString('message');
$gdpr    = isset($_POST['gdpr']);

if (!$gdpr) {
    jsonResponse(422, [
        'success' => false,
        'error' => 'Potvrďte souhlas se zpracováním údajů.',
    ]);
}

if ($name === '' || $email === '' || $message === '') {
    jsonResponse(422, [
        'success' => false,
        'error' => 'Vyplňte jméno, e-mail a zprávu.',
    ]);
}

if (
    mb_strlen($name) > 100 ||
    mb_strlen($email) > 150 ||
    mb_strlen($phone) > 30 ||
    mb_strlen($message) > 3000
) {
    jsonResponse(422, [
        'success' => false,
        'error' => 'Některé pole je příliš dlouhé.',
    ]);
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    jsonResponse(422, [
        'success' => false,
        'error' => 'E-mail není platný.',
    ]);
}

if ($phone !== '' && !preg_match('/^[0-9+\s()\-]{6,30}$/', $phone)) {
    jsonResponse(422, [
        'success' => false,
        'error' => 'Telefon má neplatný formát.',
    ]);
}

$cleanReplyName  = mb_substr(str_replace(["\r", "\n"], '', $name), 0, 100);
$cleanReplyEmail = mb_substr(str_replace(["\r", "\n"], '', $email), 0, 150);
$cleanSubjectName = mb_substr(str_replace(["\r", "\n"], '', $name), 0, 80);

/*
|--------------------------------------------------------------------------
| SMTP konfigurace
|--------------------------------------------------------------------------
*/
$smtpHost   = trim((string)($_ENV['SMTP_HOST'] ?? ''));
$smtpUser   = trim((string)($_ENV['SMTP_USER'] ?? ''));
$smtpPass   = (string)($_ENV['SMTP_PASS'] ?? '');
$smtpSecure = strtolower(trim((string)($_ENV['SMTP_SECURE'] ?? 'ssl')));
$smtpPort   = (int)($_ENV['SMTP_PORT'] ?? (($smtpSecure === 'ssl') ? 465 : 587));

$toEmail  = trim((string)($_ENV['TO_EMAIL'] ?? ''));
$toName   = trim((string)($_ENV['TO_NAME'] ?? 'BZ-tech s.r.o.'));
$fromName = trim((string)($_ENV['FROM_NAME'] ?? 'BZ-tech web'));

if ($smtpHost === '' || $smtpUser === '' || $smtpPass === '' || $toEmail === '') {
    error_log('Mail form error: missing SMTP configuration.');
    jsonResponse(500, [
        'success' => false,
        'error' => 'E-mailová služba momentálně není dostupná.',
    ]);
}

$subject = "Nová zpráva z webu BZ-tech – {$cleanSubjectName}";

$bodyTxt =
    "Na webu BZ-tech byla odeslána nová zpráva.\n\n" .
    "Jméno: {$name}\n" .
    "E-mail: {$email}\n" .
    "Telefon: " . ($phone !== '' ? $phone : 'neuveden') . "\n\n" .
    "Zpráva:\n{$message}";

$escapedName    = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$escapedEmail   = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$escapedPhone   = htmlspecialchars($phone !== '' ? $phone : 'neuveden', ENT_QUOTES, 'UTF-8');
$escapedMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

$bodyHtml = <<<HTML
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Nová zpráva z webu BZ-tech</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; color: #1f2937; line-height: 1.6;">
  <h2 style="margin-bottom: 16px;">Nová zpráva z webu BZ-tech</h2>
  <p><strong>Jméno:</strong> {$escapedName}</p>
  <p><strong>E-mail:</strong> {$escapedEmail}</p>
  <p><strong>Telefon:</strong> {$escapedPhone}</p>
  <p><strong>Zpráva:</strong><br>{$escapedMessage}</p>
</body>
</html>
HTML;

$mail = new PHPMailer(true);

try {
    $mail->CharSet = 'UTF-8';

    $mail->SMTPDebug = 0;

    $mail->isSMTP();
    $mail->Host       = $smtpHost;
    $mail->SMTPAuth   = true;
    $mail->Username   = $smtpUser;
    $mail->Password   = $smtpPass;
    $mail->Port       = $smtpPort;

    if ($smtpSecure === 'tls' || $smtpSecure === 'starttls') {
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    } else {
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    }

    $mail->setFrom($smtpUser, $fromName);
    $mail->addAddress($toEmail, $toName);
    $mail->addReplyTo($cleanReplyEmail, $cleanReplyName);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $bodyHtml;
    $mail->AltBody = $bodyTxt;

    $mail->send();

    jsonResponse(200, [
        'success' => true,
    ]);
} catch (Exception $e) {
    error_log('Mail form error: ' . $mail->ErrorInfo);

    jsonResponse(500, [
        'success' => false,
        'error' => 'Nepodařilo se odeslat e-mail. Zkuste to prosím později.',
    ]);
}