<?php
//abre o arquivo
$arquivo = fopen("acessos.csv", "r"); 

//repeticao
while ($linha = fgetcsv($arquivo, 1000, ",")) {
    //tratamento para mostrar apenas os dados reais
    if($linha[0] != 'COD'){
        $sql  = "INSERT INTO cargos (Cod, Nome, Usuario, Senha)
                VALUES ('".$linha[0]."', '".$linha[1]."', '".$linha[2]."', '".$linha[3]."', 'F');<br>";
                echo $sql;
    }
}
//fecha o arquivo
fclose($arquivo);

?>