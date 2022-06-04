<!DOCTYPE html>
<html lang="es">
<head>
<link rel="shortcut icon" type="image/x-icon" href="public/img/logo-header.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php  \App\html::echo_css_path("body") ?>">
</head>
<body>
    <?php require $app_path_view; ?>
    <?php include('public/contenido.php'); ?>

    <footer class="sticky-footer bg-white">
        
        <div class="footer texto">
            <span>© 2022 Copyright - Todos los derechos reservados.</span>
        </div>
        
        <div class="footer texto">
            <span>Desarrollado por Deimi L. Gomez D.</span>
        </div>   
               
    
    </footer>
</body>
</html>