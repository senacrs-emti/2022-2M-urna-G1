<?php
//abre o arquivo
$arquivo = fopen("partidos.csv", "r"); 

//repeticao
while ($linha = fgetcsv($arquivo, 1000, ",")) {
    //tratamento para mostrar apenas os dados reais
    if($linha[0] != 'COD'){
        $sql  = "INSERT INTO partidos (PartidosID, Nome, Sigla, NumLegenda, Excluido)
                VALUES ('".$linha[0]."', '".$linha[1]."', '".$linha[2]."', '".$linha[3]."', 'F');<br>";
                echo $sql;
    }
}
//fecha o arquivo
fclose($arquivo);

?>