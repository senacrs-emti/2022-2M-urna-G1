<?php
$tipo = $_POST['tipo'];
$telas =['0i','1a', '2a', '1b', '2b', '1c', '2c', '1d', '2d', '1e','2e','6f'];
// descobre a posicao
$posicao = array_search($tipo,$telas);
$novaTela = $telas[$posicao+1];


switch ($novaTela) {
    case '1a':
        $html =' 
            <div id="cargo" class="col">
                <input type="hidden" value="1a" id="tipovoto"> 
                <div class="deputadofederal">
                    <h1>Deputado Federal</h1>
                    <div id="quadrados" class="col">
                        <input size="1" id="quadrado" value="" maxlength="1" type="text" readonly="readonly"/>
                        <input size="1" id="quadrado2" value="" maxlength="1" type="text" readonly="readonly"/>                            </div>
                    </div>
                </div>';
        break;
    case '2a':
        $html = '<div id="cargo2" class="col">
                    <input type="hidden" value="2a" id="tipovoto"> 
                        <div class="deputadofederal2">
                            <h1>Deputado Federal</h1>
                            <div id="quadrados" class="col">
                                <h1 class="">Número:</h1>
                                <div id="quadrados" class="col">
                                    <input size="1" id="quadrado" value="" maxlength="1" type="text" readonly="readonly"/>
                                    <input size="1" id="quadrado2" value="" maxlength="1" type="text" readonly="readonly"/>                            </div>
                                </div>
                            </div>
                            <div id="nome" class="col">
                                <h1>Nome:</h1>
                                <h2>Sla</h2>
                            </div>
                            <div id="nome" class="col">
                                <h1>Partido:</h1>
                                <h2>Sla</h2>
                            </div>
                            <div id="nome" class="col">
                                <h1>1 suplente:</h1>
                                <h2>Sla</h2>
                            </div>
                            <div id="nome" class="col">
                                <h1>2 suplente:</h1>
                                <h2>Sla</h2>
                            </div>
                            <hr>
                            <div id="nome" class="col">
                                <h1>Aperte:</h1>
                                <h2>CONFIRMA para CONFIRMAR este voto</h2>
                            </div>
                            <h2>CORRIGE para REINICIAR este voto</h2>
                        </div>';
        break;
    case '1b':
        $html = '<div id="cargo" class="col">
                    <input type="hidden" value="1b" id="tipovoto"> 
                    <div class="deputadoestadual">
                        <h1>Deputado Estadual</h1>
                        <div id="quadrados" class="col">
                            <input size="1" id="quadrado" value="" maxlength="1" type="text" readonly="readonly"/>
                            <input size="1" id="quadrado2" value="" maxlength="1" type="text" readonly="readonly"/>                            </div>
                        </div>
                    </div>
                </div> ';
        break;
    case '2b':
        $html = '<div id="cargo2" class="col">
        <input type="hidden" value="2b" id="tipovoto">
                    <div class="deputadoestadual2">
                        <h1>Deputado Estadual</h1>
                        <div id="quadrados" class="col">
                            <h1 class="">Número:</h1>
                            <div id="quadrados" class="col">
                                <input size="1" id="quadrado" value="" maxlength="1" type="text" readonly="readonly"/>
                                <input size="1" id="quadrado2" value="" maxlength="1" type="text" readonly="readonly"/>                            </div>
                            </div>
                        </div>
                        <div id="nome" class="col">
                            <h1>Nome:</h1>
                            <h2>Sla</h2>
                        </div>
                        <div id="nome" class="col">
                            <h1>Partido:</h1>
                            <h2>Sla</h2>
                        </div>
                        <div id="nome" class="col">
                            <h1>1 suplente:</h1>
                            <h2>Sla</h2>
                        </div>
                        <div id="nome" class="col">
                            <h1>2 suplente:</h1>
                            <h2>Sla</h2>
                        </div>
                        <hr>
                        <div id="nome" class="col">
                            <h1>Aperte:</h1>
                            <h2>CONFIRMA para CONFIRMAR este voto</h2>
                        </div>
                        <h2>CORRIGE para REINICIAR este voto</h2>
                    </div>';
        break;
    case '1c':
        $html = '<div id="cargo" class="col">   
                    <input type="hidden" value="1c" id="tipovoto"> 
                    <div class="senador">
                        <h1>Senador</h1>
                        <div id="quadrados" class="col">
                            <input size="1" id="quadrado" value="" maxlength="1" type="text" readonly="readonly"/>
                            <input size="1" id="quadrado2" value="" maxlength="1" type="text" readonly="readonly"/>                            </div>
                        </div>
                    </div>
                </div>';
        break;
    case '2c':

        $html = '<div id="cargo2" class="col">
                    <input type="hidden" value="2c" id="tipovoto">
                    <div class="senador2">
                        <h1>Senador</h1>
                        <div id="quadrados" class="col">
                            <h1 class="">Número:</h1>
                            <div id="quadrados" class="col">
                                <input size="1" id="quadrado" value="" maxlength="1" type="text" readonly="readonly"/>
                                <input size="1" id="quadrado2" value="" maxlength="1" type="text" readonly="readonly"/>                            </div>
                            </div>
                        </div>
                        <div id="nome" class="col">
                            <h1>Nome:</h1>
                            <h2>Sla</h2>
                        </div>
                        <div id="nome" class="col">
                            <h1>Partido:</h1>
                            <h2>Sla</h2>
                        </div>
                        <div id="nome" class="col">
                            <h1>1 suplente:</h1>
                            <h2>Sla</h2>
                        </div>
                        <div id="nome" class="col">
                            <h1>2 suplente:</h1>
                            <h2>Sla</h2>
                        </div>
                        <hr>
                        <div id="nome" class="col">
                            <h1>Aperte:</h1>
                            <h2>CONFIRMA para CONFIRMAR este voto</h2>
                        </div>
                        <h2>CORRIGE para REINICIAR este voto</h2>
                    </div>';
        break;
    case '1d':
        $html = '<div id="cargo" class="col">
                    <input type="hidden" value="1d" id="tipovoto">
                    <div class="governador">
                        <h1>Governador</h1>
                        <div id="quadrados" class="col">
                            <input size="1" id="quadrado" value="" maxlength="1" type="text" readonly="readonly"/>
                            <input size="1" id="quadrado2" value="" maxlength="1" type="text" readonly="readonly"/>                            </div>
                        </div>
                    </div>
                </div>';
        break;
    case '2d':
        $html = '<div id="cargo2" class="col">
                    <input type="hidden" value="2d" id="tipovoto">
                    <div class="governador2">
                        <h1>Governador</h1>
                        <div id="quadrados" class="col">
                            <h1 class="">Número:</h1>
                            <div id="quadrados" class="col">
                                <input size="1" id="quadrado" value="" maxlength="1" type="text" readonly="readonly"/>
                                <input size="1" id="quadrado2" value="" maxlength="1" type="text" readonly="readonly"/>                            </div>
                            </div>
                        </div>
                        <div id="nome" class="col">
                            <h1>Nome:</h1>
                            <h2>Sla</h2>
                        </div>
                        <div id="nome" class="col">
                            <h1>Partido:</h1>
                            <h2>Sla</h2>
                        </div>
                        <div id="nome" class="col">
                            <h1>1 suplente:</h1>
                            <h2>Sla</h2>
                        </div>
                        <div id="nome" class="col">
                            <h1>2 suplente:</h1>
                            <h2>Sla</h2>
                        </div>
                        <hr>
                        <div id="nome" class="col">
                            <h1>Aperte:</h1>
                            <h2>CONFIRMA para CONFIRMAR este voto</h2>
                        </div>
                        <h2>CORRIGE para REINICIAR este voto</h2>
                    </div>';
        break;
    case '1e':
        $html = '<div id="cargo" class="col">
                    <input type="hidden" value="1e" id="tipovoto">
                    <div class="presidente">
                        <h1>Presidente</h1>
                        <div id="quadrados" class="col">
                            <input size="1" id="quadrado" value="" maxlength="1" type="text" readonly="readonly"/>
                        <input size="1" id="quadrado2" value="" maxlength="1" type="text" readonly="readonly"/>                            </div>
                    </div>
                    </div>
                </div>';
        break;
    case '2e':
        $html = '<div id="cargo2" class="col">
                    <input type="hidden" value="2e" id="tipovoto">
                    <div class="presidente2">
                        <h1>Presidente</h1>
                        <div id="quadrados" class="col">
                            <h1 class="">Número:</h1>
                            <div id="quadrados" class="col">
                                <input size="1" id="quadrado" value="" maxlength="1" type="text" readonly="readonly"/>
                                <input size="1" id="quadrado2" value="" maxlength="1" type="text" readonly="readonly"/>                            </div>
                            </div>
                        </div>
                        <div id="nome" class="col">
                            <h1>Nome:</h1>
                            <h2>Sla</h2>
                        </div>
                        <div id="nome" class="col">
                            <h1>Partido:</h1>
                            <h2>Sla</h2>
                        </div>
                        <div id="nome" class="col">
                            <h1>1 suplente:</h1>
                            <h2>Sla</h2>
                        </div>
                        <div id="nome" class="col">
                            <h1>2 suplente:</h1>
                            <h2>Sla</h2>
                        </div>
                        <hr>
                        <div id="nome" class="col">
                            <h1>Aperte:</h1>
                            <h2>CONFIRMA para CONFIRMAR este voto</h2>
                        </div>
                        <h2>CORRIGE para REINICIAR este voto</h2>
                    </div>';
        break;
    case '6f':
        $html = '<div class="col" id="fim">
                    <h2>FIM</h2>
                </div>';
        break;
    default:
        $html = '';
        break;
}

exit($html);
?>