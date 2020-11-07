<?php

    require_once "db_connect.php";

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $data_nascimento = $_POST['dn'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $escola = $_POST['escola'];
        $codigo_aluno = $_POST['codigo_aluno'];

        $sql = "INSERT INTO aluno VALUES (null, '{$nome}', '$data_nascimento', '$email', '$senha', '$escola', '$codigo_aluno')";

        $_SESSION['nome_aluno'] = $_POST['nome'];

        mysqli_query($connect, $sql);
    //    echo "$sql";
     header("Location: ../../index.php");
    }




?>
