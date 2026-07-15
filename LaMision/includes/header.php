<?php

function headerPrint($title, $contenidoHeader, $rutaImagen, $classFlor, $isReservaAhora = false)
{
    echo "<header class='container-fluid'>
    <div class='container'>
        <div class='row'>
            <div class='col-12 col-header-nav'>
                <nav class='navbar navbar-expand-lg' id='navbar-header'>
                    <div class='container-fluid' id='navbar-header-div'>
                        <a href='../index.php'><img class='navbar-brand' src='../img/logo.svg' /></a>
                        <div class='divImgMobileHeader'>
                            <a href='https://wa.me/541134150500' target='_blank' id='social-media-header-whatsapp'><img src='../img/whatsapp.svg' class='social-media mobile-inline'></a>
                           <a href='https://instagram.com/lamision.mocona' target='_blank' id='social-media-header-instagram'><img src='../img/instagram.svg' class='social-media mobile-inline'></a>
                        </div>
                        <button class='navbar-toggler' type='button' data-bs-toggle='collapse'
                            data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent'
                            aria-expanded='false' aria-label='Toggle navigation' id='button-menu-header'>
                            <span class='navbar-toggler-icon'></span>
                        </button>
                        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                                <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                                <li class='nav-item dropdown'>
                                <a class='nav-link dropdown-toggle' id='header-el-complejo' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                    El Complejo
                                </a>
                                <ul class='dropdown-menu'>
                                    <li class='nav-item'><a class='dropdown-item nav-link' href='house.php'>House</a></li>
                                    <li class='nav-item'><a class='dropdown-item nav-link' href='gastronomia.php'>Gastronomía</a></li>
                                    <li class='nav-item'><a class='dropdown-item nav-link' href='saltos.php'>Saltos</a></li>
                                    <li class='nav-item'><a class='dropdown-item nav-link' href='../LodgeDeSelva/index.php'>Lodge</a></li>
                                    <li class='nav-item'><a class='dropdown-item nav-link' href='../LuxuryGlamping/index.php'>Domos</a></li>
                                </ul>
                            </li>
                            <li class='nav-item dropdown'>
                                <a class='nav-link dropdown-toggle' id='header-hospedaje' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                    Habitaciones
                                </a>
                                <ul class='dropdown-menu'>
                                    <li class='nav-item'><a class='dropdown-item nav-link' href='domos.php'>Domos</a></li>
                                    <li class='nav-item'><a class='dropdown-item nav-link' href='suites.php'>Suites</a></li>
                                </ul>
                            </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='excursiones.php' id='header-actividades'>Actividades</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='sustentabilidad.php' id='header-sustentabilidad'>Sustentabilidad</a>
                                    </li>
                                    <li class='nav-item'>
                                    <a class='nav-link' href='galeria.php' id='header-sustentabilidad'>Galeria</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='contacto.php' id='header-contacto'>Contacto</a>
                                    </li>
                                    <li class='nav-item'>
                                    <img src='../img/spanish.svg' class='img-languaje mobile-inline' id='img-languaje3' />
                                    <select id='languages4' class='span-languaje mobile-inline'>
                                    <option value='es'>ESPAÑOL</option>
                                    <option value='en'>ENGLISH</option>
                                    <option value='pt'>PORTUGUÊS</option>
                                    </select>
                                </li>
                                </ul>
                                <form class='d-flex align-items-center social-media-reservar-menu-mobile'>
                                    <div class='social-media-menu-mobile'>
                                        <span class='nav-link mobile'>(011) 15 3415- 0500</span>
                                        <a href='https://wa.me/541134150500' target='_blank'><img src='../img/whatsapp.svg' class='social-media'></a>
                                        <a href='https://instagram.com/lamision.mocona' target='_blank'><img src='../img/instagram.svg' class='social-media'></a>
                                    </div>
                                    <a class='btn btn-reserva-ahora btn-reserva-ahora-header' href='reservaAhora.php' id='header-reserva-ahora-1''>Reserva ahora</a>
                                    <img src='../img/spanish.svg' class='img-languaje desktop' id='img-languaje2' />
                                    <select id='languages3' class='span-languaje desktop'>
                                        <option value='es'>ES</option>
                                        <option value='en'>EN</option>
                                        <option value='pt'>PT</option>
                                    </select>
                                </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class='row' id='row-header-title'>";
    if (!$isReservaAhora) {
        $rutaImagenClean = trim($rutaImagen, "'\"");
        $srcsetAttr = '';
        if ($rutaImagenClean !== '') {
            $ext = pathinfo($rutaImagenClean, PATHINFO_EXTENSION);
            $nameNoExt = pathinfo($rutaImagenClean, PATHINFO_FILENAME);
            $dir = dirname($rutaImagenClean);
            $small = "$dir/$nameNoExt-500w.$ext";
            $medium = "$dir/$nameNoExt-800w.$ext";
            if (file_exists(__DIR__ . '/' . $small) && file_exists(__DIR__ . '/' . $medium)) {
                $srcsetAttr = "srcset='$small 500w, $medium 800w, $rutaImagenClean 1172w' sizes='(max-width: 991px) 100vw, 50vw'";
            }
        }
        echo "
            <div class='col-12 col-lg-6 col-text-header'>
                <h6 class='page-name'>MISIÓN MOCONÁ</h6>
                <h1 class='title' id='$title'>$title</h1>
                $contenidoHeader
            </div>
            <div class='col-12 col-lg-6 text-center text-lg-start'>
                <img src=$rutaImagen $srcsetAttr class='img-header'>
            </div>
        ";
    }
    echo "</div>
        </div>
    <img src='../img/header-flower-dekstop.webp' class='img-absolute-header $classFlor desktop'>
    <img src='../img/header-flower-mobile.webp' class='img-absolute-header $classFlor mobile'>
</header>";


echo "<script src='../jquery/jquery-3.7.1.min.js'></script>";
echo "<script>
    $(document).ready(function() {
        $('.dropdown').hover(function() {
            $(this).addClass('show');
            $(this).find('.dropdown-menu').addClass('show');
        }, function() {
            $(this).removeClass('show');
            $(this).find('.dropdown-menu').removeClass('show');
        });
        });
     </script>";
}
