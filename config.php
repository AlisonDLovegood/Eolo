<?php
$endereco = "localhost";
$usuario = "root";
$senha = "usbw";
$banco = "db_eolo";
$MySQLi = new mysqli($endereco, $usuario, $senha, $banco);
if (mysqli_connect_error()) {
  die(mysqli_connect_error());
  exit();
}
?>