<?php

//select alumno_dni,clave from alumno where alumno_dni='12345678' and clave = '123456';

$conexion = pg_connect("host=localhost dbname=dbphp user=postgres password=browen2001");

if (!$conexion) {
    $error = error_get_last();
    echo "Error de conexión: " . $error['message'];
    // O podrías intentar esto si estás usando PHP 7 o superior
    throw new Exception(pg_last_error());
}

?>