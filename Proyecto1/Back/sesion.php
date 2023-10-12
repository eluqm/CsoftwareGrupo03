<?php
require 'Conexion.php';
session_start();

$user = $_POST["Dni"];
$pass = $_POST["Password"];

//echo "Bienvenido: ", $user;

$query = "SELECT alumno_dni,clave from alumno where alumno_dni='$user' and clave = '$pass'";
$consulta = pg_query($conexion,$query);

$cantidad = pg_num_rows($consulta);

if($cantidad){
    header("location: ../Front/ApoderadoInicio.html");
}else{
    header("location: ../Front/Datos Incorrectos.html");
}


?>