![Logo-PA](Logo-PA.JPG)
<h1 align="center">Plataforma Académica</h1>

## Contenido del proyecto:

- [Problemática](#Problemática)
- [Aplicaciones similares](#Aplicaciones-similares)
- [Propósito del proyecto](#Propósito-del-proyecto)
- [Requisitos](#Requisitos)
- [Diagramas](#Diagramas)
- [Planificación](#Planificación)
- [Diseño de casos de prueba](#Diseño-de-casos-de-prueba)

## Problemática

Actualmente hay estudiantes que por falta de atención del padre/apoderado ya que trabajan, faltan a clases, no rinden bien en sus estudios. Entonces nosotros buscamos resolver la comunicación entre instituciones educativas , primaria o secundaria, y apoderados/padres generado por la falta de comunicación con los estudiantes  eliminando el uso de aplicaciones de terceros que podrían vulnerar el entorno del docente o del padre/apoderado. Cambio ejemplo

## Aplicaciones similares

- Portal Academico ULASALLE
- PowerSchool
- Infinite Campus
- Schoology

## Propósito del proyecto

Nuestro propósito es crear una plataforma web eficiente y fácil de usar con una interfaz minimalista el registro de notas y asistencias del estudiante para instituciones educativas. Nuestra meta principal es proporcionar a profesores, padre/apoderado y estudiantes una herramienta centralizada que simplifique el proceso de seguimiento del desempeño académico y la asistencia del estudiante. 

## Características

- Visualizacion de notas
- Visualizacion de asistencias
- Ingreso de notas del estudiante
- Ingreso de asistencia

## Requisitos

Los requisitos funcionales y no funcionales del proyecto se encuentran detallados en el siguiente documento: [Requisitos del proyecto](https://drive.google.com/file/d/1j5xsyA21bkWk6gz__MowmHE6-j_Wsw8z/view?usp=drive_link)

## Diagramas

### Diagrama entidad relación

![DER](https://github.com/eluqm/CsoftwareGrupo03/blob/main/Im%C3%A1genes/DER_3.0.jpg)

### Diagrama casos de uso

![casousov2](https://github.com/eluqm/CsoftwareGrupo03/assets/103951817/97f531ed-390d-4cc9-8645-57c55cc9d610)

### Diagrama de secuencia

![UML_secuencia_docente_notas](https://github.com/eluqm/CsoftwareGrupo03/blob/main/Im%C3%A1genes/Secuencia%20UML%20docente.jpg "Diagrama de secuencia de ingreso de notas" )

![UML_secuencia_docente_asistencia](https://github.com/eluqm/CsoftwareGrupo03/blob/main/Im%C3%A1genes/secuencia%20UML%20docente-asistencia%20.jpg)

![UML_secuencia_apoderado](https://github.com/eluqm/CsoftwareGrupo03/blob/main/Im%C3%A1genes/secuencia%20UML%20apoderado.jpg)

## Mockups

El proyecto propuesto busca tener una interfaz minimalista, con los mockups se busca diseñar la parte visual del proyecto propuesto. El proyecto es progresivo con la que los mockups es una muestra, guia o expectative de como se vera la ionterfaz.

### Avance del Proyecto

- Login Web/Movil: EL usuario tendra que iniciar sesión para hacer uso de las funciones que ofrece la pagina web, si no tiene cuenta tendra que registrarse.

![image](https://github.com/eluqm/CsoftwareGrupo03/assets/103951817/2b58543d-8ed8-4da7-b288-022d56cbf583)

- Interfaz de Inicio: Pantalla de inicio tanto para Apoderado como para Docente.
  
![image](https://github.com/eluqm/CsoftwareGrupo03/assets/103951817/14ba8570-3faf-4609-b0b0-18af4777c32e)

- Cambiar Contraseña: El usuario podra recuperar su contraseña en caso no se acuerde.

![image](https://github.com/eluqm/CsoftwareGrupo03/assets/103951817/66b40a1a-86c9-4358-a2ec-b881c701f26d)

- Visualizar Notas: El apoderado/padre/usuario tendra la opcion de ver las notas del estudiante.

![image](https://github.com/eluqm/CsoftwareGrupo03/assets/103951817/055520e6-cf95-4243-a4b0-4f03922ecafa)

- Visualizar Asistencia:  El apoderado/padre/usuario tendra la opcion de ver las asistencia del estudiante.

![image](https://github.com/eluqm/CsoftwareGrupo03/assets/103951817/d28efab1-5f18-497b-b503-70d7513368f8)

## Planificación

| **Plan de pruebas** |
| -- |
| **Nombre del Proyecto:** Plataforma Educativa |
| **Involucrados/Responsabilidades** |
| Apoderado Creación de casos de prueba con sus funcionalidades respectiva. |
| Docente Creación de casos de prueba con sus funcionalidad respectiva. |
| **Funcionalidades o Módulos** |
| Ver Calificaciones del Estudiante, Ver Asistencias del Estudiante, Cambiar contraseña |
| **Equipamientos/Software** |
| El sistema debe funcionar en un servidor Web incluido la base de datos, la pagina responsiva para desktop y para dispositivos móviles. |
| **Cronograma** |
| **Fecha de inicio y Fin del Proyecto:** 11/sep/2023 - 21/nov/2023 |
| **Fecha de inicio y Fin de Prueba:** 1/dic/2023 - 8/dic/2023 |
| **Lugar de Prueba** |
| El sistema debe ser ejecutado en dos máquinas para probar la validación y el servidor. |
| **Criterios para considerar finalizada la prueba** |
| La prueba se considerará finalizada cuando todas las funciones estén terminadas, esté operativa y que los datos se almacenen correctamente en la base de datos. Luego hacer los casos de prueba. |
| **Observaciones** |
| Puede generar problemas en la parte de funcionalidades de Docente, en el envío de datos para generar los alumnos correspondientes de dicha sección. |
---
## Diseño de casos de prueba

| **Casos de prueba** |
| :------------------: |
| **Nombre del proyecto:** Plataforma Educativa |

| **ID** | **Módulo** | **Descripción** | **Guía** | **Resultado Esperado** | **Resultado de Test** |
| --- | --- | --- | --- | --------- | --------- |
| 1 | Apoderado Notas | Este módulo nos permite visualizar nuestras notas de dicho curso. | 1. Hacer click en la opción "Ver calificaciones". 2. Mostrar notas de cursos. | Apoderado 8/dic/2023: Un cuadro apareció con las notas de dicho curso | Apoderado 8/dic/2023: Un cuadro apareció con las notas de dicho curso |
| 2 | Apoderado Asistencias | Este módulo nos permite visualizar nuestras notas | 1. Hacer click en opción “Ver asistencias”2. Mostrar asistencias respectivos cursos y días(l,m,m). | Apoderado 8/dic/2023 Un cuadro con las asistencias de del estudiante se muestra | Apoderado 8/dic/2023 Un cuadro con las asistencias de del estudiante apareció |
| 3 | Cambiar Contraseña | Este módulo nos permitirá el cambio de contraseña | 1. Hacer click en la opción ”Tuerca”.2. Ingresar contraseña(dato) | Apoderado Docente 8/dic/2023 Enviar los datos de contraseña lo redirige a Inicio | Apoderado Docente 8/dic/2023 Enviar el dato nueva contraseña lo redirigió exitosamente a Inicio. |
---
