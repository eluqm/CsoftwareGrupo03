-- Eliminar tablas
--drop table if exists Docente,Tutor,Nivel,Grado,Seccion,Materia,
--DocenteMateria,Alumno,CalificacionTrimestral,CalificacionBimestral,Asistencia,AlumnoMateria;
select * from Alumno a ;
select * from Docente d ; 
select * from Tutor t ;
select * from Materia m ;
select * from Seccion s ;
select * from CalificacionTrimestral c ;
select * from AlumnoMateria am order by materia_id ;
select * from DocenteMateria dm ;
select * from Asistencia ;
-- consulta login, indicador superior derecho
select Nombre || ' ' || ApellidoPaterno || ' ' || ApellidoMaterno AS Alumno from Alumno a;
-- Consulta vista de notas del Alumno
select
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
where a.Alumno_DNI = '23456789';

-- Consulta vista de asistencias del Alumno

select distinct 
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
where a.Alumno_DNI = '23456789';

