<?php
$servidor = "localhost";
$usuario  = "root";
$password = "";
$basededatos = "sigesclio";
$con = mysqli_connect($servidor, $usuario, $password,$basededatos) or die("No se ha podido conectar al Servidor");
if (mysqli_connect_errno()){
    echo "No se pudo conectar a la base de datos";
    exit();
}

mysqli_select_db($con,$basededatos) or die("No se encuentra la base de datos");

mysqli_set_charset($con,"utf8");





?>
