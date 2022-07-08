// =================================Nav Bar=================================
const btnMobile = document.getElementById('btn-menumobile')

function toggleMenu(event) {
    if (event.type == 'touchstart') event.preventDefault()
    const nav = document.getElementById('menu')
    nav.classList.toggle('active')
    const active = nav.classList.contains('active')
    event.currentTarget.setAttribute('aria-expanded', active)
}
btnMobile.addEventListener('click', toggleMenu)
btnMobile.addEventListener('touchstart', toggleMenu)
// =================================Nav Bar=================================

// ====================================Modal===============================

  $(window).on('load', function() {
    setTimeout(()=>{
        $('#subscribeModal').modal('show');
    },5000)
});
// ====================================Modal===============================
