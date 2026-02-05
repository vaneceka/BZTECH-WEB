<?php require 'includes/config.php'; ?>
<?php require 'includes/head.php'; ?>
<?php require 'includes/navbar.php'; ?>
<?php
// $zakazky = [
//   [
//     'nazev' => 'Hotel 99 – novostavba',
//     'misto' => 'Chomutov',
//     'rok' => '2010–2011',
//     'cena' => '11 500 000 Kč'
//   ],
//   [
//     'nazev' => 'Letní stadion – novostavba',
//     'misto' => 'Chomutov',
//     'rok' => '2011–2012',
//     'cena' => '12 500 000 Kč'
//   ],
//   [
//     'nazev' => 'Hotel Split – novostavba a rekonstrukce',
//     'misto' => 'Kadaň',
//     'rok' => '2010–2011',
//     'cena' => '3 800 000 Kč'
//   ],
//   [
//     'nazev' => 'VO Kadaň – rekonstrukce',
//     'misto' => 'Kadaň',
//     'rok' => '2014',
//     'cena' => '1 487 000 Kč'
//   ],
//   [
//     'nazev' => 'Osvětlení výrobní haly',
//     'misto' => 'Kadaň',
//     'rok' => '2019',
//     'cena' => '3 170 000 Kč'
//   ],
//   [
//     'nazev' => 'VO Klášterec nad Ohří – novostavba',
//     'misto' => 'Klášterec nad Ohří',
//     'rok' => '2022',
//     'cena' => '425 000 Kč'
//   ],
//   [
//     'nazev' => 'VO Třetí Mlýn',
//     'misto' => 'Chomutov',
//     'rok' => '2022',
//     'cena' => '1 278 000 Kč'
//   ],
//   [
//     'nazev' => 'Vodojemy – rekonstrukce',
//     'misto' => 'dle požadavku',
//     'rok' => '2022',
//     'cena' => '874 000 Kč'
//   ],
//   [
//     'nazev' => 'Vodojemy – rekonstrukce',
//     'misto' => 'dle požadavku',
//     'rok' => '2023',
//     'cena' => '678 000 Kč'
//   ],
//   [
//     'nazev' => 'Nabíjecí stanice Hotel 99 + LED osvětlení',
//     'misto' => 'Chomutov',
//     'rok' => '2023',
//     'cena' => '635 400 Kč'
//   ],
//   [
//     'nazev' => 'Elektroinstalace BD Na Příkopě',
//     'misto' => 'Kadaň',
//     'rok' => '2020',
//     'cena' => '1 120 000 Kč'
//   ],
//   [
//     'nazev' => 'Elektroinstalace Spolkový dům Dvořákova 722',
//     'misto' => 'Kadaň',
//     'rok' => '2020',
//     'cena' => '1 728 000 Kč'
//   ],
//   [
//     'nazev' => 'Elektroinstalace BD 265 Prunéřov',
//     'misto' => 'Kadaň',
//     'rok' => '2020–2021',
//     'cena' => '1 035 000 Kč'
//   ],
//   [
//     'nazev' => 'Elektroinstalace UV Hradiště',
//     'misto' => 'Hradiště',
//     'rok' => '2020',
//     'cena' => '930 000 Kč'
//   ],
//   [
//     'nazev' => 'Elektroinstalace ČOV Jirkov',
//     'misto' => 'Jirkov',
//     'rok' => '2020',
//     'cena' => '1 420 000 Kč'
//   ],
//   [
//     'nazev' => 'Papírna Perštejn – rekonstrukce',
//     'misto' => 'Perštejn',
//     'rok' => '2021',
//     'cena' => '568 300 Kč'
//   ],
//   [
//     'nazev' => 'Dva dvojdomky Loučná pod Klínovcem',
//     'misto' => 'Loučná pod Klínovcem',
//     'rok' => '2021',
//     'cena' => '668 000 Kč'
//   ],
//   [
//     'nazev' => 'Skladová hala Droužkovice',
//     'misto' => 'Droužkovice',
//     'rok' => '2023',
//     'cena' => '427 000 Kč'
//   ],
//   [
//     'nazev' => 'Gymnázium Kadaň – rekonstrukce',
//     'misto' => 'Kadaň',
//     'rok' => '2008–2011',
//     'cena' => '580 000 Kč'
//   ],
//   [
//     'nazev' => 'VO Kadaň – rekonstrukce',
//     'misto' => 'Kadaň',
//     'rok' => '2008–2013',
//     'cena' => '2 487 000 Kč'
//   ],
//   [
//     'nazev' => 'Nemocnice Chomutov – rekonstrukce',
//     'misto' => 'Chomutov',
//     'rok' => '2010–2011',
//     'cena' => '385 000 Kč'
//   ],
//   [
//     'nazev' => 'Nemocnice Chomutov – rekonstrukce',
//     'misto' => 'Chomutov',
//     'rok' => '2009',
//     'cena' => '1 500 000 Kč'
//   ],
//   [
//     'nazev' => 'Monitoring PHM – celá ČR',
//     'misto' => 'Česká republika',
//     'rok' => '2010',
//     'cena' => '1 250 000 Kč'
//   ],
//   [
//     'nazev' => 'Rozvodny VVN – technický dozor',
//     'misto' => 'Česká republika',
//     'rok' => '2010',
//     'cena' => '1 200 000 Kč'
//   ],
//   [
//     'nazev' => 'ČS PHM Česká Lípa – novostavba',
//     'misto' => 'Česká Lípa',
//     'rok' => '2010',
//     'cena' => '690 000 Kč'
//   ],
//   [
//     'nazev' => 'SD Bílina – novostavba',
//     'misto' => 'Bílina',
//     'rok' => '2011',
//     'cena' => '3 200 000 Kč'
//   ],
//   [
//     'nazev' => 'RD Ve Svahu',
//     'misto' => 'Kadaň',
//     'rok' => '2011–2012',
//     'cena' => '2 480 000 Kč'
//   ],
//   [
//     'nazev' => 'Hotel 99 – apartmány',
//     'misto' => 'Chomutov',
//     'rok' => '2012–2014',
//     'cena' => '2 950 000 Kč'
//   ],
//   [
//     'nazev' => 'VO Jirkov – novostavba',
//     'misto' => 'Jirkov',
//     'rok' => '2012',
//     'cena' => '108 000 Kč'
//   ],
//   [
//     'nazev' => 'Výrobní hala Boulit',
//     'misto' => 'Jirkov',
//     'rok' => '2013',
//     'cena' => '315 000 Kč'
//   ],
// ];
$zakazky = [
  [
    'nazev' => 'Hotel 99 – novostavba',
    'misto' => 'Chomutov',
    'rok' => '2010–2011',
    'cena' => '11 500 000 Kč',
    'investor' => 'Energetické a dopravní stavby a.s.'
  ],
  [
    'nazev' => 'Letní stadion – novostavba',
    'misto' => 'Chomutov',
    'rok' => '2011–2012',
    'cena' => '12 500 000 Kč',
    'investor' => 'FRK s.r.o.'
  ],
  [
    'nazev' => 'Hotel Split – novostavba a rekonstrukce',
    'misto' => 'Kadaň',
    'rok' => '2010–2011',
    'cena' => '3 800 000 Kč',
    'investor' => 'Joel s.r.o.'
  ],
  [
    'nazev' => 'VO Kadaň – rekonstrukce',
    'misto' => 'Kadaň',
    'rok' => '2014',
    'cena' => '1 487 000 Kč',
    'investor' => 'FRK s.r.o.'
  ],
  [
    'nazev' => 'Osvětlení výrobní haly',
    'misto' => 'Kadaň',
    'rok' => '2019',
    'cena' => '3 170 000 Kč',
    'investor' => 'Donaldson Industrial CR s.r.o.'
  ],
  [
    'nazev' => 'VO Klášterec nad Ohří – novostavba',
    'misto' => 'Klášterec nad Ohří',
    'rok' => '2022',
    'cena' => '425 000 Kč',
    'investor' => 'HP STAV – Jan Perout'
  ],
  [
    'nazev' => 'VO Třetí Mlýn',
    'misto' => 'Chomutov',
    'rok' => '2022',
    'cena' => '1 278 000 Kč',
    'investor' => 'Severočeská servisní a.s.'
  ],
  [
    'nazev' => 'Vodojemy – rekonstrukce',
    'misto' => 'dle požadavku',
    'rok' => '2022',
    'cena' => '874 000 Kč',
    'investor' => 'SčVK a.s.'
  ],
  [
    'nazev' => 'Vodojemy – rekonstrukce',
    'misto' => 'dle požadavku',
    'rok' => '2023',
    'cena' => '678 000 Kč',
    'investor' => 'SčVK a.s.'
  ],
  [
    'nazev' => 'Nabíjecí stanice Hotel 99 + LED osvětlení',
    'misto' => 'Chomutov',
    'rok' => '2023',
    'cena' => '635 400 Kč',
    'investor' => 'PRESIDENT SECURITIES a.s.'
  ],
  [
    'nazev' => 'Elektroinstalace BD Na Příkopě',
    'misto' => 'Kadaň',
    'rok' => '2020',
    'cena' => '1 120 000 Kč',
    'investor' => 'FRK HOTEL s.r.o.'
  ],
  [
    'nazev' => 'Elektroinstalace Spolkový dům Dvořákova 722',
    'misto' => 'Kadaň',
    'rok' => '2020',
    'cena' => '1 728 000 Kč',
    'investor' => 'Petrom stavby a.s.'
  ],
  [
    'nazev' => 'Elektroinstalace BD 265 Prunéřov',
    'misto' => 'Kadaň',
    'rok' => '2020–2021',
    'cena' => '1 035 000 Kč',
    'investor' => 'Petrom stavby a.s.'
  ],
  [
    'nazev' => 'Elektroinstalace UV Hradiště',
    'misto' => 'Hradiště',
    'rok' => '2020',
    'cena' => '930 000 Kč',
    'investor' => 'SčVK as.'
  ],
  [
    'nazev' => 'Elektroinstalace ČOV Jirkov',
    'misto' => 'Jirkov',
    'rok' => '2020',
    'cena' => '1 420 000 Kč',
    'investor' => 'SčVK as.'
  ],
  [
    'nazev' => 'Papírna Perštejn – rekonstrukce',
    'misto' => 'Perštejn',
    'rok' => '2021',
    'cena' => '568 300 Kč',
    'investor' => 'Petrom stavby a.s.'
  ],
  [
    'nazev' => 'Dva dvojdomky Loučná pod Klínovcem',
    'misto' => 'Loučná pod Klínovcem',
    'rok' => '2021',
    'cena' => '668 000 Kč',
    'investor' => 'Petrom stavby a.s.'
  ],
  [
    'nazev' => 'Skladová hala Droužkovice',
    'misto' => 'Droužkovice',
    'rok' => '2023',
    'cena' => '427 000 Kč',
    'investor' => 'FLORANADA s.r.o.'
  ],
  [
    'nazev' => 'Gymnázium Kadaň – rekonstrukce',
    'misto' => 'Kadaň',
    'rok' => '2008–2011',
    'cena' => '580 000 Kč',
    'investor' => 'FRK s.r.o.'
  ],
  [
    'nazev' => 'VO Kadaň – rekonstrukce',
    'misto' => 'Kadaň',
    'rok' => '2008–2013',
    'cena' => '2 487 000 Kč',
    'investor' => 'FRK s.r.o.'
  ],
    [
    'nazev' => 'Nemocnice Chomutov – rekonstrukce',
    'misto' => 'Chomutov',
    'rok' => '2009',
    'cena' => '1 500 000 Kč',
    'investor' => 'FRK s.r.o.'
  ],
  [
    'nazev' => 'Monitoring PHM v nádržích',
    'misto' => 'Česká republika',
    'rok' => '2010',
    'cena' => '1 250 000 Kč',
    'investor' => 'PASOIL s.r.o.'
  ],
  [
    'nazev' => 'Rozvodny VVN – technický dozor',
    'misto' => 'Česká republika',
    'rok' => '2010',
    'cena' => '1 200 000 Kč',
    'investor' => 'Jetcon spol. s r.o.'
  ],
  [
    'nazev' => 'ČS PHM Česká Lípa – novostavba',
    'misto' => 'Česká Lípa',
    'rok' => '2010',
    'cena' => '690 000 Kč',
    'investor' => 'PASOIL s.r.o.'
  ],
  [
    'nazev' => 'SD Bílina – novostavba',
    'misto' => 'Bílina',
    'rok' => '2011',
    'cena' => '3 200 000 Kč',
    'investor' => 'FRK s.r.o.'
  ],
  [
    'nazev' => 'RD Ve Svahu',
    'misto' => 'Kadaň',
    'rok' => '2011–2012',
    'cena' => '2 480 000 Kč',
    'investor' => 'FRK s.r.o.'
  ],
  [
    'nazev' => 'Hotel 99 – apartmány',
    'misto' => 'Chomutov',
    'rok' => '2012–2014',
    'cena' => '2 950 000 Kč',
    'investor' => 'AMP a.s.'
  ],
  [
    'nazev' => 'VO Jirkov – novostavba',
    'misto' => 'Jirkov',
    'rok' => '2012',
    'cena' => '108 000 Kč',
    'investor' => 'Město Jirkov'
  ],
  [
    'nazev' => 'Výrobní hala Boulit',
    'misto' => 'Jirkov',
    'rok' => '2013',
    'cena' => '315 000 Kč',
    'investor' => 'Boulit s.r.o.'
  ],
  [
    'nazev' => 'Společné prostory Cihlářská',
    'misto' => 'Chomutov',
    'rok' => '2014',
    'cena' => '750 000 Kč',
    'investor' => 'SBD Chomutov'
  ],
];

// usort($zakazky, function ($a, $b) {
//     // vezmeme první rok (např. z "2010–2011" -> 2010)
//     $rokA = (int) preg_replace('/[^0-9].*$/', '', $a['rok']);
//     $rokB = (int) preg_replace('/[^0-9].*$/', '', $b['rok']);

//     return $rokA <=> $rokB;
// });


usort($zakazky, function ($a, $b) {
    $rokA = (int) preg_replace('/[^0-9].*$/', '', $a['rok']);
    $rokB = (int) preg_replace('/[^0-9].*$/', '', $b['rok']);

    return $rokB <=> $rokA;
});
?>
<!doctype html>
<html lang="cs">
<head>
  <meta charset="utf-8">
  <title>Vybrané zakázky | BZ-tech s.r.o.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="section-muted py-5">
<div class="container">
  <h1 class="fw-bold mb-3 text-center">Přehled vybraných zakázek</h1>

  <!-- ZPĚT -->
  <div class="mb-4">
  <button class="btn btn-outline-secondary" onclick="history.back()">
    <i class="bi bi-arrow-left me-2"></i>Zpět
  </button>
  </div>

  <!-- TABULKA -->
  <div class="table-responsive">
    <table class="table table-striped table-hover align-middle">
      <thead class="table-light">
        <tr>
          <th>Zakázka</th>
          <th>Místo</th>
          <th>Rok</th>
          <th>Rozpočet</th>
          <th>Zadavatel/Investor</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($zakazky as $z): ?>
        <tr>
          <td class="fw-semibold"><?= htmlspecialchars($z['nazev']) ?></td>
          <td><?= htmlspecialchars($z['misto']) ?></td>
          <td><?= $z['rok'] ?></td>
          <td><?= htmlspecialchars($z['cena']) ?></td>
          <td><?= htmlspecialchars($z['investor']) ?></td>

        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- CTA DOLŮ -->
  <div class="text-center mt-5">
    <a href="index.php#kontakt" class="btn btn-primary btn-lg">
        Máte podobný projekt? Ozvěte se nám
    </a> 
  </div>
</div>
</section>
</body>
</html>

<?php require 'includes/footer.php'; ?>