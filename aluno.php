<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php require_once('./php/includes/links-header.php');?>
    <script type="text/javascript" src="./js/script_aluno.js"></script>
    <title>Aba Ybyra</title>
</head>

<body>
    <?php require_once("./php/includes/header.php");?>
  <main>
<div class="container">
<div class="row">
<div class="col-5 mx-auto pt-5">
<h3 class="mb-5">Cadastro do Aluno</h3>
<form method="POST" action="./php/actions/db_aluno.php">
<div class="form-group">
<label class="label-form" for="nome">Nome:</label>
<input type="text" class="form-control" name="nome" id="nome" onkeyup="valida_campos()">
</div>
<div class="form-group">
<label class="label-form" for="nome">Data de Nascimento: </label>
<input type="date" class="form-control" name="dn" id="dn"  onkeyup="valida_campos()">
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
<label class="label-form" for="nome">Escola que Estuda:</label>
<input type="text" class="form-control" name="escola" id="escola"  onkeyup="valida_campos()">
</div>
<div class="form-group">
<label class="label-form" for="nome">Código Aluno:</label>
<input type="text" class="form-control" name="codigo_aluno" id="codigo_aluno"  onkeyup="valida_campos()">
</div>
<button type="submit" name="cadastrar" class="btn btn-warning mb-4" id="cadastrar-aluno">Cadastrar</button>
</form>
</div>
</div>
</div>

</main>

<?php
  require_once("./php/includes/footer.php");
  require_once("./php/includes/links-body.php");
?>
</html>
