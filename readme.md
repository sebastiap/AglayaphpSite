# AGLAYA DESIGNS - PHP + Mysql 🎥🐐

## Sobre el Proyecto
El objetivo de este sitio es una colaboracion con Romy y su grupo para incorporar PHP y Mysql a un diseño front-end realizado por ellos. 

## Descripcion

* Tomando como base de uno de sus parciales, se le hicieron unos ajustes a la base de datos para agregar la funcionalidad de puntuar las producciones, realizar comentarios y agregar nuevas publicaciones. 
* La pagina se elabora con HTML, CSS, BOOTSTRAP , JAVASCRIPT y PHP. 
* PHP se utiliza para interactuar con la base de datos. Esto se hace utilizando un archivo de conexion que crea una estructura de objetos de PHP.
Tambien se utilizo las funcionalidades de sesion de PHP, para administrar variables de sesion y la interaccion con el usuario a traves de mensajes de exito o error para cada operacion de INSERT o UPDATE que este realiza.

## Features
* La pagina permite visualizar las producciones y sus comentarios. Los usuarios pueden registrarse y una vez logueados comentar sobre alguna de las producciones.
* Se realiza el calculo del promedio de puntajes cada vez que se agrega un nuevo comentario. El mismo se actualiza en la base de datos.

## Conceptos Generales
* Buenas Practicas en Estructura de directorios
* PHP
* MySql
* Estilos CSS


## Problemas Resueltos - General 🐛🦗🐞
- [x] Login - Usando Session
- [x] Base de datos - Ver PDO en conexion.php
- [x] Realizar comentarios - Ver codigo en produccion.php
- [x] Creacion de Producciones - Ver codigo en producciones.php
- [x] Estilos Bootstrap

## Pendientes - Posibles mejoras
- [X] Validaciones Login 
- [X] Validaciones Registro existente
- [X] Validaciones Registro Password
- [X] Validaciones Base de datos 
- [ ] Json para el Registro
- [ ] Edicion de publicaciones
- [ ] Solucionar Bug 
- [ ] Version Online

## Bugs 🦗
* Sesion Bugeada 
Si se borra la base de datos y la sesion estaba abierta, la pagina no lo nota. Eso lo que provoca es que deje de grabar los comentarios.

