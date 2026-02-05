<?php
declare(strict_types=1);
header('Content-Type: application/json; charset=utf-8');

require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// povol jen POST
if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
  http_response_code(405);
  echo json_encode(['success' => false, 'error' => 'Nepovolená metoda.']);
  exit;
}

// vstupy
$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$phone   = trim($_POST['phone']   ?? '');
$message = trim($_POST['message'] ?? '');
$gdpr    = isset($_POST['gdpr']);

if (!$gdpr) {
  http_response_code(422);
  echo json_encode(['success' => false, 'error' => 'Potvrďte souhlas se zpracováním údajů.']);
  exit;
}
if ($name === '' || $email === '' || $message === '') {
  http_response_code(422);
  echo json_encode(['success' => false, 'error' => 'Vyplňte jméno, e-mail a zprávu.']);
  exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(422);
  echo json_encode(['success' => false, 'error' => 'E-mail není platný.']);
  exit;
}

// bezpečné Reply-To
$cleanReplyName  = str_replace(["\r", "\n"], '', $name);
$cleanReplyEmail = str_replace(["\r", "\n"], '', $email);

// obsah
$subject = 'Nová zpráva z webu BZ-tech';
$bodyTxt = "Jméno: {$name}\nE-mail: {$email}\nTelefon: {$phone}\n\nZpráva:\n{$message}";
$bodyHtml = nl2br(htmlspecialchars($bodyTxt, ENT_QUOTES, 'UTF-8'));

$mail = new PHPMailer(true);

try {
  $mail->SMTPDebug = (int)($_ENV['SMTP_DEBUG'] ?? 0); // 0 vypnuto, 2 pro ladění
  $mail->CharSet   = 'UTF-8';
  $mail->isSMTP();
  $mail->Host       = $_ENV['SMTP_HOST']   ?? 'smtp.seznam.cz';
  $mail->SMTPAuth   = true;
  $mail->Username   = $_ENV['SMTP_USER']   ?? '';
  $mail->Password   = $_ENV['SMTP_PASS']   ?? '';
  $secure           = strtolower($_ENV['SMTP_SECURE'] ?? 'ssl'); // ssl|tls
  $mail->SMTPSecure = ($secure === 'ssl') ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port       = (int)($_ENV['SMTP_PORT'] ?? (($secure === 'ssl') ? 465 : 587));

  // u Seznamu MUSÍ být setFrom stejný jako SMTP_USER
  $fromEmail = $_ENV['SMTP_USER'] ?? '';
  $fromName  = $_ENV['FROM_NAME'] ?? 'BZ-tech web';
  $mail->setFrom($fromEmail, $fromName);

  $mail->addAddress($_ENV['TO_EMAIL'] ?? 'info@bz-tech.cz', $_ENV['TO_NAME'] ?? 'BZ-tech s.r.o.');
  $mail->addReplyTo($cleanReplyEmail, $cleanReplyName);

  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body    = $bodyHtml;
  $mail->AltBody = $bodyTxt;

  $mail->send();
  echo json_encode(['success' => true]);
  exit;
} catch (Exception $e) {
  http_response_code(500);
  echo json_encode([
    'success' => false,
    'error' => 'Nepodařilo se odeslat e-mail. Zkontrolujte SMTP nastavení.',
    // 'debug' => $e->getMessage(), // případně dočasně odkomentujte
  ]);
  exit;
}

