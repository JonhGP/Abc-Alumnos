<?php

require_once "../php/conexion.php";
$conexion = conexion();
?>
<div class="row">
	
	<div class="col-sm-12">
		<h2>Tabla Dinamica - Alumnado</h2>
		<div class="from-control">
			<caption>
				<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
					AGREGAR ALUMNO
					<span class="bi bi-person-plus"></span>
				</button>
			</caption>
		</div>
		
		<table class="table">
			<thead class="table-dark">
				<tr>
					<th scope="col">ID</td>
					<th scope="col">Nombre</td>
					<th scope="col">Apellido Paterno</td>
					<th scope="col">Apellido Materno</td>
					<th scope="col">Edad</td>
					<th scope="col">Fecha Nacimiento</td>
					<th scope="col">Sexo</td>
					<th scope="col">Campus</td>
					<th scope="col">Editar</td>
					<th scope="col">Eliminar</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql = ("SELECT * FROM `alumnos`");
					$result = mysqli_query($conexion, $sql);
					while ($ver = mysqli_fetch_row($result)) 
					{
						$datos = $ver[0] . "||" .
								 $ver[1] . "||" .
								 $ver[2] . "||" .
								 $ver[3] . "||" .
								 $ver[4] . "||" .
								 $ver[5] . "||" .
								 $ver[6] . "||" .
								 $ver[7];
				?>
				<tr>
					<td><?php echo $ver[0] ?></td>
					<td><?php echo $ver[1] ?></td>
					<td><?php echo $ver[2] ?></td>
					<td><?php echo $ver[3] ?></td>
					<td><?php echo $ver[4] ?></td>
					<td><?php echo $ver[5] ?></td>
					<td><?php echo $ver[6] ?></td>
					<td><?php echo $ver[7] ?></td>
					<td><button class="btn btn-warning bi bi-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agrega_datosmodal('<?php echo $datos ?>')"></button></td>
					<td><button class="btn btn-danger bi bi-trash" onclick="preguntarSiNo('<?php echo $ver[0] ?>')"></button></td>
				</tr>
				<?php
				}
				?>
			<tbody>
		</table>
	</div>
</div>