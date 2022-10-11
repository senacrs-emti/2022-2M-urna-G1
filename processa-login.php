<?php
// dados

include_once'./includes/_dados.php';

if (!empty($_POST['email']) || !empty($_POST['senha'])){

    if ($_POST['email'] == $usuario && $_POST['senha'] == $senha) {

        $_SESSION['LOGADO'] = 'TRUE';

        header('Location: home.php');
    }
}

header('Location: login.php?erro=1');
exit();


?>