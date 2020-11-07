<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php require_once('./php/includes/links-header.php');?>

    <title>Aba Ybyra</title>
</head>

<body>
    <?php require_once("./php/includes/header.php");?>

<main>
  <div class="container">
      <div class="row">
      <div class="col-5 mx-auto pt-5">
      <h3 class="mb-5">Cadastro do Professor</h3>
<form method="POST" action="./actions/db_professor.php">
      <div class="form-group">
      <label class="label-form" for="nome">Nome:</label>
      <input type="text" class="form-control" name="nome" id="nome" onkeyup="valida_campos()">
      </div>
      <div class="form-group">
      <label class="label-form" for="nome">E-mail:</label>
      <input type="email" class="form-control" name="email" id="email"  onkeyup="valida_campos()">
      </div>
      <div class="form-group">
      <label class="label-form" for="nome">Crie sua Senha:</label>
      <input type="password" class="form-control" name="senha" id="senha"  onkeyup="valida_campos()">
      </div>
      <div class="form-group">
      <label class="label-form" for="nome">Escola que Leciona:</label>
      <input type="text" class="form-control" name="escola" id="escola"  onkeyup="valida_campos()">
      </div>
      <div class="form-group">
      <label class="label-form" for="nome">Código do Professor:</label>
      <input type="text" class="form-control" name="codigo_professor" id="codigo_professor"  onkeyup="valida_campos()">
      </div>
      <button type="submit" name="cadastrar" class="btn btn-warning mb-4" id="cadastrar-professor">Cadastrar</button>
  </form>
      </div>
      </div>
      </div>
</main>


<?php

  require_once("./php/includes/links-body.php");
?>
</html>
