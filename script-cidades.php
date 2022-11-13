<?php
//abre o arquivo
$arquivo = fopen("cidades.csv", "r"); 

//repeticao
while ($linha = fgetcsv($arquivo, 1000, ",")) {
    //tratamento para mostrar apenas os dados reais
    if($linha[0] != 'COD'){
        $sql  = "INSERT INTO cidades (CidadesID, CodigoUF, CodigoCidade, Nome)
                VALUES ('".$linha[0]."', '".$linha[1]."', '".$linha[2]."');<br>";
                echo $sql;
    }
}
//fecha o arquivo
fclose($arquivo);

?>