<?php
use App\app;
?>

<nav class="menu">
    <div class="logo">
        <a href="#"><img src="public/img/ipuc.png" alt=""></a>
        <a href="#" class="btn-menu" id="btn-menu"><i class="icono fa fa-bars" aria-hidden="true"></i></a>
    </div>
    <div class="enlaces" id="enlaces">
        <?php foreach (app::get_menu() as $menu){ ?>
            <a href="<?php $menu->echoLink() ?>"><i class="<?php $menu->echoICon() ?>" aria-hidden="true"></i><?php $menu->echoValue() ?></a>
        <?php } ?>
    </div>
</nav>