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
  const form = document.getElementById('contact-form');
  const statusBox = document.getElementById('form-status');
  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault(); // zabrání přechodu na JSON stránku

    const name    = document.getElementById('jmeno')?.value?.trim() ?? '';
    const email   = document.getElementById('email')?.value?.trim() ?? '';
    const phone   = document.getElementById('telefon')?.value?.trim() ?? '';
    const message = document.getElementById('zprava')?.value?.trim() ?? '';
    const gdprOk  = document.getElementById('gdpr')?.checked ?? false;

    if (!gdprOk)  { alert('Prosím potvrďte souhlas se zpracováním osobních údajů.'); return; }
    if (!name || !email || !message) { alert('Vyplňte prosím jméno, e-mail a zprávu.'); return; }

    const fd = new FormData();
    fd.append('name', name);
    fd.append('email', email);
    fd.append('phone', phone);
    fd.append('message', message);
    fd.append('gdpr', 'on');

    const url = form.getAttribute('action') || 'contact.php';
    if (statusBox) statusBox.innerHTML = '<div class="text-secondary">Odesílám…</div>';

    try {
      const res = await fetch(url, { method: 'POST', body: fd });
      const text = await res.text();
      let data = {};
      try { data = JSON.parse(text); } catch {}

      if (res.ok && data.success) {
        if (statusBox) statusBox.innerHTML = '<div class="alert alert-success mb-0">Děkujeme! Zpráva byla odeslána.</div>';
        form.reset();
      } else {
        const msg = data.error || `Chyba při odeslání (${res.status}).`;
        if (statusBox) statusBox.innerHTML = `<div class="alert alert-danger mb-0">${msg}</div>`;
      }
    } catch (err) {
      if (statusBox) statusBox.innerHTML = `<div class="alert alert-danger mb-0">Síťová chyba: ${err?.message || 'zkuste to znovu'}</div>`;
    }
  });
});