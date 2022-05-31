function vendedor() {
    document.getElementById("funcionario").style.display = "block"
    document.getElementById("vendedor").style.display = "block"
    document.getElementById("gerente").style.display = "none"
    document.getElementById("consultor").style.display = "none"

    document.getElementById("button").style.display = "block"
    document.getElementById("button").value = "vendedor"
}

function gerente() {
    document.getElementById("funcionario").style.display = "block"
    document.getElementById("vendedor").style.display = "none"
    document.getElementById("gerente").style.display = "block"
    document.getElementById("consultor").style.display = "none"

    document.getElementById("button").style.display = "block"
    document.getElementById("button").value = "gerente"
}

function consultor() {
    document.getElementById("funcionario").style.display = "block"
    document.getElementById("vendedor").style.display = "none"
    document.getElementById("gerente").style.display = "none"
    document.getElementById("consultor").style.display = "block"

    document.getElementById("button").style.display = "block"
    document.getElementById("button").value = "consultor"
}