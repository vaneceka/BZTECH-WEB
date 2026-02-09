<!doctype html>
<html lang="cs">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= htmlspecialchars($pageTitle ?? $companyName ?? 'BZ-tech s.r.o.') ?></title>
  <meta name="description" content="<?= htmlspecialchars($schemaDescription ?? '') ?>">

  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Electrician",
    "name": "<?= htmlspecialchars($companyName, ENT_QUOTES) ?>",
    "url": "<?= htmlspecialchars($schemaUrl, ENT_QUOTES) ?>",
    "image": "<?= htmlspecialchars($schemaImage, ENT_QUOTES) ?>",
    "description": "<?= htmlspecialchars($schemaDescription, ENT_QUOTES) ?>",
    "telephone": "<?= htmlspecialchars($phoneDisplay, ENT_QUOTES) ?>",
    "address": {
      "@type":"PostalAddress",
      "streetAddress":"<?= htmlspecialchars($streetAddress, ENT_QUOTES) ?>",
      "addressLocality":"<?= htmlspecialchars($addressLocality, ENT_QUOTES) ?>",
      "postalCode":"<?= htmlspecialchars($postalCode, ENT_QUOTES) ?>",
      "addressCountry":"<?= htmlspecialchars($addressCountry, ENT_QUOTES) ?>"
    }
  }
  </script>
  </head>
<body>