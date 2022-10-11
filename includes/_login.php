<?php
// 
if( !isset($_SESSION['LOGADO']) ||  empty($_SESSION['LOGADO']) || $_SESSION['LOGADO'] != 'TRUE'){
    header('Location: index.php?erro=1');
    exit();
}
?>