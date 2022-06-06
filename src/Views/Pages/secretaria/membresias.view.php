<?php 

use App\db;
db::connect();
$res = db::query("SELECT * FROM membresias")->fetchAll(PDO::FETCH_OBJ);

?>
<center><h2>Listado de personas</h2></center>
<!-- ********************************** lista de las tablas ***************************** -->
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cedula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Nacimiento</th>
      <th scope="col">Estado civil</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Barrio</th>
      <th scope="col">Profesion</th>
      <th scope="col" colspan="2">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    foreach($res as $dato){ 
  ?>
    <tr>
      <th scope="row"><?php echo $dato->id; ?></th>
      <td><?php echo $dato->cedula; ?></td>
      <td><?php echo $dato->nombre; ?></td>
      <td><?php echo $dato->nacimiento; ?></td>
      <td><?php echo $dato->ec; ?></td>
      <td><?php echo $dato->telefono; ?></td>
      <td><?php echo $dato->direccion; ?></td>
      <td><?php echo $dato->barrio; ?></td>
      <td><?php echo $dato->profesion; ?></td>
      <td>
        <div class="modal-footer">
            <button type="button" href="<?php App\html::echo_path('post/membresias-update')?>" class="btn btn-primary">Editar</button>
            <button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="showDelete(<?php echo $dato->id ?>)">Borrar 2</button>
        </div>
      </td>
    </tr>
    <?php 
    }
    ?>
   </tbody>
</table>
<!-- *********************************************************************************** -->
<!-- ********************************** Dialogo de bootrap ***************************** -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">¿Estas seguro de eliminar?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Una vez eliminado no podra modificar los datos
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="sendDelete()">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<!-- *********************************************************************************** -->

<script>
    var id = -1;
    function showDelete(i){
        id = i
    }

    function sendDelete(){
        window.location.href = "<?php App\html::echo_path('post/membresias-borrar') ?>?id=" + id;
    }
</script>


<!-- ********************************** registro de datos ***************************** -->
<hr>
<div class="card-header">
    Ingresar datos:
</div>
<form class="card-body" method="POST"  action="<?php App\html::echo_path('post/membresias-registrar')?>">
     <!-- Input cedula de persona -->
     <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">contacts</span>
        </span>
        <!-- Input -->
        <input type="text" name ="cedula" class="form-control" placeholder="Cédula del feligrez" aria-label="Username" aria-describedby="basic-addon1">
    </div>
     <!-- Input nombre de persona -->
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">person</span>
        </span>
        <!-- Input -->
        <input type="text" name ="nombre" class="form-control" placeholder="Nombre de persona" aria-label="Username" aria-describedby="basic-addon1">
    </div>
     <!-- Input fecha de nacimiento de persona -->
     <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">calendar_today</span>
        </span>
        <!-- Input -->
        <input type="date" name ="nacimiento" class="form-control" placeholder="fecha de nacimiento" aria-label="Username" aria-describedby="basic-addon1">
    </div>
     <!-- Input estado civil de persona -->
     <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">people_outline</span>
        </span>
        <!-- Input -->
        <input type="text" name ="ec" class="form-control" placeholder="Estado civil" aria-label="Username" aria-describedby="basic-addon1">
    </div>
     <!-- Input telefono de persona -->
     <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">call</span>
        </span>
        <!-- Input -->
        <input type="text" name ="telefono" class="form-control" placeholder="Numero de contacto" aria-label="Username" aria-describedby="basic-addon1">
    </div>
     <!-- Input direccion de persona -->
     <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">home</span>
        </span>
        <!-- Input -->
        <input type="text" name ="direccion" class="form-control" placeholder="Dirección de residencia" aria-label="Username" aria-describedby="basic-addon1">
    </div>
     <!-- Input barrio de persona -->
     <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">home</span>
        </span>
        <!-- Input -->
        <input type="text" name ="barrio" class="form-control" placeholder="Barrio  " aria-label="Username" aria-describedby="basic-addon1">
    </div>
     <!-- Input profesion de persona -->
     <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">person</span>
        </span>
        <!-- Input -->
        <input type="text" name ="profesion" class="form-control" placeholder="Profesión ejercida" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <!-- ******************************* -->
    <!-- ************ Botones de control*************** -->
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-success">Registrar</button>
    </div>
</form>
