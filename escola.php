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
<h3 class="mb-5">Cadastre sua Escola</h3>
<form method="POST" action="./php/actions/db_escola.php">
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
<label class="label-form" for="nome">Nome Responsavel: </label>
<input type="text" class="form-control" name="nome_resp" id="nome_resp"  onkeyup="valida_campos()">
</div>
<div class="form-group">
<label class="label-form" for="nome">Endereço:</label>
<input type="text" class="form-control" name="endereco" id="endereco"  onkeyup="valida_campos()">
</div>
<div class="form-group">
<label class="label-form" for="nome">Código Aluno:</label>
<input type="text" class="form-control" name="codigo_aluno" id="codigo_aluno"  onkeyup="valida_campos()">
</div>
<div class="form-group">
<label class="label-form" for="nome">Código Professor:</label>
<input type="text" class="form-control" name="codigo_professor" id="codigo_professor"  onkeyup="valida_campos()">
</div>
<button type="submit" name="cadastrar" class="btn btn-warning mb-4" id="cadastrar-escola">Cadastrar</button>
</form>
</div>
</div>
</div>
</div>
</main>

<br><br><br><br><br><br>
<?php

  require_once("./php/includes/links-body.php");
?>
</html>
