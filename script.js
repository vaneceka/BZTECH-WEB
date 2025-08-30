<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

 // Aktuální rok ve footeru
document.getElementById('year').textContent = new Date().getFullYear();

// Hladké skrolování s offsetem kvůli fixed navbaru
document.querySelectorAll('a[href^="#"]').forEach(a=>{
    a.addEventListener('click',e=>{
    const id=a.getAttribute('href');
    if(id.length>1){
        e.preventDefault();
        const el=document.querySelector(id);
        if(!el) return;
        const y=el.getBoundingClientRect().top + window.pageYOffset - 72; // offset
        window.scrollTo({top:y, behavior:'smooth'});
    }
    })
})

// Alert pro kontakni formular
document.addEventListener('DOMContentLoaded', () => {
  // Rok do footeru, pokud máte <span id="year"></span>
  const yearEl = document.getElementById('year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  // Najdeme formulář v pravém sloupci
  const form = document.querySelector('#kontakt form.p-4.bg-white.rounded-4.shadow-sm');
  if (!form) return;

  // ZRUŠÍME inline onsubmit z HTML, ale HTML necháváme beze změn
  form.setAttribute('onsubmit', '');
  form.onsubmit = null;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    // Načteme hodnoty podle ID
    const name    = document.getElementById('jmeno')?.value?.trim() ?? '';
    const email   = document.getElementById('email')?.value?.trim() ?? '';
    const phone   = document.getElementById('telefon')?.value?.trim() ?? '';
    const message = document.getElementById('zprava')?.value?.trim() ?? '';
    const gdprOk  = document.getElementById('gdpr')?.checked ?? false;

    if (!gdprOk) {
      alert('Prosím potvrďte souhlas se zpracováním osobních údajů.');
      return;
    }
    if (!name || !email || !message) {
      alert('Vyplňte prosím jméno, e-mail a zprávu.');
      return;
    }

    // Pošleme data na backend
    const fd = new FormData();
    fd.append('name', name);
    fd.append('email', email);
    fd.append('phone', phone);
    fd.append('message', message);
    fd.append('gdpr', 'on');  // jen flag, backend si zkontroluje

    try {
      const res = await fetch('contact.php', { method: 'POST', body: fd });
      const data = await res.json().catch(() => ({}));

      if (res.ok && data.success) {
        alert('Děkujeme! Vaši zprávu jsme přijali a brzy se ozveme.');
        form.reset();
      } else {
        alert('Odeslání se nepodařilo: ' + (data?.error ?? 'zkuste to prosím později.'));
      }
    } catch (err) {
      alert('Nastala chyba při odesílání. Zkuste to prosím znovu.');
    }
  });
});

