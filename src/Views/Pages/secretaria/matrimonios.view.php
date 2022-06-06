<h2>Listado de Matrimonios</h2>

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