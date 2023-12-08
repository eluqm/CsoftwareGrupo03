<?php 

require '../Back/Conexion.php';

session_start();

$dni = $_SESSION['usuario'];
$nueva = $_SESSION['contraseña'];
echo $dni;

$query = "UPDATE docente set clave = '$nueva' where docente_dni= '$dni'";


$consulta=pg_query($conexion,$query);

if ($consulta) {
    // Usuario autenticado como estudiante
    header("location: ../Front/DocenteInicio.php");
}else {
    // Ninguna de las consultas devolvió resultados
    header("location: ../Front/Datos Incorrectos.html");
}
?>