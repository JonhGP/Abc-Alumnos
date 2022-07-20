$(document).ready(function(){
    $('#tabla').load('componentes/tabla.php');

    $('#agregar_alumno').click(function(){
      nombre = $('#nombre_agregar').val();
      apaterno = $('#apaterno_agregar').val();
      amaterno = $('#amaterno_agregar').val();
      edad = $('#edad_agregar').val();
      fechanac = $('#fecha_agregar').val();
      sexo = (document.querySelector('input[name=genero]:checked').value);
      selection = (document.getElementById("campus_agregar"));
      campus= (selection.options[selection.selectedIndex].value);

      agregar_alumno(nombre, apaterno, amaterno, edad, fechanac, sexo, campus);
      document.getElementById("nombre_agregar").value = "";
      document.getElementById("apaterno_agregar").value = "";
      document.getElementById("amaterno_agregar").value = "";
      document.getElementById("edad_agregar").value = "";
      document.getElementById("fecha_agregar").value = "";
      document.getElementById("campus_agregar").value = 'Default';
      document.querySelector('input[name=genero]:checked').checked = false;

    });

    $('#limpiar').click(function() {
      document.getElementById("nombre_agregar").value = "";
      document.getElementById("apaterno_agregar").value = "";
      document.getElementById("amaterno_agregar").value = "";
      document.getElementById("edad_agregar").value = "";
      document.getElementById("fecha_agregar").value = "";
      document.getElementById("campus_agregar").value = 'Default';
      document.querySelector('input[name=genero]:checked').checked = false;

    });

    $('#actualizar_alumno').click(function() {
        actualizar_alumno();
    });
  });