<h1 align="center">Plataforma Académica</h1>

## Contenido del proyecto:

---
-[Problemática](#Problemática)
-[Aplicaciones similares]()
-[Propósito del proyecto]()
-[Requisitos]()
-[diagramas]()
---

##Problemática

Texto.

##Aplicaciones similares

Texto.

##Propósito del proyecto

Texto.

##Requisitos

Texto.

###Requisitos funcionales:

Texto.

| **Nombre** | Base de datos de sesión |
| :--- | :--- |
| **Tipo** | Requisito |
| **Prioridad** | Alta |
| **Entrada** | Datos del usuario |
| **Descripción** | Cuando se inicie sesión los datos del usuario se deben de guardar en la base de datos. Así como también las notas y las asistencias del estudiante. |
| **Salida** | Registro de datos de usuario, asistencias y notas |
---
| **Nombre** | Iniciar Sesión |
| --- | --- |
| **Tipo** | Requisito |
| **Prioridad** | Media |
| **Entrada** | Datos del usuario |
| **Descripción** | El usuario tendrá acceso con nombre de usuario determinado por el DNI y clave determinada por la parte administrativa en primera instancia. |
| **Salida** | Interfaz de la página web  |
---
| **Nombre** | Vista para tipo de usuario |
| --- | --- |
| **Tipo** | Requisito |
| **Prioridad** | Media |
| **Entrada** | Inicio de sesión |
| **Descripción** | Cuando se inicie sesión se determinará si es docente o apoderado, y se mostrará la vista correspondiente al tipo de usuario. |
| **Salida** | validación de tipo de usuario y visualización de interfaz |
---
| **Nombre** | Cambiar contraseña |
| --- | --- |
| **Tipo** | Requisito |
| **Prioridad** | Media |
| **Entrada** | Cuenta existente |
| **Descripción** | El usuario una vez iniciada la sesión tendrá la opción de cambiar su contraseña. |
| **Salida** | Modificación de la contraseña |
---

####Apoderado

---
| **Nombre** | Vista de calificaciones |
| --- | --- |
| **Tipo** | Requisito |
| **Prioridad** | Media |
| **Entrada** | Cuenta existente |
| **Descripción** | Ya determinado el tipo de usuario, el apoderado hace clic en visualizar cursos y las notas correspondientes de determinado periodo. |
| **Salida** | Visualización de calificaciones en una tabla del estudiante |
---
| **Nombre** | Vista de asistencias |
| --- | --- |
| **Tipo** | Requisito |
| **Prioridad** | Media |
| **Entrada** | Cuenta existente |
| **Descripción** | Ya determinado el tipo de usuario, el apoderado hace clic en visualizar asistencias del estudiante. |
| **Salida** | Visualización de asistencia del estudiante |
---
| **Nombre** | Vista de Notificaciones/Eventos |
| --- | --- |
| **Tipo** | Requisito |
| **Prioridad** | Media |
| **Entrada** | Cuenta existente |
| **Descripción** | Una vez logueado, el apoderado podrá hacer clic en visualizar notificaciones |
| **Salida** | Visualización de eventos en una lista. |
---
| **Nombre** | Ingresar notas |
| --- | --- |
| **Tipo** | Requisito |
| **Prioridad** | Media |
| **Entrada** | Cuenta existente, Base de datos |
| **Descripción** | El docente podrá ingresar notas a sus cursos asignados mediante la búsqueda por un filtro. |
| **Salida** | Visualización del ingreso de notas en una tabla |
---
| **Nombre** | Ingresar notificaciones/eventos |
| --- | --- |
| **Tipo** | Requisito |
| **Prioridad** | Media |
| **Entrada** | Texto o imagen por ahora |
| **Descripción** | El podrá ingresar los eventos correspondientes a sus cursos asignados mediante la búsqueda por un filtro. |
| **Salida** |  |
---
| **Nombre** | Registrar asistencias |
| --- | --- |
| **Tipo** | Requisito |
| **Prioridad** | Media |
| **Entrada** |  |
| **Descripción** | El docente ingresa las asistencias correspondientes a sus cursos asignados mediante la búsqueda de un filtro. |
| **Salida** |  |
---
| **Nombre** | Filtro de las notas |
| --- | --- |
| **Tipo** | Requisito |
| **Prioridad** | Media |
| **Entrada** |  |
| **Descripción** | El docente tendrá que elegir año de estudio, nombre del curso y sección en la que se dicta el curso; de forma consecutiva y restrictiva en el orden establecido. |
| **Salida** |  |
---
| **Nombre** | Tipo de periodo |
| --- | --- |
| **Tipo** | Requisito |
| **Prioridad** | Media |
| **Entrada** |  |
| **Descripción** | Una vez hecha los filtros, tiene que elegir la opción de calificación, si es bimestral o trimestral. |
| **Salida** |  |
---
| **Nombre** | Sistema de calificación |
| --- | --- |
| **Tipo** | Requisito |
| **Prioridad** | Media |
| **Entrada** | Filtro de año, sección y curso |
| **Descripción** | El profesor puede elegir entre vigesimal o cualitativo para las notas de los cursos. |
| **Salida** | Ingreso de notas del estudiante |
---

###Requisitos no funcionales

| **Nombre** | Tiempo de espera |
| --- | --- |
| **Tipo** | Requisito |
| **Prioridad** | Media |
| **Descripción** | Al momento de hacer clic en una opción de la página, el tiempo de espera debe ser mínimo. |
---
| **Nombre** | Mensaje de errores |
| --- | --- |
| **Tipo** | Requisito |
| **Prioridad** | Media |
| **Descripción** | El sistema debe proporcionar mensajes de errores al usuario final. |
---
| **Nombre** | Diseño responsivo |
| --- | --- |
| **Tipo** | Requisito |
| **Prioridad** | Media |
| **Descripción** | La aplicación web debe poseer un diseño “Responsive” para garantizar la visualización. |
---

##Diagramas

Texto.

###Diagrama entidad relación

Texto.

###Diagrama casos de uso

Texto.

###Diagrama de secuencia

Texto.

