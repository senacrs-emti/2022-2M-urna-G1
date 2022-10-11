<?php
// dados

include_once'./includes/_dados.php';

if (!empty($_POST['email']) || !empty($_POST['senha'])){

    if ($_POST['email'] == $email && $_POST['senha'] == $senha) {

        $_SESSION['LOGADO'] = 'TRUE';

        header('Location: home.php');
        exit();
    }
};

header('Location: index.php?erro=1');
exit();


?>