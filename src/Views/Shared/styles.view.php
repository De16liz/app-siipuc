<?php use App\app; ?>

<!-- Estilos por defecto -->
<link rel="stylesheet" href="<?php  \App\html::echo_css_path("body") ?>">
<link rel="stylesheet" href="<?php  \App\html::echo_css_path("bootstrap.min") ?>">
<link rel="stylesheet" href="<?php  \App\html::echo_css_path("estilos") ?>">
<link rel="stylesheet"  href="<?php  \App\html::echo_css_path("fonts") ?>">

<!-- Esta en la cabezara con los css -->
<script src=" <?php  \App\html::echo_js_path("jssor.slider.min") ?>" ></script>
<!-- CCS personalizados -->


<?php foreach (app::get_css() as $path){?>

    <link rel="stylesheet"  href="<?php echo $path ?>">

<?php } ?>