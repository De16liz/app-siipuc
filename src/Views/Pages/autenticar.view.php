
<main>
        <article>

            <div class='row '> <!--fila 2-->
            <div class="col-sm-3 ">
            </div>

            <div class="col-xs-12 col-sm-6 ">	
                <div class="col-xs-12 ">

<center>    
    <h1>Iniciar sesión</h1>

    <form action="../controlador/autenticacion.php" method="POST" id="iniciar">
    <?php echo isset($alert2) ? $alert2 : ""; ?>

    <div style="margin-bottom: 25px" class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="Usuario" required>                                   
    </div>

    <div style="margin-bottom: 25px" class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <input id="password" type="password" class="form-control" name="password" placeholder="Ingrese Contraseña" required>
    </div>

    <div  class="form-group">
        
        <button id="btn-login" type="submit" class="col-xs-12 btn btn-primary"><b>Iniciar Sesi&oacute;n</b></a>
        
        </div><br>
                    
        <div class="form-group">
        <div class="panel-heading">
        <div class="panel-title"></div><br>
        <div style="float:right; font-size: 80%; position: relative; top:10px"><a href="recuperacontra.php">¿has olvidado tu contraseña?</a></div>
        </div> <br>
        <div class="col-md-12 control">
        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
        <a href="registro.php">Registrate aquí</a>
        <br><br><br>
        Volver al  <a href="index.php">Inicio</a>
        </div>
        </div>
        </div>   
    </form>
</center>
</div>
<div class="col-sm-3 ">
</div>
</main>