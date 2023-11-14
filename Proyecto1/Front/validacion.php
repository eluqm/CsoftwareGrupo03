<?php 
//PROBLEMA GRANDE DE ESTOY EN INICIO DOY CLICK EN INICIO Y ME MANDA ERROR

//PROBLEMA GRANDE DE LAS VARIABLES DE SESION, LAS VARIABLES NO TIENE QUE ESTAR VACIAS Y PROBLEMA DE $CONEXION

require '../Back/Conexion.php';

session_start();

require '../Back/datosUsuario.php';

$_SESSION['usuario'] = $user;

//select nombre,apellidopaterno, apellidomaterno from alumno where alumno_dni='12345678';

//$query = "SELECT alumno_dni,clave from alumno where alumno_dni='$user' and clave = '$pass'";
$query_estudiante = "SELECT alumno_dni, clave FROM alumno WHERE alumno_dni='$user' AND clave='$pass'";
$query_docente = "SELECT docente_dni, clave FROM docente WHERE docente_dni='$user' AND clave='$pass'";

$consulta_estudiante = pg_query($conexion, $query_estudiante);
$consulta_docente = pg_query($conexion, $query_docente);

$cantidad_estudiante = pg_num_rows($consulta_estudiante);
$cantidad_docente = pg_num_rows($consulta_docente);

if ($cantidad_estudiante) {
    // Usuario autenticado como estudiante
    header("location: ../Front/ApoderadoInicio.php");
} elseif ($cantidad_docente) {
    // Usuario autenticado como docente
    header("location: ../Front/DocenteInicio.php");
} else {
    // Ninguna de las consultas devolvió resultados
    header("location: ../Front/Datos Incorrectos.html");
}
?>