<?php
require 'Conexion.php';

session_start();

require 'datosUsuario.php';

session_start();

//echo "<p> $user </p>";
//select nombre,apellidopaterno, apellidomaterno from alumno where alumno_dni='12345678';

$query = "SELECT alumno_dni,clave from alumno where alumno_dni='$user' and clave = '$pass'";
$consulta = pg_query($conexion,$query);

$cantidad = pg_num_rows($consulta);

if($cantidad){
    header("location: ../Front/ApoderadoInicio.html");
}else{
    header("location: ../Front/Datos Incorrectos.html");
}
?>
