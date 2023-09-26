create table alumno(
DNI_alumno integer not null primary key,
nombre varchar(50) not null,
apellido varchar (50) not null,
fecha_nacimiento date not null,
nombre_padre varchar (100) not null,
nombre_madre varchar (100) not null
);
create table apoderado(
DNI_apoderado integer not null primary key,
nombre varchar(50) not null,
apellido varchar (50) not null,
fecha_nacimiento date not null,
alumno_DNI integer unique,
foreign key (alumno_DNI) references alumno (DNI_alumno)
);
create table docente(
DNI_docente integer not null primary key,
nombre varchar(50) not null,
apellido varchar (50) not null,
fecha_nacimiento date not null,
colegiatura varchar(50)
);
create table curso(
ID_curso serial primary key,
nombre_curso varchar(50)
);
create table nota(
id_nota serial primary key,
valor varchar(2)
);
create table seccion(
ID_seccion serial primary key,
descripcion_seccion varchar(5)
);
create table grado(
ID_grado serial primary key,
nombre_grado varchar(10)
);
create table nivel(
ID_nivel serial primary key,
descripcion_nivel varchar(10)
);
create table alumno_curso(
alumno_curso_id serial primary key,
alumno_id INT,
curso_id INT,
foreign key (alumno_id) references alumno (DNI_alumno),
foreign key (curso_id) references curso (ID_curso)
);
create table alumno_nota(
alumno_nota_id serial primary key,
alumno_id INT,
nota_id INT,
foreign key (alumno_id) references alumno (DNI_alumno),
foreign key (nota_id) references nota (id_nota)
);
create table nota_curso(
nota_curso_id serial primary key,
nota_id INT,
curso_id INT,
foreign key (nota_id) references nota (id_nota),
foreign key (curso_id) references curso (ID_curso)
);
create table curso_seccion(
curso_seccion_id serial primary key,
seccion_id INT,
curso_id INT,
foreign key (seccion_id) references seccion (ID_seccion),
foreign key (curso_id) references curso (ID_curso)
);
create table seccion_grado(
seccion_grado_id serial primary key,
seccion_id INT,
grado_id INT,
foreign key (seccion_id) references seccion (ID_seccion),
foreign key (grado_id) references grado (ID_grado)
);
create table grado_nivel(
grado_nivel_id serial primary key,
nivel_id INT,
grado_id INT,
foreign key (nivel_id) references nivel (ID_nivel),
foreign key (grado_id) references grado (ID_grado)
);
create table docente_curso(
docente_curso_id serial primary key,
docente_id INT,
curso_id INT,
foreign key (docente_id) references docente (DNI_docente),
foreign key (curso_id) references curso (ID_curso)
);
--Datos de los niveles
insert into nivel (descripcion_nivel) values ('Primaria');
insert into nivel (descripcion_nivel) values ('Secundaria');
--Datos de los grados
insert into grado (nombre_grado) values ('Primero'),('Segundo'),('Tercero'),('Cuarto'),('Quinto'),('Sexto');
--Datos de las secciones
insert into seccion (descripcion_seccion) values ('A'), ('B'), ('C');
--Nombres de cursos
insert into curso (nombre_curso) values ('Educación Física'),('Arte y Cultura'),('Comunicación'),
('Inglés'),('Ciencia y Tecnología'),('Educación Religiosa'),
('Desarrollo personal, ciudadanía y cívica'),('Ciencias sociales'),('Educación para el trabajo'),
('Educación física'),('Comunicación'),('Arte y cultura'),
('Matemática'),('Computación');

select * from nivel;
select * from grado;
select * from curso;
--Grado nivel
---Datos de tabla para primaria
insert into grado_nivel (nivel_id, grado_id ) values ((select ID_nivel from nivel where descripcion_nivel = 'Primaria' )
,(select ID_grado from grado where nombre_grado='Primero'));
insert into grado_nivel (nivel_id, grado_id ) values ((select ID_nivel from nivel where descripcion_nivel = 'Primaria' )
,(select ID_grado from grado where nombre_grado='Segundo')),
((select ID_nivel from nivel where descripcion_nivel = 'Primaria' )
,(select ID_grado from grado where nombre_grado='Tercero')),
((select ID_nivel from nivel where descripcion_nivel = 'Primaria' )
,(select ID_grado from grado where nombre_grado='Cuarto')),
((select ID_nivel from nivel where descripcion_nivel = 'Primaria' )
,(select ID_grado from grado where nombre_grado='Quinto')),
((select ID_nivel from nivel where descripcion_nivel = 'Primaria' )
,(select ID_grado from grado where nombre_grado='Sexto'));
---Datos de tabla para secundaria
insert into grado_nivel (nivel_id, grado_id ) values ((select ID_nivel from nivel where descripcion_nivel = 'Secundaria' )
,(select ID_grado from grado where nombre_grado='Primero')),
((select ID_nivel from nivel where descripcion_nivel = 'Secundaria' )
,(select ID_grado from grado where nombre_grado='Segundo')),
((select ID_nivel from nivel where descripcion_nivel = 'Secundaria' )
,(select ID_grado from grado where nombre_grado='Tercero')),
((select ID_nivel from nivel where descripcion_nivel = 'Secundaria' )
,(select ID_grado from grado where nombre_grado='Cuarto')),
((select ID_nivel from nivel where descripcion_nivel = 'Secundaria' )
,(select ID_grado from grado where nombre_grado='Quinto'));
select * from grado_nivel where nivel_id = '2';
--Datos de grado_seccion

insert into seccion_grado (seccion_id, grado_id) values 
((select ID_seccion from seccion where descripcion_seccion = 'A'),(select ID_grado from grado where nombre_grado='Primero')),
((select ID_seccion from seccion where descripcion_seccion = 'B'),(select ID_grado from grado where nombre_grado='Primero')),
((select ID_seccion from seccion where descripcion_seccion = 'C'),(select ID_grado from grado where nombre_grado='Primero')),
((select ID_seccion from seccion where descripcion_seccion = 'A'),(select ID_grado from grado where nombre_grado='Segundo')),
((select ID_seccion from seccion where descripcion_seccion = 'B'),(select ID_grado from grado where nombre_grado='Segundo')),
((select ID_seccion from seccion where descripcion_seccion = 'C'),(select ID_grado from grado where nombre_grado='Segundo')),
((select ID_seccion from seccion where descripcion_seccion = 'B'),(select ID_grado from grado where nombre_grado='Tercero')),
((select ID_seccion from seccion where descripcion_seccion = 'C'),(select ID_grado from grado where nombre_grado='Tercero')),
((select ID_seccion from seccion where descripcion_seccion = 'B'),(select ID_grado from grado where nombre_grado='Tercero')),
((select ID_seccion from seccion where descripcion_seccion = 'C'),(select ID_grado from grado where nombre_grado='Cuarto')),
((select ID_seccion from seccion where descripcion_seccion = 'B'),(select ID_grado from grado where nombre_grado='Cuarto')),
((select ID_seccion from seccion where descripcion_seccion = 'C'),(select ID_grado from grado where nombre_grado='Cuarto')),
((select ID_seccion from seccion where descripcion_seccion = 'B'),(select ID_grado from grado where nombre_grado='Quinto')),
((select ID_seccion from seccion where descripcion_seccion = 'C'),(select ID_grado from grado where nombre_grado='Quinto')),
((select ID_seccion from seccion where descripcion_seccion = 'B'),(select ID_grado from grado where nombre_grado='Quinto')),
((select ID_seccion from seccion where descripcion_seccion = 'B'),(select ID_grado from grado where nombre_grado='Sexto')),
((select ID_seccion from seccion where descripcion_seccion = 'C'),(select ID_grado from grado where nombre_grado='Sexto')),
((select ID_seccion from seccion where descripcion_seccion = 'B'),(select ID_grado from grado where nombre_grado='Sexto'));
--Consulta para filtros*****
select n.descripcion_nivel , g.nombre_grado, s.descripcion_seccion from seccion_grado sg
inner join grado_nivel gn on sg.grado_id = gn.grado_id 
inner join nivel n on gn.nivel_id = n.ID_nivel 
inner join grado g on gn.grado_id = g.ID_grado
inner join seccion s on sg.seccion_id = s.ID_seccion 
order by n.ID_nivel , g.ID_grado, s.ID_seccion;







