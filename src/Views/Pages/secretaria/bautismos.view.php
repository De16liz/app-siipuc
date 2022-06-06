<h2>Lista de Bautizados</h2>

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