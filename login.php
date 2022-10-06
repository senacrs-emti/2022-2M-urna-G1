<?php
include_once "./includes/head.php";
?>
  <title>Tsenac admin</title>
  </head>
<body id="login">
<section id="contents">
<h2 id="title-admin" >Bem-vindo Admin</h2>
<form id="login-form">

    <div id="conteudo">
    
  <div class="form-group container">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control  input-login" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>
  <div class="form-group container">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control  input-login" id="exampleInputPassword1" placeholder="Senha">
  </div>
 <div class="container">
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
  </div>
  </section>
</form>
</body>






<?php
include_once"./includes/footer.php";
?>