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
<body>
    <header>
        <?php require __DIR__ .'/Shared/header.view.php' ?>
    </header>

    <!-- Sección amostrar por vista -->
    <section>
        <?php require $app_path_view ?>
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