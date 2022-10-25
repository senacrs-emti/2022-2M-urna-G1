<?php
// dados
include_once './includes/_dados.php';

$_SESSION['LOGADO'] = '';
session_destroy();
header('Location: index.php');
?>