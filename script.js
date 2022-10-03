const button = document.querySelector("#botao-confirma-som");
button.addEventListener("click", function () {
const audio = document.querySelector("#confirma-som");
audio.play();
});

function inserir(valor) {
    var valor1 = document.getElementById("quadrado").value;
    var valor2 = document.getElementById("quadrado2").value;

    if (valor1 == "") {
        document.getElementById("quadrado").value = valor;
    } else if (valor2 == "") {
        document.getElementById("quadrado2").value = valor;
    }
}

function corrige() {
    document.getElementById("quadrado").value = "";
    document.getElementById("quadrado2").value = "";
}


function votar() {

    var valor1 = parseInt(document.getElementById("quadrado").value);
    var valor2 = parseInt(document.getElementById("quadrado2").value);
    var candidado = (valor1 * 10) + valor2;
    if (sessionStorage.getItem(candidado) !== null) {
        votos = parseInt(sessionStorage.getItem(candidado)) + 1;
        sessionStorage.setItem(candidado, votos);
    } else {
        sessionStorage.setItem(candidado, 1);
        
    }
    alert("Confirmado voto no candidato "+candidado)
    document.getElementById("quadrado").value = "";
    document.getElementById("quadrado2").value = "";
}
/*
function resultado() {
    document.getElementById("resultado").innerHTML=""
    for(i=0;i<100;i++){
        if (sessionStorage.getItem(i) !== null) {
            //alert(i);
            document.getElementById("resultado").innerHTML += "Cantidado "+i+" tem "+sessionStorage.getItem(i)+" votos<br/>";
        }
    }
}