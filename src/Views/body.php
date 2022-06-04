<!DOCTYPE html>
<html lang="es">
<head>
<link rel="shortcut icon" type="image/x-icon" href="public/img/logo-header.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
    <title>Ipuc</title>
    <?php require  __DIR__ . './Shared/styles.view.php' ?>
</head>
<body>
    <!-- *********** La cabecera de la pagian **********-->
    <header>
        <?php require  __DIR__ . './Shared/header.view.php' ?>
    </header>
    <!-- *******  Contenido por vista  *********-->
    <section>

        <?php require $app_path_view; ?>

    </section>

    <!-- *********  El footer *************** -->
    <footer class="sticky-footer bg-white">
        <?php require __DIR__ . './Shared/footer.view.php' ?>
    </footer>
    <!-- ********* Aqui van los scripts -->

    <?php require  __DIR__ . './Shared/scripts.view.php' ?>
</body>
</html>