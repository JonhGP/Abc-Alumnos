<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id_actualizar'];
	$nombre=$_POST['nombre_actualizar'];
	$apaterno=$_POST['apaterno_actualizar'];
	$amaterno=$_POST['amaterno_actualizar'];
	$edad=$_POST['edad_actualizar'];
	$fecha=$_POST['fecha_actualizar'];
	$sexo=$_POST['sexo'];
	$campus=$_POST['campus'];

	$sql="UPDATE alumnos set Nombre='$nombre', Apellido_Paterno='$apaterno', Apellido_Materno='$amaterno', Edad='$edad', Fecha_Nto='$fecha', Sexo='$sexo', Campus='$campus'
		  WHERE ID_Alumno='$id'";

	echo $result=mysqli_query($conexion,$sql);

 ?>