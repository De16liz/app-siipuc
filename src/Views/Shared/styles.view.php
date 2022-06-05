<?php use App\{app, html}; ?>

<!-- Estilos por defecto -->
<link rel="stylesheet" href="<?php  html::echo_css_path("globales") ?>">

<!-- Esta en la cabezara con los css -->
<script src=" <?php  \App\html::echo_js_path("jssor.slider.min") ?>" ></script>
<!-- CCS personalizados -->


<?php foreach (app::get_css() as $path){?>

    <link rel="stylesheet"  href="<?php echo $path ?>">

<?php } ?>