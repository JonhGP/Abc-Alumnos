
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from alumnos where ID_Alumno='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>