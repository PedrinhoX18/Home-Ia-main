<?php

include "../config/config.php";

$id = $_GET['id'];

$sql = "DELETE FROM `dados` WHERE `dados`.`cod_pessoa` = $id";

$dados = mysqli_query($conn, $sql);

if($dados){
  header('Location: ../admin.php');
}
?>