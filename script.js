const button = document.querySelector("#send");
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
    document.getElementById("quadrado").value = "";
    document.getElementById("quadrado2").value = "";
}

$(document).ready(function() {

    $('#send').click(function(){

        var tipovoto = $('#tipovoto').val();
        $.ajax({
            url: 'processa.php',
            type: 'post',
            data: 'tipo='+tipovoto,
            success: function(results){
                $(".tela").html(results);
            }
        });
    });

});
