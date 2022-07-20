# Abc-Alumnos
Mi ejemplo de proyecto ABC de alumnos, cuenta con Actualización, Inserción y Eliminación
Empecemos primero comentando que el programa es la gestion de "Alumnos" atraves de una tabla dinamica a la par de ventanas modales jugando un poco con las
herramientas que nos proporciona el framework de Bootsrap v5, tiene tambien la inclusion de "Alertify" no dispensable la verdad pero solo para arrojar mensajes
de una forma mas visual.

Nuestro arbol directorio de proyecto esta compuesto de las siguiente manera:

-EJEMPLO-ABC-ALUMNOS

componentes ---- dependencias ----- javascript ----- php ----- SQL ---- index.php

COMPONENTES: 
Es una carpeta que encontraremos un php que contiene la estructura de la tabla llamado "tabla.php" que se mostrara en index.php si bien existe varias maneras 
de gestionar este o muchos otros elementos quize hacerlo de esta manera. En este ya mencionado hago llamar mi conexion a la BD atraves de un php que mas adelante haremos
mencion donde se encuentra; para posteriormente llenar mi tabla cargando su contenido atraves de una consulta "Select" y llenada con un bucle "While" con datos de un arreglo
almacenado atraves de la consulta mencionada.

DEPENDENCIAS: 
Carpeta en la que no ondaremos mucho a fondo en este apartado pero en esta carpeta almacene lo necesario para trabajar con "alertify", "jquery", tambiben aqui deberia integrarse"bootstrap"
pero luego que se examine los encabezados de "index.php" se notara que se opto por trabajar por dependencias no locales si no de alojamiento en linea o "ligas" para ponerlo mas facil.

JAVASCRIPT: 
En este directorio en el que me aventure por hacer uso de codigo puro de Javascript para almacenar EVENTOS "eventos.js" que se desencadenan cada cierta accion FUNCIONES "funciones.js" que es donde almacene todas las funciones que usaere y llamare cuando se necesite.

PHP: 
Tambien tenemos un directorio para almacenar el PHP "actualizarDatos.php, agregarDatos.php, conexion.php, eliminarDatos.php" estos php mencionados es la parte fundamental de la gestion
de Agregar, Actualizar y Eliminar hacia la base de datos, enviando atraves de funciones JAVASCRIPT datos atraves de AJAX y resiviendo los datos en PHP con POST posterioemente haciendo una 
consulta "query" atraves de nuestra conexion y enviando dicha consulta.

SQL: 
Basicamente es donde esta nuestro archivo de Base de Datos que contiene una unica tabla ya que solo es un ejemplo rapido.

INDEX.PHP: 
Este es basicamente nuesta pagina principal que contiene nuestro proyecto.
