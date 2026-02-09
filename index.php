<?php require 'includes/config.php'; ?>
<?php require 'includes/head.php'; ?>
<?php require 'includes/navbar.php'; ?>

  <!-- HERO -->
  <!-- <header id="home" class="hero">
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
  </header> -->

  <header id="home" class="hero">
  <div class="hero-content">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-10">

          <h1 class="display-4 mb-3">
            Elektroinstalace, revize a chytrá řešení pro firmy i domácnosti
          </h1>

          <p class="lead mb-4">
            Komplexní přístup, špičková kvalita a jasné termíny.
            Postaráme se o vše od návrhu po servis.
          </p>

          <div class="d-flex gap-3 justify-content-center">
            <a href="#kontakt" class="btn btn-lg btn-primary">
              <i class="bi bi-envelope-paper-fill me-2"></i>Poptat služby
            </a>
            <a href="#sluzby" class="btn btn-lg btn-outline-light">
              <i class="bi bi-grid-fill me-2"></i>Prohlédnout služby
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="floating-cta">
    <a href="#sluzby" class="text-white-50 small text-decoration-none">
      <i class="bi bi-chevron-double-down"></i> Pokračovat
    </a>
  </div>
</header>

  <!-- SLUZBY -->
  <section id="sluzby" class="py-6 py-5">
    <div class="container">
      <div class="row align-items-end mb-4">
        <div class="col-md-8">
          <h2 class="fw-bold">Naše služby</h2>
          <p class="text-body-secondary mb-0">Realizace pro novostavby i rekonstrukce, průmysl i bytové domy.</p>
        </div>
      </div>

      <div class="row g-4">
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
        <!-- <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 rounded-4 service-card h-100">
            <i class="bi bi-sun-fill icon-xl"></i>
            <h3 class="h5 mt-3">Fotovoltaika</h3>
            <p class="text-body-secondary">Návrh, instalace a připojení FVE, hybridní střídače, bateriová úložiště.</p>
          </div>
        </div> -->
        <!-- <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 rounded-4 service-card h-100">
            <i class="bi bi-ev-front-fill icon-xl"></i>
            <h3 class="h5 mt-3">Nabíjecí stanice</h3>
            <p class="text-body-secondary">Wallboxy i firemní AC/DC stanice, projekt, montáž, správa a revize.</p>
          </div>
        </div> -->
        <!-- <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 rounded-4 service-card h-100">
            <i class="bi bi-house-fill icon-xl"></i>
            <h3 class="h5 mt-3">Chytrá domácnost</h3>
            <p class="text-body-secondary">Loxone / KNX / Shelly – automatizace osvětlení, topení, žaluzie, zabezpečení.</p>
          </div>
        </div> -->
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
        <!-- <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 rounded-4 service-card h-100">
            <i class="bi bi-tools icon-xl"></i>
            <h3 class="h5 mt-3">Servis &amp; správa</h3>
            <p class="text-body-secondary">Pohotovost, pravidelná údržba a SLA pro bytové domy i firmy.</p>
          </div>
        </div> -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="p-4 rounded-4 service-card h-100">
            <i class="bi bi-tools icon-xl"></i>
            <h3 class="h5 mt-3">Projekce</h3>
            <p class="text-body-secondary">Na všechny Vaše projekty rádi zajistíme kvalitní dokumentaci.</p>
          </div>
        </div> 
      </div>

      <div class="text-center mt-5">
        <a href="#kontakt" class="btn btn-primary btn-lg"><i class="bi bi-telephone-outbound me-2"></i>Poraďte se s námi</a>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <section id="onas" class="py-5 section-muted">
  <div class="container">
    <div class="row">
      
      <!-- LEVÝ SLOUPEC -->
      <div class="col-lg-9 col-xl-12">

        <h2 class="fw-bold mb-4">Kdo je BZ-tech</h2>

        <p>
          Společnost <strong>BZ-tech, s.r.o.</strong> byla založena v roce
          <strong>1999</strong> a sídlí v <strong>Chomutově</strong>.
          Dlouhodobě se zaměřujeme na
          <strong>slaboproudé i silnoproudé elektroinstalace</strong>
          v občanské i průmyslové výstavbě.
        </p>

        <p>
          Realizujeme zakázky jak pro novostavby, tak pro rekonstrukce,
          včetně elektroinstalací v historických objektech.
          Součástí našich služeb jsou rovněž rozvody kabelových televizí,
          zabezpečovací systémy, anténní a telefonní rozvody.
        </p>

        <p>
          Máme zkušenosti také s realizacemi v prostředích s
          <strong>nebezpečím výbuchu (prostředí B)</strong>,
          zejména pro čerpací stanice pohonných hmot a olejová hospodářství.
          Zajišťujeme kompletní řešení včetně projektové dokumentace,
          revizních zpráv a technické podpory.
        </p>

        <p>
          Jsme oprávněni provádět montáže, revize, opravy a zkoušky
          elektrických zařízení do <strong>1000 V i nad 1000 V</strong>.
          V roce <strong>2006</strong> jsme získali certifikát <strong>EZU</strong>
          pro výrobu elektrických rozvaděčů a provádíme také certifikované
          instalace protipožárních prostupů systémů
          <strong>INTUMEX</strong> a <strong>PROMAT</strong>.
        </p>

        <p class="mb-0">
          Naše služby poskytujeme s důrazem na kvalitu provedení,
          spolehlivost a dlouhodobou spolupráci.
          Ke každé zakázce přistupujeme individuálně a zakládáme si
          na poctivé řemeslné práci a profesionálním přístupu,
          což potvrzují i opakované zakázky našich klientů.
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
          <div class="logo-slide"><img src="images/jirkov.png" alt="Klient 1"></div>
          <div class="logo-slide"><img src="images/kadanm.jpg" alt="Klient 2"></div>
          <div class="logo-slide"><img src="images/chomutov.png" alt="Klient 3"></div>
          <div class="logo-slide"><img src="images/99.png" alt="Klient 4"></div>
          <div class="logo-slide"><img src="images/jorcon.png" alt="Klient 6"></div>
          <div class="logo-slide"><img src="images/split.png" alt="Klient 7"></div>
          <div class="logo-slide"><img src="images/scvk2.png" alt="Klient 8"></div>
          <div class="logo-slide"><img src="images/hpstav.png" alt="Klient 9"></div>
          <div class="logo-slide"><img src="images/petrom.png" alt="Klient 10"></div>

          <div class="logo-slide"><img src="images/jirkov.png" alt="Klient 1"></div>
          <div class="logo-slide"><img src="images/kadanm.jpg" alt="Klient 2"></div>
          <div class="logo-slide"><img src="images/chomutov.png" alt="Klient 3"></div>
          <div class="logo-slide"><img src="images/99.png" alt="Klient 4"></div>>
          <div class="logo-slide"><img src="images/jorcon.png" alt="Klient 6"></div>
          <div class="logo-slide"><img src="images/split.png" alt="Klient 7"></div>
          <div class="logo-slide"><img src="images/scvk2.png" alt="Klient 8"></div>
          <div class="logo-slide"><img src="images/hpstav.png" alt="Klient 9"></div>
          <div class="logo-slide"><img src="images/petrom.png" alt="Klient 10"></div>
        </div>
      </div>
    </div>
  </section>
  <div class="divider"></div>
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
              <button class="btn btn-primary btn-md" type="submit">
                <i class="bi bi-send-fill me-2"></i>Odeslat
              </button>
            </div>
            <div id="form-status" class="mt-3"></div>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php require 'includes/footer.php'; ?>