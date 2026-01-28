<?php
$companyName = "BZ-tech s.r.o.";
$ico = "25406019";
$email = "info@bz-tech.cz";

$phoneDisplay = "+420 608 028 690";
$phoneTel = "+420608028690";

$address = "Mostecká 387, 431 11 Jirkov";

$schemaUrl = "https://www.bz-tech.cz/";
$schemaImage = "https://via.placeholder.com/1200x630.png?text=BZ-tech+s.r.o.";
$schemaDescription = "Elektroinstalace, revize, fotovoltaika a chytrá řešení pro firmy i domácnosti.";

$streetAddress = "Mostecká 387";
$addressLocality = "Jirkov";
$postalCode = "431 11";
$addressCountry = "CZ";
?>
<!doctype html>
<html lang="cs">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= htmlspecialchars($companyName) ?></title>
  <meta name="description" content="<?= htmlspecialchars($schemaDescription) ?>">
  <meta name="theme-color" content="#113c8d">

  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($companyName) ?> — Elektroinstalace, revize, chytrá řešení">
  <meta property="og:description" content="<?= htmlspecialchars($schemaDescription) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($schemaImage) ?>">

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
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#home" aria-label="<?= htmlspecialchars($companyName) ?> domů">
        <img src="images/logo.png" alt="<?= htmlspecialchars($companyName) ?> logo" height="70" class="me-2">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Přepnout navigaci">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
          <li class="nav-item"><a class="nav-link" href="#sluzby">Služby</a></li>
          <li class="nav-item"><a class="nav-link" href="#onas">O nás</a></li>
          <li class="nav-item"><a class="nav-link" href="#reference">Reference</a></li>
          <li class="nav-item ms-lg-3"><a class="btn btn-primary px-3" href="#kontakt">Poptat služby</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header id="home" class="hero">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-10">
          <h1 class="display-4 mb-3">Elektroinstalace, revize a chytrá řešení pro firmy i domácnosti</h1>
          <p class="lead mb-4">Komplexní přístup, špičková kvalita a jasné termíny. Postaráme se o vše od návrhu po servis.</p>
          <div class="d-flex gap-3 justify-content-center">
            <a href="#kontakt" class="btn btn-lg btn-primary"><i class="bi bi-envelope-paper-fill me-2"></i>Poptat služby</a>
            <a href="#sluzby" class="btn btn-lg btn-outline-light"><i class="bi bi-grid-fill me-2"></i>Prohlédnout služby</a>
          </div>
        </div>
      </div>
    </div>
    <div class="floating-cta">
      <a href="#sluzby" class="text-white-50 small text-decoration-none"><i class="bi bi-chevron-double-down"></i> Pokračovat</a>
    </div>
  </header>

  <!-- USP / CLAIM -->
  <!-- <section class="section-muted py-5">
    <div class="container text-center">
      <h2 class="h3 fw-bold">Vydělávejte. Zbytek zařídíme my.</h2>
      <p class="text-body-secondary mb-0">Komplexní přístup • Pružnost • Kvalita • Termín</p>
    </div>
  </section> -->

  <!-- SLUZBY -->
  <section id="sluzby" class="py-6 py-5">
    <div class="container">
      <div class="row align-items-end mb-4">
        <div class="col-md-8">
          <h2 class="fw-bold">Naše služby</h2>
          <p class="text-body-secondary mb-0">Realizace pro novostavby i rekonstrukce, průmysl i bytové domy.</p>
        </div>
        <!-- <div class="col-md-4 text-md-end mt-3 mt-md-0">
          <a href="#kontakt" class="btn btn-primary px-3">Nezávazná poptávka</a>
        </div> -->
      </div>

      <div class="row g-4">
        <!-- ... vaše karty služeb beze změny ... -->
        <!-- (nechal jsem je, jak máte) -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 rounded-4 service-card h-100">
            <i class="bi bi-house-gear-fill icon-xl"></i>
            <h3 class="h5 mt-3">Silnoproudé elektroinstalace</h3>
            <p class="text-body-secondary">Byty, domy, komerční objekty, průmysl. Kompletní montáž, rekonstrukce i rozšíření.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 rounded-4 service-card h-100">
            <i class="bi bi-shield-check icon-xl"></i>
            <h3 class="h5 mt-3">Revize a měření</h3>
            <p class="text-body-secondary">Výstupní i periodické revize, měření impedancí, protokoly a poradenství k nápravám.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 rounded-4 service-card h-100">
            <i class="bi bi-brightness-high-fill icon-xl"></i>
            <h3 class="h5 mt-3">Osvětlení &amp; nouzové systémy</h3>
            <p class="text-body-secondary">Návrh a montáž efektivního osvětlení, řízení, nouzové a bezpečnostní osvětlení.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 rounded-4 service-card h-100">
            <i class="bi bi-sun-fill icon-xl"></i>
            <h3 class="h5 mt-3">Fotovoltaika</h3>
            <p class="text-body-secondary">Návrh, instalace a připojení FVE, hybridní střídače, bateriová úložiště.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 rounded-4 service-card h-100">
            <i class="bi bi-ev-front-fill icon-xl"></i>
            <h3 class="h5 mt-3">Nabíjecí stanice</h3>
            <p class="text-body-secondary">Wallboxy i firemní AC/DC stanice, projekt, montáž, správa a revize.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 rounded-4 service-card h-100">
            <i class="bi bi-house-fill icon-xl"></i>
            <h3 class="h5 mt-3">Chytrá domácnost</h3>
            <p class="text-body-secondary">Loxone / KNX / Shelly – automatizace osvětlení, topení, žaluzie, zabezpečení.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 rounded-4 service-card h-100">
            <i class="bi bi-hdd-network-fill icon-xl"></i>
            <h3 class="h5 mt-3">Rozvaděče a slaboproud</h3>
            <p class="text-body-secondary">Datové rozvody, strukturovaná kabeláž, kamerové a EPS systémy.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 rounded-4 service-card h-100">
            <i class="bi bi-cloud-lightning-rain-fill icon-xl"></i>
            <h3 class="h5 mt-3">Hromosvody</h3>
            <p class="text-body-secondary">Návrh, instalace a revize LPS dle aktuálních norem, ochrana před přepětím.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 rounded-4 service-card h-100">
            <i class="bi bi-tools icon-xl"></i>
            <h3 class="h5 mt-3">Servis &amp; správa</h3>
            <p class="text-body-secondary">Pohotovost, pravidelná údržba a SLA pro bytové domy i firmy.</p>
          </div>
        </div>
      </div>

      <div class="text-center mt-5">
        <a href="#kontakt" class="btn btn-primary btn-lg"><i class="bi bi-telephone-outbound me-2"></i>Poraďte se s námi</a>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <!-- O NAS -->
  <section id="onas" class="py-5 section-muted">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-12">
          <h2 class="fw-bold mb-4">Kdo je BZ-tech</h2>

          <p class="lead lh-lg">
            Společnost <strong>BZ-tech, s.r.o.</strong> byla založena v roce <strong>1999</strong>
            a sídlí v <strong>Chomutově</strong>. Zaměřujeme se na
            <strong>slaboproudé i silnoproudé elektroinstalace</strong> v občanské i průmyslové výstavbě.
          </p>

          <p class="lh-lg">Poskytujeme kompletní řešení v oblasti:</p>

          <ul class="lh-lg">
            <li>Elektroinstalace v historických objektech</li>
            <li>Instalace rozvodů kabelových televizí a zabezpečovacích systémů</li>
            <li>Anténní a telefonní rozvody</li>
            <li>Řešení pro <strong>prostory s nebezpečím výbuchu (B)</strong> – čerpací stanice, olejová hospodářství</li>
          </ul>

          <p class="lh-lg">
            Jsme oprávněni k <strong>montážím, revizím, opravám</strong> a zkouškám
            na elektrických zařízeních do <strong>1000 V</strong> i nad <strong>1000 V</strong>.
          </p>

          <p class="lh-lg">
            V roce <strong>2006</strong> jsme získali certifikát <strong>EZU</strong> pro výrobu elektrických rozvaděčů.
            Provádíme také certifikované instalace protipožárních prostupů a retardací kabelových tras
            systémů <strong>INTUMEX</strong> a <strong>PROMAT</strong>.
          </p>

          <p class="lh-lg">
            Naše služby poskytujeme s důrazem na <strong>dlouhodobou spokojenost zákazníků</strong>.
            Používáme špičkovou měřící a regulační techniku renomovaných výrobců
            a dbáme na <strong>kvalitu řemeslné práce, profesionalitu a individuální přístup</strong>.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- REFERENCE -->
  <section id="reference" class="py-5">
    <div class="container">
      <div class="d-flex justify-content-between align-items-end mb-3">
        <div>
          <h2 class="fw-bold mb-0">Reference</h2>
          <p class="text-body-secondary mb-0">Vybrané projekty dokončené naším týmem.</p>
        </div>
        <!-- <a href="#kontakt" class="btn btn-outline-primary d-none d-md-inline-flex">Chci podobný projekt</a> -->
         <a href="zakazky.php" class="btn btn-primary px-3">
          <i class="bi bi-list-check me-2"></i> Přehled vybraných zakázek
        </a>
      </div>

      <div class="logo-slider">
        <div class="logo-slide-track">
          <!-- ... loga beze změny ... -->
          <div class="logo-slide"><img src="images/jirkov.jpeg" alt="Klient 1"></div>
          <div class="logo-slide"><img src="images/kadanm.jpg" alt="Klient 2"></div>
          <div class="logo-slide"><img src="images/chomutov.png" alt="Klient 3"></div>
          <div class="logo-slide"><img src="images/99.png" alt="Klient 4"></div>
          <div class="logo-slide"><img src="images/svs.jpg" alt="Klient 5"></div>
          <div class="logo-slide"><img src="images/vejprty.png" alt="Klient 6"></div>
          <div class="logo-slide"><img src="images/split.png" alt="Klient 7"></div>
          <div class="logo-slide"><img src="images/scvk2.png" alt="Klient 8"></div>

          <div class="logo-slide"><img src="images/jirkov.jpeg" alt="Klient 1"></div>
          <div class="logo-slide"><img src="images/kadanm.jpg" alt="Klient 2"></div>
          <div class="logo-slide"><img src="images/chomutov.png" alt="Klient 3"></div>
          <div class="logo-slide"><img src="images/99.png" alt="Klient 4"></div>
          <div class="logo-slide"><img src="images/svs.jpg" alt="Klient 5"></div>
          <div class="logo-slide"><img src="images/vejprty.png" alt="Klient 6"></div>
          <div class="logo-slide"><img src="images/split.png" alt="Klient 7"></div>
          <div class="logo-slide"><img src="images/scvk2.png" alt="Klient 8"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- KONTAKT -->
  <section id="kontakt" class="py-5 section-muted">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-5">
          <h2 class="fw-bold">Kontakt</h2>
          <p class="text-body-secondary">Ozvěte se nám – rádi poradíme a připravíme řešení na míru.</p>

          <div class="p-4 rounded-4 bg-white shadow-sm">
            <div class="d-flex align-items-center mb-3">
              <i class="bi bi-telephone me-2 icon-xl"></i>
              <div>
                <div class="small text-body-secondary">Telefon</div>
                <a href="tel:<?= htmlspecialchars($phoneTel) ?>" class="link-primary fw-semibold">
                  <?= htmlspecialchars($phoneDisplay) ?>
                </a>
              </div>
            </div>

            <div class="d-flex align-items-center mb-3">
              <i class="bi bi-envelope me-2 icon-xl"></i>
              <div>
                <div class="small text-body-secondary">E-mail</div>
                <a href="mailto:<?= htmlspecialchars($email) ?>" class="link-primary fw-semibold">
                  <?= htmlspecialchars($email) ?>
                </a>
              </div>
            </div>

            <div class="d-flex align-items-start">
              <i class="bi bi-geo-alt me-2 icon-xl"></i>
              <div>
                <div class="small text-body-secondary">Adresa</div>
                <strong><?= htmlspecialchars($companyName) ?></strong><br>
                <?= htmlspecialchars($address) ?>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <form id="contact-form"
              action="contact.php"
              method="post"
              class="p-4 bg-white rounded-4 shadow-sm">
            <div class="row g-3">
              <div class="col-12">
                <label for="jmeno" class="form-label">Jméno a příjmení</label>
                <input type="text" id="jmeno" name="name" class="form-control" required>
              </div>
              <div class="col-12">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" required>
              </div>
              <div class="col-12">
                <label for="telefon" class="form-label">Telefon</label>
                <input type="tel" id="telefon" name="phone" class="form-control">
              </div>
              <div class="col-12">
                <label for="zprava" class="form-label">Zpráva</label>
                <textarea id="zprava" name="message" rows="5" class="form-control" placeholder="Napište nám detaily poptávky…" required></textarea>
              </div>
              <div class="col-12 d-flex align-items-center gap-2">
                <input class="form-check-input" type="checkbox" id="gdpr" name="gdpr" required>
                <label for="gdpr" class="form-check-label small">
                  Souhlasím se zpracováním osobních údajů pro účely kontaktování.
                </label>
              </div>
            </div>
            <div class="d-grid d-sm-flex justify-content-sm-end mt-3">
              <button class="btn btn-primary btn-lg" type="submit">
                <i class="bi bi-send-fill me-2"></i>Odeslat
              </button>
            </div>
            <div id="form-status" class="mt-3"></div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer py-5" style="background:linear-gradient(180deg, var(--bz-secondary), #071a3b); color:#c8d4ff">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-5">
          <div class="d-flex align-items-center mb-2">
            <strong><?= htmlspecialchars($companyName) ?></strong>
          </div>
          <p class="mb-2 small">Elektroinstalace, revize a chytrá řešení. Spolehlivý partner pro vaši stavbu.</p>

          <div class="small">
            IČO: <?= htmlspecialchars($ico) ?> 
          </div>
        </div>

        <div class="col-md-3">
          <h6 class="text-white">Navigace</h6>
          <ul class="list-unstyled small">
            <li><a href="#onas">O nás</a></li>
            <li><a href="#sluzby">Služby</a></li>
            <li><a href="#reference">Reference</a></li>
            <li><a href="#kontakt">Kontakt</a></li>
          </ul>
        </div>

        <div class="col-md-4">
          <h6 class="text-white">Rychlý kontakt</h6>
          <div class="small">Telefon:
            <a href="tel:<?= htmlspecialchars($phoneTel) ?>"><?= htmlspecialchars($phoneDisplay) ?></a>
          </div>
          <div class="small">E-mail:
            <a href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a>
          </div>
          <div class="small">Adresa: <?= htmlspecialchars($address) ?></div>
        </div>
      </div>

      <hr class="border-light-subtle my-4">
      <div class="d-flex justify-content-between small flex-column flex-md-row gap-2">
        <div>© <span id="year"></span> <?= htmlspecialchars($companyName) ?>. Všechna práva vyhrazena.</div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>