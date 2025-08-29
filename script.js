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

