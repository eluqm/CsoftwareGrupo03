<?php

require '../Back/Conexion.php';

session_start();

// Hacer algo con $usuario, como mostrarlo en la pági

$var = $_SESSION['usuario'];
//echo "Valor ",$var;



$query="SELECT
        a.Nombre ||' '||a.ApellidoPaterno||' '||a.ApellidoMaterno AS Estudiante,
        m.Nombre AS Curso,
        Nota_trimestre_1.Calificacion as Nota_trimestre_1,
        Nota_trimestre_2.Calificacion as Nota_trimestre_2,
        Nota_trimestre_3.Calificacion as Nota_trimestre_3,
        ROUND(
            (coalesce (Nota_trimestre_1.Calificacion, 0) + 
            coalesce (Nota_trimestre_2.Calificacion, 0) + 
            coalesce (Nota_trimestre_3.Calificacion, 0)) / 3::numeric, 2
        ) as Promedio
        from Alumno a
        join AlumnoMateria am on a.alumno_DNI = am.Alumno_DNI
        join Materia m on am.Materia_ID = m.materia_ID
        left join (select Alumno_DNI, Materia_ID, Calificacion from CalificacionTrimestral
                where Trimestre = 1) as Nota_trimestre_1 
        on a.alumno_DNI = Nota_trimestre_1.Alumno_DNI and m.materia_ID = Nota_trimestre_1.Materia_ID
        left join (select Alumno_DNI, Materia_ID, Calificacion from CalificacionTrimestral 
                where Trimestre = 2) as Nota_trimestre_2
        on a.alumno_DNI = Nota_trimestre_2.Alumno_DNI and m.materia_ID = Nota_trimestre_2.Materia_ID
        left join (select Alumno_DNI, Materia_ID, Calificacion from CalificacionTrimestral
                where Trimestre = 3) as Nota_trimestre_3 
        on a.alumno_DNI = Nota_trimestre_3.Alumno_DNI and m.materia_ID = Nota_trimestre_3.Materia_ID
        where a.Alumno_DNI = '$var'";

$consulta=pg_query($conexion,$query);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Estilos/apoderado_notas.css">
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
                        <a class="nav-link active" aria-current="page" href="ApoderadoAjustes.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-nut-fill" viewBox="0 0 16 16">
                                <path
                                    d="M4.58 1a1 1 0 0 0-.868.504l-3.428 6a1 1 0 0 0 0 .992l3.428 6A1 1 0 0 0 4.58 15h6.84a1 1 0 0 0 .868-.504l3.429-6a1 1 0 0 0 0-.992l-3.429-6A1 1 0 0 0 11.42 1H4.58zm5.018 9.696a3 3 0 1 1-3-5.196 3 3 0 0 1 3 5.196z" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ApoderadoInicio.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Apoderado
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="ApoderadoNotas.php">Mis calificaciones</a></li>
                            <li><a class="dropdown-item" href="ApoderadoAsistencia.php">Mis Asistencias</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <h1 class="titulo-asis"> Tus Calificaciones </h1>
    <!--Tabla-->
    
    <form class="contenedor-tabla" method="POST">
        <table class="Datitos" border="1">
            <thead>
            
            <tr>
                <th>Estudiante</th>
                <th>Curso</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Promedio</th>
            </tr>
        </thead>
            
            <tbody>
            <?php 
            while($obj=pg_fetch_object($consulta)){
            ?>
            
            
            <tr>
            <td><?php echo $obj->estudiante;?></td>
            <td><?php echo $obj->curso;?> </td>
            <td><?php echo $obj->nota_trimestre_1;?> </td>
            <td><?php echo $obj->nota_trimestre_2;?> </td>
            <td><?php echo $obj->nota_trimestre_3;?> </td>
            <td><?php echo $obj->promedio;?></td>
            </tr>
            </tbody>
            <?php
        }
        ?>
            
            </table>
        
        </form>

    <!--Fin Tabla-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>