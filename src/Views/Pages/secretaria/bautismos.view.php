<?php 

use App\db;
db::connect();
$res = db::query("SELECT * FROM bautizados")->fetchAll(PDO::FETCH_OBJ);

?>
<h2>Lista de Bautizados</h2>
<!-- ********************************** lista de las tablas ***************************** -->
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Fecha de Bautizo</th>
      <th scope="col">Pastor de Bautizo</th>
      <th scope="col" colspan="2">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    foreach($res as $dato){ 
  ?>
    <tr>
      <th scope="row"><?php echo $dato->id; ?></th>
      <td><?php echo $dato->nombre; ?></td>
      <td><?php echo $dato->apellido; ?></td>
      <td><?php echo $dato->fecha_bautismo; ?></td>
      <td><?php echo $dato->pastor_bautismo; ?></td>
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
<form class="card-body" method="POST"  action="<?php App\html::echo_path('post/bautizados-registrar')?>">
     
     <!-- Input nombre de bautizado -->
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">person</span>
        </span>
        <!-- Input -->
        <input type="text" name ="nombre" class="form-control" placeholder="Nombre Bautizado" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <!-- Input apellido del bautizado -->
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">person</span>
        </span>
        <!-- Input -->
        <input type="text" name ="apellido" class="form-control" placeholder="Apellido Bautizado" aria-label="Username" aria-describedby="basic-addon1">
    </div>
     <!-- Input fecha de bautismo -->
     <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">calendar_today</span>
        </span>
        <!-- Input -->
        <input type="date" name ="fecha_bautismo" class="form-control" placeholder="fecha de bautismo" aria-label="Username" aria-describedby="basic-addon1">
    </div>
     
     <!-- Input pastor que lo bautizo -->
     <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">call</span>
        </span>
        <!-- Input -->
        <input type="text" name ="pastor_bautismo" class="form-control" placeholder="Nombre del pastor que lo bautizo" aria-label="Username" aria-describedby="basic-addon1">
    </div>
     

    <!-- ******************************* -->
    <!-- ************ Botones de control*************** -->
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-success">Registrar</button>
    </div>
</form>