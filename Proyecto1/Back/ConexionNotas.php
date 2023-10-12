<?php

//select alumno_dni,clave from alumno where alumno_dni='12345678' and clave = '123456';

require 'Conexion.php';



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
        where a.Alumno_DNI = '12345678'";
$consulta=pg_query($conexion,$query);

?>