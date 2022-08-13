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
    const subpopup = getCookie("subpopup")

    if(subpopup =="" && subpopup != 'false' && subpopup != 'true'){
        setTimeout(()=>{
            $('#subscribeModal').modal('show');
        },5000)
    }
});

$('#close-popup').click(function (e) {
    e.preventDefault();
    // setCookie("subpopup","false",1)
});

$("#subscribepopup").click(()=>{
    // setCookie("subpopup","true",365)
});


function setCookie(name,value,days){
    const d = new Date();
    d.setTime(d.getTime() + (days*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();

    document.cookie = `${name}=${value}; expires=${expires}; path=/`;
}

function deleteCookie(name){
    document.cookie = `${name}; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

// ====================================Modal===============================

//===================================Lead===============================

function openTab(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.firstElementChild.className += " w3-border-red";
  }

//===================================Lead===============================

// =======================Pay Modal M-Pesa=========================
$('#paybutton').click(function() {
    $('#Modalpayment').modal('show');
});
$('#normalText').click(function() {
    $('#Modalpayment').modal('hide');
});
// =======================Pay Modal M-Pesa=========================

