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

## Bugs 🦗
* Sesion Bugeada 
Si se borra la base de datos y la sesion estaba abierta, la pagina no lo nota. Eso lo que provoca es que deje de grabar los comentarios.

## Problemas Resueltos - Github Pages 🐛

### Ejecutar pagina en Github Pages 🦋
Seguir las instrucciones de https://github.com/gitname/react-gh-pages
Ejecutar el siguiente comando para deployar:
~~~
npm run deploy
~~~

### TypeError: MiniCssExtractPlugin is not a constructor 🦋
Originalmente mi repositorio remoto se llamaba github, tuve que agregar una referencia con el nombre origin
~~~
npm i -D --save-exact mini-css-extract-plugin@2.4.5
~~~

### Failed to get remote.origin.url 🦋
Originalmente mi repositorio remoto se llamaba github, tuve que agregar una referencia con el nombre origin
~~~
git remote add origin https://github.com/sebastiap/spika-games.git
~~~

### Imagenes no encontradas 🐜
La solucion mas facil y creo que mas conveniente a la larga , es hacer referencia a la ubicacion de las imagenes en github. Para un server diferente debere apuntar con
una variable PATH.

### Server Local falla luego de configurar GHPAGES 🐜
Por lo visto, algo empezo a fallar localmente, luego de fixear algunos errores menores, me doy cuenta que no es que no anda, si no que tarda unos segundos en renderizar el CSS.
No se si hay solucion para esto o es un bug, pero dado que es solo local y para este proyecto no es un error importante.
