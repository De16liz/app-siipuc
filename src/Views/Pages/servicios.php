<?php


?>
<!DOCTYPE html>
<html lang="es">
<head>
<link rel="shortcut icon" type="image/x-icon" href="public/img/logo-header.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
    <title>Servicios</title>
    <link rel="stylesheet" href="<?php  \App\html::echo_css_path("body") ?>">
    <link rel="stylesheet" href="<?php  \App\html::echo_css_path("bootstrap.min") ?>">
	<link rel="stylesheet" href="<?php  \App\html::echo_css_path("estilos") ?>">
	<link rel="stylesheet"  href="<?php  \App\html::echo_css_path("fonts") ?>">
	<script src=" <?php  \App\html::echo_js_path("jssor.slider.min") ?>" ></script>
</head>
<body>
    <?php //require $app_path_view; ?>
    <?php include('menu.php'); ?>
    <main>
		<article>
			<h1>SERVICIOS</h1>
			<hr>
			<p>Radio IPUC.</p>
			<img src="public/img/ipuc.png">
			<p>cultos entre semana: </p>
			<p>martes 6:30 pm.</p>
			<p>jueves 6:30 pm.</p>
			<p>Sabados 6:00 pm.</p>
			<p>Domingos 10:00 am y 6:00 pm.</p>
			<p>.</p>
			<p>.</p>
			
		</article>
	</main>

    <footer class="sticky-footer bg-white">
        
        <div class="footer texto">
            <span>© 2022 Copyright - Todos los derechos reservados.</span>
        </div>
        
        <div class="footer texto">
            <span>Desarrollado por Deimi L. Gomez D.</span>
        </div>   
    </footer>
    <script type="text/javascript" src=" <?php  \App\html::echo_js_path("jquery-3.2.1.min") ?>"></script>
	<script type="text/javascript" src=" <?php  \App\html::echo_js_path("headroom.min") ?>"></script>
	<script type="text/javascript" src=" <?php  \App\html::echo_js_path("menu") ?>"></script>
</body>
</html>