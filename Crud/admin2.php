<?php
    include '../config/config.php';

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['telefone'];
    $pass = $_POST['senha'];

    $sql = "INSERT INTO `dados`( `nome`, `email`, `telefone`, `password`) VALUES ('$nome','$email','$phone','$pass')";

    if(mysqli_query($conn, $sql)){
        header('Location: ../admin.php');
    }