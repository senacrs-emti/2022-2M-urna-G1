<?php
include_once './includes/_dados.php';
include_once './includes/_login.php';
include_once './includes/head.php';
include_once './includes/_header.php';
?>
 

<div class="container-fluid p-5" >

<div class="row container-fluid">
  

<div id="cadastro" class="  col-md-5  container">


<h1 id="titulo-cadastro" class="container">Cadastro de candidato</h1>

<form id="form"class= "container">
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputNomeCompleto">Nome completo do candidato</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Nome...">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail14"> partido</label>
      <input type="text" class="form-control" id="inputPardido">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-8">
    <label for="inputAddress2">Vice Candidato</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="insira o nome do vice-candidato">
  </div>
  <div class="form-group col-md-4">
      <label for="inputEstado">Tipo de Candidatura</label>
      <select id="inputEstado" class="form-control">
        <option selected>Escolher...</option>
        <option>...</option>
      </select>
    </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCEP">CPF</label>
      <input type="text" class="form-control" id="inputCPF" placeholder="000.000.000-00">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
</div>
<div di tabela class="col-md-6">
<table id="tabela" class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome Completo</th>
      <th scope="col">Vice</th>
      <th scope="col">Partido</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>
</div>
</div>

<?php
include_once"./includes/footer.php";
?>