<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$nombre=$_POST['nombre_agregar'];
	$apaterno=$_POST['apaterno_agregar'];
	$amaterno=$_POST['amaterno_agregar'];
	$edad=$_POST['edad_agregar'];
	$fecha=$_POST['fecha_agregar'];
	$sexo=$_POST['sexo'];
	$campus=$_POST['campus'];

	$sql="INSERT into alumnos (Nombre,Apellido_Paterno,Apellido_Materno,Edad,Fecha_Nto,Sexo,Campus)
					   values ('$nombre','$apaterno','$amaterno','$edad','$fecha','$sexo','$campus')";
					   
	echo $result=mysqli_query($conexion,$sql);
 ?>