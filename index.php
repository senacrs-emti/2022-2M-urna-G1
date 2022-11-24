<?php
$telaPoke = "
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    
</head>
<body>
    <main>
        <div class="container">
            <section>
                <div class="tela">
                <input type="hidden" value="0i" id="tipovoto"> 
                </div>
            </section>
            <section>
                <div class="teclado">
                    <div class="titulo">
                        <h1>Justiça Eleitoral</h1>
                    </div>
                    <div class="col">
                    <button class="botao bnt click" onclick="inserir(1)">1</button>
                    <button class="botao bnt click" onclick="inserir(2)">2</button>
                    <button class="botao bnt click" onclick="inserir(3)">3</button>
                    <button class="botao bnt click" onclick="inserir(4)">4</button>
                    <button class="botao bnt click" onclick="inserir(5)">5</button>
                    <button class="botao bnt click" onclick="inserir(6)">6</button>
                    <button class="botao bnt click" onclick="inserir(7)">7</button>
                    <button class="botao bnt click" onclick="inserir(8)">8</button>
                    <button class="botao bnt click" onclick="inserir(9)">9</button>
                    <button class="botao bnt click" onclick="inserir(0)">0</button>
                    </div>
                    <div class="decisao">
                            <button id="branco" onclick="branco()">BRANCO</button>
                            <button id="corrige" onclick="corrige()">CORRIGE</button>
                            <button  class="troca-titulo" id="send" onclick="votar()">CONFIRMA</button>
                            <audio id="confirma-som" src="./audios/som-confirma.mp3"></audio>
                        </div>
                </div>
            </section>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>