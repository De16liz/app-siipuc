<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPUC</title>

    <!-- ****************************************************************** -->
    <!-- *************************** Bootstrap  *************************** -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- ****************************************************************** -->
    <!-- ****************************************************************** -->

    <!-- ****************************************************************** -->
    <!-- *************************** Iconos de Google ********************* -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- ****************************************************************** -->
    <!-- ****************************************************************** -->

    <!-- ****************************************************************** -->
    <!-- *************************** CSS Locales ************************** -->
    <?php require __DIR__ . '/Shared/styles.view.php' ?>
    <!-- ****************************************************************** -->
    <!-- ****************************************************************** -->


</head>
<body class="pg-login">
    <header>
        
    </header>

    <!-- Sección amostrar por vista -->
    <section>
        <div class="card" style="width: 20rem;">
            <form class="card-body" method="POST">
                <h3 class="card-title">Registro de usuario</h3>
                <div class="card-body">



                    <!-- Input nombre -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <span class="material-icons">badge</span>
                        </span>
                        <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <!-- Input apellido -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <span class="material-icons">badge</span>
                        </span>
                        <input type="text" class="form-control" placeholder="Apellido" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <!-- Input nombre de usuario -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <span class="material-icons">person</span>
                        </span>
                        <input type="text" class="form-control" placeholder="Nombre de usuario" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    
                    <!-- Input Contraseña -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <span class="material-icons">password</span>
                        </span>
                        <input type="text" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                </div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-success">Iniciar registro</button>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <?php require __DIR__ . '/Shared/footer.view.php' ?>
    </footer>

    <!-- ****************************************************************** -->
    <!-- ********* Cargamos los scripts personalizados por vista ********** -->
    
    <!-- ****************************************************************** -->
    <!-- ****************************************************************** -->


    <!-- ****************************************************************** -->
    <!-- ********* Dialog de mensajes del sistem ********** -->
    <!-- Button trigger modal -->
    <?php if (!empty($_ENV['app-message'] ?? '')){ require __DIR__ . '/Shared/message.view.php';    } ?>
    <!-- ****************************************************************** -->
    <!-- ****************************************************************** -->
</body>
</html>