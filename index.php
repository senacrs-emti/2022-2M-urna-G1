<?php
include_once "./includes/head.php";
?>
<div id="cadastro" class="container">
<form>
  <div class="form-row">
    <div class="form-group col-md-9">
      <label for="inputNomeCompleto">Nome completo do candidato</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Nome...">
    </div>
    <div class="form-group col-md-3">
      <label for="inputEmail14"> partido</label>
      <input type="text" class="form-control" id="inputPardido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Vice candidato</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Nome do vice...">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Tipo de candidatura</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="insira o tipo de candidatura">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado" class="form-control">
        <option selected>Escolher...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">Idade</label>
      <input type="text" class="form-control" id="inputCEP">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCEP">CPF</label>
      <input type="text" class="form-control" id="inputCEP" placeholder="000.000.000-00">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
</div>
<?php
include_once"./includes/footer.php";
?>