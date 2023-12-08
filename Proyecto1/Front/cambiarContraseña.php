<?php 

require '../Back/Conexion.php';

session_start();

$dni = $_SESSION['usuario'];
$nueva = $_SESSION['contraseña'];
echo $dni;

$query = "UPDATE alumno set clave = '$nueva' where alumno_dni= '$dni'";


$consulta=pg_query($conexion,$query);

if ($consulta) {
    // Usuario autenticado como estudiante
    header("location: ../Front/ApoderadoInicio.php");
}else {
    // Ninguna de las consultas devolvió resultados
    header("location: ../Front/Datos Incorrectos.html");
}
?>