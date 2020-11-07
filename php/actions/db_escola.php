<?php

    require_once "db_connect.php";

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nome_responsavel = $_POST['nome_resp'];
        $endereco = $_POST['endereco'];
        $codigo_aluno = $_POST['codigo_aluno'];
        $codigo_professor = $_POST['codigo_professor'];

        $sql = "INSERT INTO escola VALUES (null,'$nome', '$email', '$senha', '$nome_responsavel', '$endereco', '$codigo_aluno', '$codigo_professor');";

        mysqli_query($connect, $sql);
    echo "$sql";
      //  header("Location: ../../index.php");
    }


?>
