<?php 

use App\db;
db::connect();
$res = db::query("SELECT * FROM matrimonios")->fetchAll(PDO::FETCH_OBJ);

?>

<h2>Listado de Matrimonios</h2>
<!-- ********************************** lista de las tablas ***************************** -->
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del esposo</th>
      <th scope="col">Nombre conyuge</th>
      <th scope="col">Tiempo de casados</th>
      <th scope="col">Fecha de casados</th>
      <th scope="col" colspan="2">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    foreach($res as $dato){ 
  ?>
    <tr>
      <th scope="row"><?php echo $dato->id; ?></th>
      <td><?php echo $dato->nombre_esposo; ?></td>
      <td><?php echo $dato->nombre_esposa; ?></td>
      <td><?php echo $dato->tiempo_casados; ?></td>
      <td><?php echo $dato->fecha_casados; ?></td>
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
<form class="card-body" method="POST"  action="<?php App\html::echo_path('post/matrimonios-registrar')?>">
     
     <!-- Input nombre de esposo -->
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">face_6</span>
        </span>
        <!-- Input -->
        <input type="text" name ="nombre_esposo" class="form-control" placeholder="Nombre completo esposo" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <!-- Input nombre esposa -->
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">face_3</span>
        </span>
        <!-- Input -->
        <input type="text" name ="nombre_esposa" class="form-control" placeholder="Nombre completo conyuge " aria-label="Username" aria-describedby="basic-addon1">
    </div>
     <!-- Input tiempo de casados -->
     <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">timer</span>
        </span>
        <!-- Input -->
        <input type="text" name ="tiempo_casados" class="form-control" placeholder="tiempo de casados ( años o meses )" aria-label="Username" aria-describedby="basic-addon1">
    </div>
     
     <!-- Input fecha de casados -->
     <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">calendar_today</span>
        </span>
        <!-- Input -->
        <input type="date" name ="fecha_casados" class="form-control" placeholder="fecha de casados" aria-label="Username" aria-describedby="basic-addon1">
    </div>
     

    <!-- ******************************* -->
    <!-- ************ Botones de control*************** -->
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-success">Registrar</button>
    </div>
</form>