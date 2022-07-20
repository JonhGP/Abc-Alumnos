
//FUNCION PARA AGREGAR DATOS LA LLAMAMOS CUANDO CREAMOS UN NUEVO ALUMNO
function agregar_alumno(nombre, apaterno, amaterno, edad, fechanac, sexo, campus)
{
	cadena="nombre_agregar=" + nombre + "&apaterno_agregar=" + apaterno +"&amaterno_agregar=" + amaterno + "&edad_agregar=" + edad + "&fecha_agregar=" + fechanac+ "&fechanac=" + "&sexo=" + sexo + "&campus=" + campus;
	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("CREADO CON EXITO");
			}
			else
			{
				alertify.error("NO SE PUDO CREAR");
			}
		}

	});
}

function actualizar_alumno()
{
	id=$('#id_actualizar').val();
	nombre=$('#nombre_actualizar').val();
	apaterno=$('#apaterno_actualizar').val();
	amaterno=$('#amaterno_actualizar').val();
	edad=$('#edad_actualizar').val();
	fecha=$('#fecha_actualizar').val();
	sexo = (document.querySelector('input[name=generoact]:checked').value);
    selectionact = (document.getElementById("campus_actualizar"));
	campus= (selectionact.options[selectionact.selectedIndex].value);
	if(campus=='Default')
	{
		campus="";
	}
	
	


	cadena="id_actualizar="+ id + "&nombre_actualizar=" + nombre + "&apaterno_actualizar=" + apaterno +"&amaterno_actualizar=" + amaterno + "&edad_actualizar=" + edad + "&fecha_actualizar=" + fecha + "&sexo=" + sexo + "&campus=" + campus;
	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("ACTRUALIZADO CORRECTAMENTE");
			}else{
				alertify.error("PROBLEMAS AL ACTUALIZAR");
			}
		}
	});

}

function agrega_datosmodal(datos)
{
	d=datos.split('||');
	$('#id_actualizar').val(d[0]);
	$('#nombre_actualizar').val(d[1]);
	$('#apaterno_actualizar').val(d[2]);
	$('#amaterno_actualizar').val(d[3]);
	$('#edad_actualizar').val(d[4]);
	$('#fecha_actualizar').val(d[5]);
	if(d[6]=="Masculino")
	{
		document.querySelector('#masculino_actiualizar').checked = true;
	}
	else if(d[6]=="Femenino")
	{
		document.querySelector('#femenino_actiualizar').checked = true;
	} 
	else
	{
		document.querySelector('#masculino_actiualizar').checked = false;
		document.querySelector('#femenino_actiualizar').checked = false;
	}
	if(d[7]!=="")
	{
		document.getElementById("campus_actualizar").value = d[7];
	}
	else
	{
		document.getElementById("campus_actualizar").value = 'Default';	
	}
	
	
	
}





function preguntarSiNo(id)
{
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id)
{
	cadena="id=" + id;
	console.log(id);
		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}