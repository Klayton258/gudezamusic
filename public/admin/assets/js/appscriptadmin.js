

function validarform() {
    var imagem = document.getElementById("imagem")
    var titulo = document.getElementById("titulo")
    var slideform = document.getElementById("slideform")

    if (titulo.value == "") {
        alert("Adicione um titulo")
        titulo.focus()
        return
    }
    if (imagem.value == "") {
        alert("Adicione uma imagem")
        imagem.focus()
        return
    }
    slideform.submit()
}
