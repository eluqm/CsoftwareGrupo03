<?php

require '../Back/Conexion.php';

session_start();

$us = $_SESSION['usuario'];
//echo "ValorAsis ",$us;

$query="SELECT distinct 
        a.Nombre ||' '||a.ApellidoPaterno||' '||a.ApellidoMaterno AS Estudiante,
          m.Nombre AS Curso,
          Dia_Lunes.Asistio as Lunes,
          Dia_Martes.Asistio as Martes,
          Dia_Miercoles.Asistio as Miercoles
        from Alumno a
        join Asistencia ast on a.alumno_DNI = ast.Alumno_DNI
        join Materia m on ast.Materia_ID = m.materia_ID
        left join (select Alumno_DNI, Materia_ID, Asistio from Asistencia
            where Fecha = '2023-10-09') as Dia_Lunes
        on a.alumno_DNI = Dia_Lunes.Alumno_DNI and m.materia_ID = Dia_Lunes.Materia_ID
        left join (select Alumno_DNI, Materia_ID, Asistio from Asistencia
            where Fecha = '2023-10-10') as Dia_Martes
        on a.alumno_DNI = Dia_Martes.Alumno_DNI and m.materia_ID = Dia_Martes.Materia_ID
        left join (select Alumno_DNI, Materia_ID, Asistio from Asistencia
            where Fecha = '2023-10-11') as Dia_Miercoles
        on a.alumno_DNI = Dia_Miercoles.Alumno_DNI and m.materia_ID = Dia_Miercoles.Materia_ID
        where a.Alumno_DNI = '$us'";

$consulta=pg_query($conexion,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Estilos/apoderado_asistencia.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Plataforma Educativa</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="./Imagenes/logo.png" alt="Bootstrap" width="55" height="34">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="ApoderadoAjustes.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nut-fill" viewBox="0 0 16 16">
                        <path d="M4.58 1a1 1 0 0 0-.868.504l-3.428 6a1 1 0 0 0 0 .992l3.428 6A1 1 0 0 0 4.58 15h6.84a1 1 0 0 0 .868-.504l3.429-6a1 1 0 0 0 0-.992l-3.429-6A1 1 0 0 0 11.42 1H4.58zm5.018 9.696a3 3 0 1 1-3-5.196 3 3 0 0 1 3 5.196z"/>
                    </svg>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ApoderadoInicio.php">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <h1 class="titulo-asis"> Tus Asistencias </h1>
    <!--Tabla Asistencia-->
    <form class="contenedor-tabla" ="POST">
        <table class="Datitos" border="1">
            <thead>
            
            <tr>
                <th>Estudiante</th>
                <th>Curso</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
            </tr>
        </thead>
            
            <tbody>
            <?php 
            while($obj=pg_fetch_object($consulta)){
            ?>
            
            
            <tr>
            <td><?php echo $obj->estudiante;?></td>
            <td><?php echo $obj->curso;?> </td>
            <td><?php echo $obj->lunes;?> </td>
            <td><?php echo $obj->martes;?> </td>
            <td><?php echo $obj->miercoles;?> </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
            
            </table>
        
        </form>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>