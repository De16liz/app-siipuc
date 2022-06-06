<h2>Vista de la niñez</h2>

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