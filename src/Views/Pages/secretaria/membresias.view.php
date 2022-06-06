<h2>Listado de personas</h2> <hr>

<ul class="list-group">
  <li class="list-group-item disabled">Cedula</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
<div class="modal-footer">
        <button type="button" href="<?php App\html::echo_path('post/membresias-update')?>" class="btn btn-primary">Actualizar</button>
        <button type="button" onclick="return confirm('Estas seguro de eliminar?');" href="<?php App\html::echo_path('post/membresias-borrar')?>" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
</div>


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