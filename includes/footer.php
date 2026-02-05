<footer class="footer py-5" style="background:linear-gradient(180deg, var(--bz-secondary), #071a3b); color:#c8d4ff">
  <div class="container">
    <div class="row g-4">

      <!-- FIRMA -->
      <div class="col-md-5">
        <strong class="d-block mb-2"><?= htmlspecialchars($companyName) ?></strong>
        <p class="small mb-2">
          Elektroinstalace, revize a chytrá řešení.<br>
          Spolehlivý partner pro vaši stavbu.
        </p>
        <div class="small">IČO: <?= htmlspecialchars($ico) ?></div>
      </div>

      <!-- NAVIGACE -->
      <div class="col-md-3">
        <h6 class="text-white mb-2">Navigace</h6>
        <ul class="list-unstyled small mb-0">
          <li><a href="index.php#onas">O nás</a></li>
          <li><a href="index.php#sluzby">Služby</a></li>
          <li><a href="zakazky.php">Zakázky</a></li>
          <li><a href="index.php#kontakt">Kontakt</a></li>
        </ul>
      </div>

      <!-- KONTAKT -->
      <div class="col-md-4">
        <h6 class="text-white mb-2">Rychlý kontakt</h6>
        <div class="small">
          Telefon:
          <a href="tel:<?= htmlspecialchars($phoneTel) ?>" class="text-decoration-none">
            <?= htmlspecialchars($phoneDisplay) ?>
          </a>
        </div>
        <div class="small">
          E-mail:
          <a href="mailto:<?= htmlspecialchars($email) ?>" class="text-decoration-none">
            <?= htmlspecialchars($email) ?>
          </a>
        </div>
        <div class="small">
          Adresa: <?= htmlspecialchars($address) ?>
        </div>
      </div>

    </div>

    <hr class="border-light-subtle my-4">

    <div class="small text-center text-md-start">
      © <?= date('Y') ?> <?= htmlspecialchars($companyName) ?>. Všechna práva vyhrazena.
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>