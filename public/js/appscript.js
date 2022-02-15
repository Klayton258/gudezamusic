var quantidade_m = 6
var pagina = 1

$(document).ready(function () {
    listar_musicas(quantidade_m, pagina)
});

function listar_musicas(quantidade_m, pagina) {
    var dados = {
        pagina: pagina,
        quantidade_m: quantidade_m
    }
    $.post("?a=musicas-conteudo", dados,
        function (retorna) {
            $('#conteudo').html(retorna);
        },
    );
}

//================================================================================
var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
triggerTabList.forEach(function (triggerEl) {
    var tabTrigger = new bootstrap.Tab(triggerEl)

    triggerEl.addEventListener('click', function (event) {
        event.preventDefault()
        tabTrigger.show()
    })
})

//?=====================loader==========================================
setTimeout(function () {
    $(".loader").fadeToggle();
    $(".main").fadeIn(1800)
}, 1800)

//?=====================================================================

//=============================Navbar===================================

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


//=============================Navbar===================================
