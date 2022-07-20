<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no ">
  <title>Alumnos -Equipos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="dependencias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="dependencias/alertifyjs/css/themes/default.css">

  <script src="dependencias/jquery-3.2.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="dependencias/alertifyjs/alertify.js"></script>
  <script src="javascript/funciones.js"></script>
  <script src="javascript/eventos.js"></script>
</head>

<body>

  <div class="container">
    <div id="tabla"></div>
  </div>

  <!-- VENTANA MODAL PARA NUEVOS ALUMNOS -->
  <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">AGREGAR ALUMNO</h4>
        </div>
        <div class="modal-body">
          <label>Nombre</label>
          <input type="text" name="" id="nombre_agregar" class="form-control input-sm">
          <label>Apellido Paterno</label>
          <input type="text" name="" id="apaterno_agregar" class="form-control input-sm">
          <label>Apellido Materno</label>
          <input type="text" name="" id="amaterno_agregar" class="form-control input-sm">
          <label>Edad</label>
          <input type="number" name="" id="edad_agregar" min="1" max="130" class="form-control input-sm">
          <label>Fecha Nacimiento</label>
          <input type="date" name="" id="fecha_agregar" class="form-control input-sm" min="1910-01-01" max="2100-12-31">
          <!-- <label>Sexo</label> -->
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="genero" id="masculino_agregar" value="Masculino">
            <label class="form-check-label" for="masculino_agregar">Masculino</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="genero" id="femenino_agregar" value="Femenino">
            <label class="form-check-label" for="femenino_agregar">Femenino</label>
          </div>

          <label>Campus</label>
          <div class="form-group">
            <select name="" id="campus_agregar" class="form-control">
              <option value="Default" disabled selected>Elige una opcion</option>
              <option value="Sistemas">Sistemas</option>
              <option value="Electronica">Electronica</option>
              <option value="Mecatronica">Mecatronica</option>
              <option value="Administracion">Administracion</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="limpiar">LIMPIAR</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="agregar_alumno">AGREGAR</button>
        </div>
      </div>
    </div>
  </div>

  <!-- VENTANA MODAL DE ACTUALIZACION DE DATOS DE ALUMNOS-->
  <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">ACTUALIZA DATOS</h4>
        </div>
        <div class="modal-body">
          <input type="text" hidden="" id="id_actualizar" name="">
          <label>Nombre</label>
          <input type="text" name="" id="nombre_actualizar" class="form-control input-sm">
          <label>Apellido Paterno</label>
          <input type="text" name="" id="apaterno_actualizar" class="form-control input-sm">
          <label>Apellido Materno</label>
          <input type="text" name="" id="amaterno_actualizar" class="form-control input-sm">
          <label>Edad</label>
          <input type="number" name="" id="edad_actualizar" class="form-control input-sm">
          <label>Fecha Nacimiento</label>
          <input type="date" name="" id="fecha_actualizar" class="form-control input-sm" min="1910-01-01" max="2100-12-31">
          <!-- <label class="form-label" for="check1">Sexo</label> -->
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="generoact" id="masculino_actiualizar" value="Masculino">
            <label class="form-check-label" for="masculino_actiualizar">Masculino</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="generoact" id="femenino_actiualizar" value="Femenino">
            <label class="form-check-label" for="femenino_actiualizar">Femenino</label>
          </div>
          <label>Campus</label>
          <div class="form-group">
            <select name="" id="campus_actualizar" class="form-control">
              <option value="Default">Elige una opcion</option>
              <option value="Sistemas">Sistemas</option>
              <option value="Electronica">Electronica</option>
              <option value="Mecatronica">Mecatronica</option>
              <option value="Administracion">Administracion</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" id="actualizar_alumno" data-dismiss="modal">UPDATE</button>
        </div>
      </div>
    </div>
  </div>

</body>

</html>