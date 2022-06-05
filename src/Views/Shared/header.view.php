<?php
use App\{app, html};

?>

<div class="app-header">

    <div class="app-header-icon">
        <a href="<?php html::echo_path_obsolute('') ?>">
            <img src="<?php html::echo_img_path('ipuc.png') ?>" alt="">
        </a>
    </div>
    <ul class="nav justify-content-end">
        <!-- ************ Secretaria -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="material-icons">work</span>
            <span>Secretaria</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php html::echo_path_obsolute('membresias') ?>">Membresias</a></li>
            <li><a class="dropdown-item" href="<?php html::echo_path_obsolute('bautismos') ?>">Bautismos</a></li>
            <li><a class="dropdown-item" href="<?php html::echo_path_obsolute('matrimonios') ?>">Matrimonios</a></li>
            <li><a class="dropdown-item" href="<?php html::echo_path_obsolute('niñez') ?>">Niñez</a></li>
            <li><a class="dropdown-item" href="<?php html::echo_path_obsolute('datos-generales') ?>">Datos generales</a></li>
          </ul>
        </li>

        <!-- ************ Formato -->
        <li class="nav-item app-header-nav-item">
            <a class="nav-link" href="<?php html::echo_path_obsolute('formato') ?>">
                <span class="material-icons">article</span>
                <span>Formato</span>
            </a>
        </li>

        <!-- ************ Servicios -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="material-icons">support_agent</span>
            <span>Servicios</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php html::echo_path_obsolute('eventos') ?>">Eventos</a></li>
            <li><a class="dropdown-item" href="<?php html::echo_path_obsolute('circulares') ?>">Circulares</a></li>
            <li><a class="dropdown-item" href="<?php html::echo_path_obsolute('actas-de-reuniones') ?>">Actas de reuniones</a></li>
          </ul>
        </li>

        <!-- ************ Salir, inicar sesión, registrarse -->
        <li class="nav-item app-header-nav-item">
            <a class="nav-link" href="<?php html::echo_path('post/usuario-cerrar-sesion') ?>">
                <span class="material-icons">logout</span>
                <span>Cerrar sesión</span>
            </a>
        </li>
    </ul>

</div>