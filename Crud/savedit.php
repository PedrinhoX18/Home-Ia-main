<?php
    // isset -> serve para saber se uma variável está definida

    include "../config/config.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $phone = $_POST['telefone'];
    $pass = $_POST['senha'];
    
    $sql = "UPDATE `dados` set  `nome` = '$nome', `email` = '$email', `telefone` = '$phone', `password` = '$pass' WHERE cod_pessoa = $id";
    
    if(mysqli_query($conn, $sql)){
       header('Location: ../admin.php');
    }

?>