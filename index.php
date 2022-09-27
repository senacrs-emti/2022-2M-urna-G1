<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
            <section>
                <div class="tela"></div>
            </section>
            <section>
                <div class="teclado">
                    <div class="col titulo">
                        <img id="je" src="./imgs/justiçaeleitoral.png">
                        <h3 id="tituloaa">Justiça Eleitoral</h3> 
                    </div>
                    <div class="container">

                        <?php
                        $aa = [
                            0,
                            1,
                            2,
                            3,
                            4,
                            5,
                            6,
                            7,
                            8,
                            9
                        ];
                        for ($i=0; $i <=8 ; $i++) {  ?>
                            <button class="botao"><?php echo $aa[$i] + 1; ?></button>
                            
                        <?php
                            }
                        ?>
                    </div>
                        <div class="row">
                            <div class="col">
                                <button class="botao">0</button>
                            </div>
                        </div>    
                        <div class="decisao">
                            <button id="branco">Branco</button>
                            <button id="apaga">Apaga</button>
                            <button id="confirma">Confirma</button>
                        </div>
                    </div>
                </div>
                <p>urna</p>

            </section>
        </div>
    </main>
</body>
</html>