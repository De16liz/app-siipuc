<?php 

use App\db;
db::connect();
$res = db::query("SELECT * FROM presentacion_niños")->fetchAll(PDO::FETCH_OBJ);

?>
<h2>Vista de la niñez</h2>
<!-- ********************************** lista de las tablas ***************************** -->
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del menor</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Nombre del padre</th>
      <th scope="col">Nombre de la Madre </th>
      <th scope="col" colspan="2">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    foreach($res as $dato){ 
  ?>
    <tr>
      <th scope="row"><?php echo $dato->id; ?></th>
      <td><?php echo $dato->nombre_menor; ?></td>
      <td><?php echo $dato->fecha_nacimiento; ?></td>
      <td><?php echo $dato->nombre_padre; ?></td>
      <td><?php echo $dato->nombre_madre; ?></td>
      <td>
        <div class="modal-footer">
            <button type="button" href="<?php App\html::echo_path('post/membresias-update')?>" class="btn btn-primary">Editar</button>
            <button type="button" onclick="return confirm('Estas seguro de eliminar?');" href="<?php App\html::echo_path('post/membresias-borrar')?>" class="btn btn-danger" data-dismiss="modal">Borrar</button>
        </div>
      </td>
    </tr>
    <?php 
    }
    ?>
   </tbody>
</table>
<!-- ********************************** registro de datos ***************************** -->
<div class="card-header">
    Ingresar datos:
</div>
<form class="card-body" method="POST"  action="<?php App\html::echo_path('post/presentacion-registrar')?>">
     
    <!-- Input nombre del mmenor -->
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">boy</span>
        </span>
        <!-- Input -->
        <input type="text" name ="nombre_menor" class="form-control" placeholder="Nombre completo del menor" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <!-- Input fecha de nacimeinto -->
     <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">calendar_today</span>
        </span>
        <!-- Input -->
        <input type="date" name ="fecha_nacimiento" class="form-control" placeholder="fecha de casados" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <!-- Input nombre del padre -->
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">face_6</span>
        </span>
        <!-- Input -->
        <input type="text" name ="nombre_padre" class="form-control" placeholder="Nombre completo del padre" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <!-- Input nombre esposa -->
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">face_3</span>
        </span>
        <!-- Input -->
        <input type="text" name ="nombre_madre" class="form-control" placeholder="Nombre completo de la madre " aria-label="Username" aria-describedby="basic-addon1">
    </div>
     
    
    <!-- ******************************* -->
    <!-- ************ Botones de control*************** -->
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-success">Registrar</button>
    </div>
</form>