<?php
require '../Back/Conexion.php'; // Asegúrate de que $conexion esté definido en este archivo.

session_start();

// Verificar la existencia y validez de las variables de sesión
if (isset($_SESSION['usuario'], $_POST['input1'])) {
    $dni = $_SESSION['usuario'];
    $nueva = $_POST['input1'];

    // Validar los valores
    if (!empty($dni) && !empty($nueva)) {
        // Utilizar consultas preparadas para evitar inyección SQL
        $query = "UPDATE alumno SET clave = $1 WHERE alumno_dni = $2";
        $stmt = pg_prepare($conexion, "update_query", $query);

        if ($stmt) {
            // Ejecutar la consulta preparada
            $result = pg_execute($conexion, "update_query", array($nueva, $dni));

            if ($result) {
                // Contraseña actualizada con éxito
                header("location: ../Front/ApoderadoInicio.php?mensaje=Contraseña actualizada con éxito");
                exit;
            } else {
                // Manejar el error de la consulta
                $error_message = pg_last_error($conexion);
                header("location: ../Front/Error.php?error=$error_message");
                exit;
            }
        } else {
            // Manejar el error de preparación de consulta
            $error_message = pg_last_error($conexion);
            header("location: ../Front/Error.php?error=$error_message");
            exit;
        }
    } else {
        // Manejar el caso de valores de sesión no válidos
        header("location: ../Front/Datos Incorrectos.html");
        exit;
    }
} else {
    // Manejar el caso de variables de sesión no definidas
    header("location: ../Front/Datos Incorrectos.html");
    exit;
}
?>
