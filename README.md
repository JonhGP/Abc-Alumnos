# Abc-Alumnos  
Proyecto ABC de alumnos, cuenta con Actualización, Inserción y Eliminación  

NOTA IMPORTANTE  

Antes que nada quiero aclarar que este proyecto puede que tenga muchos detalles en como se estructura los elementos como php, javascript, dependencias ya que no e seguido un estandar de acomodo por otro lado la programacion en si misma es muy ambigua 
todos tenemos diferentes formas de programar y eocntrar una solucion a los problemas que se plantean del dia a dia por lo que 
siempre existe manera mas eficientes de hacerlo pero como todo buen programador es cuestion de ir practicando y encontrar mejores
metodos que te ahorren tiempo y lineas de codigo.

En el programa carece de un form como tal ya que quice gastar mi oportunidad generando una tabla dinamica ya que por lo general son 
la forma representatiba mas tediosa de controlar datos a comparacion de los simples elementos que llenamos y enviamos con boton, si bien mi programa hace uso de esto mismo criticado es atraves de el control de tablas y no de los elementos en si. Es decir que la tabla es nuestro elemento princiopal para interactuar y no los elementos que llenamos nosotros.

Por otro lado puede que los codigos javascript sean largos y es porque quice ir a la vieja escuela usando Javascript puro ya que considero que es la forma mas representativa de que sabes javascript ya que el uso de cualquier otro Framework creo como todos saben nos facilita las cosas y deja un poco de lado en cierta medida un poco la logica de las lineas de JAVASCRIPT eso responderia si alguien noto que inclui la dependencia de Jquery y no la use.

Con lo que respecta a codigo quiero aclarar si se tomaron la tarea de ver el codigo que los metodos de "actualizar y agregar" los aborde de diferente manera solamente con la intencion de que si alguien lee el codigo note que pese a que son diferentes suitilmente en el codigo llevan a lo mismo simplemente para reafirmar lo que mencione al princopio que existe maneras diferentes de programar.

Los elementos que utilice en mi proyecto fue uso de "tabla", "modales", "estilo con boostrap" para llevar acabo un buen responsive desing o al menos se intento oviamente tiene sus detalles a pulir, "date" para poner fecha que tambien falta detallar en cuestion de logica pero se manejo, "radio/checkbox" decante por radio buton ya que con esta version de bootstrap que use no se porque se me complico el checkeado de los checkbox pero basicamente cumplen la misma funcion ambos espero y no sea algun problema haber tomado esa desicion, "select" tambien se uso elemento de seleccion, "botones" para hacer determinada accion principalmente llamar funciones atraves de eventos click, "icons" si bien considero que es mas algo de diseño que de elemento se uso elementos para representar actualizar y eliminar dentro de la tabla.

Para terminar y empezar a descripbir el arbol de directorio del proyecto comentare algunos inconvenientes que se tiene el proyecto.

1.- Pulir el diseño responsivo  

2.- Logica implementada con el elemento "Fecha" y elemento "Edad"  

3.- Mejor diseño en boton de Agregar Alumno  

4.- POner un boton de busqueda para tabla  

5.- Aregar una funcion de paginacion de la tabla para que agrupe por determinados elementos esto principalmente para cuando la tabla tenga muchos elementos para mostrar  

6.- Corregir el problema de codificacion de caracteres generado por consultas de PHP ya que pude averiguar que es el PHP el que no esta respetando caracteres especiales "UTF-8" deje un elemento con ese problema espero y se pueda observar si realizan la inyeccion de la BD que proporcione.  

7.-Mejor estructura en mi directorio del proyecto (ordenar de forma adecuada js, php, dependencias segun un estandar).  

8.- Mejor uso de Bootstrap si bien tengo conosimiento porque es el framework que mas e usado aun me falta por aprender ya que actualice a v5 de el pero tuve que modificar muchas estructuras que yo sabia por otras nuevas 
por ejemplo los "glyphicons" de bootstrap v4 en la v5 de este pasan a llamarse "bi" y al igual para integrarse. Ejemplo: De v4 "glyphicons glyphicons-pencil" pasaria a ponerse en v5 de la siguiente forma "bi bi-pencil".  

9.-Muy posiblemente la gestion de como lleve acabo el control de datos tanto hacia la base de datos y visceversa mas concretamente si es la forma mas segura ya que me cuestiono siempre eso cuando hago proyectos.  

10.- MUY IMPORTANTE TAMBIEN Y ES MAS POR EL TIEMPO QUE PREDISPUSE PARA TERMINARLO EL COMENTAR LINEAS DE CODIGO Y PONGO EN MAYUSCULAS PORQUE CREO QUE FALLE ROTUNDAMENTE EN ESTO PERO COMO MENCIONE ES MAS POR TIEMPO QUE DISPONIA.  

  
  

Pues bueno comentare que el programa es la gestion de "Alumnos" atraves de una tabla dinamica a la par de ventanas modales jugando un poco con las
herramientas que nos proporciona el framework de Bootsrap v5, tiene tambien la inclusion de "Alertify" no dispensable la verdad pero solo para arrojar mensajes
de una forma mas visual.

Nuestro arbol directorio de proyecto esta compuesto de las siguiente manera:

EJEMPLO-ABC-ALUMNOS

-componentes  
-dependencias  
-javascript  
-php  
-SQL  
-index.php  

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
