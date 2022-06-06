<h2>Vista de eventos</h2>

<div class="card-header">
    Ingresar evento:
</div>
<form class="card-body" method="POST"  action="<?php App\html::echo_path('post/eventos-registrar')?>">
     
    <!-- Input nombre del programa -->
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">event</span>
        </span>
        <!-- Input -->
        <input type="text" name ="programa" class="form-control" placeholder="Programacion" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <!-- Input fecha del progama -->
     <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <!-- Icono -->
            <span class="material-icons">calendar_today</span>
        </span>
        <!-- Input -->
        <input type="date" name ="fecha" class="form-control" placeholder="fecha de programa" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    
      
    <!-- ******************************* -->
    <!-- ************ Botones de control*************** -->
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-success">Registrar</button>
    </div>
</form>