<?php

require '../Back/Conexion.php';

session_start();

$dni = $_SESSION['usuario'];

//echo $dni;

//Consulta query

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Estilos/apoderadoInicio.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Magra&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Plataforma Educativa</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./Imagenes/logo.png" alt="Bootstrap" width="55" height="34">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="DocenteAjustes.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-nut-fill" viewBox="0 0 16 16">
                                <path
                                    d="M4.58 1a1 1 0 0 0-.868.504l-3.428 6a1 1 0 0 0 0 .992l3.428 6A1 1 0 0 0 4.58 15h6.84a1 1 0 0 0 .868-.504l3.429-6a1 1 0 0 0 0-.992l-3.429-6A1 1 0 0 0 11.42 1H4.58zm5.018 9.696a3 3 0 1 1-3-5.196 3 3 0 0 1 3 5.196z" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./ApoderadoInicio.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Docente
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="DocenteCalificaciones.php">Ingresar calificaciones</a></li>
                            <li><a class="dropdown-item" href="DocenteAsistencias.php">Ingresar Asistencias</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <p>Calificaciones</p>
    <?php require '../Back/Conexion.php'; ?>

    <label for="nivel">Nivel:</label>
    <form method="POST" action="">
        <select id="nivel" name="nivel" onchange="this.form.submit()">
            <?php
            $query = pg_query($conexion, 'SELECT nivel_id, nombre FROM nivel');
            while ($row = pg_fetch_array($query)) {
                $selected = ($_POST['nivel'] == $row['nivel_id']) ? 'selected' : '';
                echo "<option value='" . $row['nivel_id'] . "' $selected>" . $row['nombre'] . "</option>";
            }
            ?>
        </select>
    </form>

    <label for="grado">Grado:</label>
    <form method="POST" action="">
        <select id="grado" name="grado" onchange="this.form.submit()">
            <?php
            // Obtener el nivel seleccionado (si está definido)
            $nivelSeleccionado = isset($_POST['nivel']) ? $_POST['nivel'] : null;

            // Si hay un nivel seleccionado, cargar los grados correspondientes
            if ($nivelSeleccionado !== null) {
                $queryg = pg_query($conexion, "SELECT grado_id, nombre FROM grado WHERE nivel_id = $nivelSeleccionado");
                while ($row = pg_fetch_array($queryg)) {
                    $selected = ($_POST['grado'] == $row['grado_id']) ? 'selected' : '';
                    echo "<option value='" . $row['grado_id'] . "' $selected>" . $row['nombre'] . "</option>";
                }
            }
            ?>
        </select>
    </form>

    <label for="seccion">Sección:</label>
    <form method="POST" action="">
        <select id="seccion" name="seccion">
            <?php
            // Obtener el nivel y grado seleccionados (si están definidos)
            $nivelSeleccionado = isset($_POST['nivel']) ? $_POST['nivel'] : null;
            $gradoSeleccionado = isset($_POST['grado']) ? $_POST['grado'] : null;

            // Si hay un nivel y grado seleccionados, cargar las secciones correspondientes
            if ($nivelSeleccionado !== null && $gradoSeleccionado !== null) {
                $querys = pg_query($conexion, "SELECT s.seccion_id, s.nombre
                                                from seccion s 
                                                join grado g on s.grado_id = g.grado_id 
                                                join nivel n on g.nivel_id = n.nivel_id
                                                where n.nivel_id = $nivelSeleccionado and g.grado_id = $gradoSeleccionado");

                while ($row = pg_fetch_array($querys)) {
                    $selected = ($_POST['seccion'] == $row['seccion_id']) ? 'selected' : '';
                    echo "<option value='" . $row['seccion_id'] . "' $selected>" . $row['nombre'] . "</option>";
                }
            }
            ?>
        </select>
    </form>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>