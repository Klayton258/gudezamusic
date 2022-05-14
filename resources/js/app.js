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

// ====================================Musics===============================

$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        }
    });
  });

// ====================================Musics===============================
