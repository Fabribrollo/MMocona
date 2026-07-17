<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lodge de Selva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/suites.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header class="container-fluid header-index">
        <div class="container">
            <div class="row">
                <div class="col-12 col-header-nav">
                    <nav class="navbar navbar-expand-lg" id='navbar-header'>
                        <div class="container-fluid" id='navbar-header-div'>
                            <a href="index.php"><img class="navbar-brand" src="img/logo.svg" /></a>
                            <div class='divImgMobileHeader'>
                                <a href='https://wa.me/541134150500' target="_blank" id='social-media-header-whatsapp'><span class='whatsapp-phone-pill mobile-inline'>+54 11 3415 0500</span></a>
                                <a href='https://instagram.com/lamision.mocona' target="_blank" id='social-media-header-instagram'><img src='img/instagram.svg' class='social-media mobile-inline'></a>
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id='button-menu-header'>
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle label" id="header-habitaciones" href="#pages/suites.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Habitaciones
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item nav-link" href="pages/suites.php#main-suite-selva">Suite De Selva</a></li>
                                                <li class="nav-item"><a class="dropdown-item nav-link" href="pages/suites.php">Master Suites</a></li>
                                                <li class="nav-item"><a class="dropdown-item nav-link" href="pages/suites.php#main-gran-suite">Gran Suite</a></li>
                                            </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle label" id="header-actividades" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Actividades
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item nav-link" href="pages/excursiones.php">Safari 4x4</a></li>
                                                <li class="nav-item"><a class="dropdown-item nav-link" href="pages/excursiones.php">Aventura en Floating</a></li>
                                                <li class="nav-item"><a class="dropdown-item nav-link" href="pages/excursiones.php">Cabalgatas</a></li>
                                                <li class="nav-item"><a class="dropdown-item nav-link" href="pages/excursiones.php">Avistajes de Aves</a></li>
                                                <li class="nav-item"><a class="dropdown-item nav-link" href="pages/excursiones.php">Senderos Interpretativos</a></li>
                                            </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="restaurante" href="pages/gastronomia.php">Restaurante</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='pages/sustentabilidad.php' id='header-sustentabilidad'>Sustentabilidad</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='pages/galeria.php' id='header-galeria'>Galeria</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/contacto.php" id="header-contacto">Contacto</a>
                                    </li>
                                    <li class="nav-item">
                                        <img src='img/spanish.svg' class='img-languaje mobile-inline' id='img-languaje3' />
                                        <select id='languages4' class='span-languaje mobile-inline'>
                                            <option value='es'>ESPAÑOL</option>
                                            <option value='en'>ENGLISH</option>
                                            <option value='pt'>PORTUGUÊS</option>
                                        </select>
                                    </li>
                                </ul>
                                <form class="d-flex align-items-center social-media-reservar-menu-mobile">
                                    <div class='social-media-menu-mobile'>
                                        <a href='https://wa.me/541134150500' target="_blank"><span class='whatsapp-phone-pill'>+54 11 3415 0500</span></a>
                                        <a href='https://instagram.com/lamision.mocona' target="_blank" id='social-media-header-instagram'><img src='img/instagram.svg' class='social-media'></a>
                                    </div>
                                    <a class='btn btn-reserva-ahora btn-reserva-ahora-header' href='pages/reservaAhora.php' id='header-reserva-ahora-1'>Reserva ahora</a>
                                    <img src='img/spanish.svg' class='img-languaje desktop' id='img-languaje2' />
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
            <div class="row" id='row-header-title'>
                <div class="col-12">
                    <h6 class="page-name" style="visibility:hidden;">LODGE DE SELVA</h6>
                    <h1 class="title" id="header-respira" style="visibility:hidden;">Respirá </h1>
                    <h1 class="title title-white" id="header-naturaleza" style="visibility:hidden;"> Naturaleza</h1>
                </div>
            </div>
        </div>
        <img src="img/header-flower-index.png" class="img-absolute-header img-absolute-header-index">
    </header>
    <div class="container-fluid" style="background-color: #F7F7F7; padding-bottom: 40px; margin-bottom: -70px;">
        <div class="container floating-buttons">
            <div class="row floating-buttons-row justify-content-center">
                <div class="col-12">
                    <form action="https://www.hoteladmin.com.ar/system/responsive/plugged-apps/book-vertical.php?hotelID=334&action=query_externo" target="_blank" method="post" class="form-reserva form-reserva-ahora form-reserva-index container-fluid">
                        <div class="row justify-content-evenly align-items-center">
                            <div class="col-12 col-md-5 col-fechas-reserva-ahora">
                                <div class="container-fluid container-form-reservar-ahora-fechas">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-form-group-form-fechas">
                                            <div class="form-group form-group-fecha-entrada">
                                                <label for="fecha-entrada" class="label-fechas">CHECK IN</label>
                                                <img src="img/datePicker.svg" class="img-date">
                                                <input name="f_in" class="form-control input-fecha" id="fecha-entrada" type="date">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-form-group-form-fechas">
                                            <div class="form-group form-group-fecha-salida form-group-fecha-salida-reserva-ahora">
                                                <label for="fecha-salida" class="label-fechas label-check-out-reserva-ahora">CHECK OUT</label>
                                                <img src="img/datePicker.svg" class="img-date">
                                                <input name="f_fin" type="date" class="form-control input-fecha input-fecha-salida" id="fecha-salida">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-group-huespedes col-12 col-md-4">
                                <label for="select-huespedes" class="label-huespedes" id="label-huespedes">PASAJEROS</label>
                                <img src="img/huesped.svg" class="img-date">
                                <select name="pasajeros" class="form-control select-huespedes" id="select-huespedes">
                                    <option id="select-option-1-huesped">1 pasajero</option>
                                    <option id="select-option-2-huespedes">2 pasajeros</option>
                                    <option id="select-option-3-huespedes">3 pasajeros</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-2 col-btn-buscar">
                                <button type="submit" class="btn btn-primary btn-form-reservar btn-form-buscar" id="form-btn-reservar">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <main class="container-fluid sectionElLodge">
        <section class="container">
            <div class="row">
                <div class="col-12">
                    <h6 class="h6LaMision">LODGE DE SELVA</h6>
                    <h3 class="h3TitleSection h3TitleSectionWithOutMargin" id="main-el-lodge">El Lodge</h3>
                </div>
                <div class="col-12 col-md-6 colWithBorderRight">
                    <p class="pElLodge" id="main-p-construimos-posada">Construimos Posada La Misión Moconá con la intención de brindarle un lugar sin
                        igual para su
                        descanso. En este lugar único, estamos donde queremos estar, rodeados de la siempre apasionante
                        y sorprendente Madre Naturaleza.</p>
                    <p class="pElLodge" id="main-p-en-orillas-rio">En las orillas del río Uruguay y cercana a los Saltos del Moconá, se encuentra
                        la LA MISIÓN
                        MOCONA, en un predio de 30 hectáreas, es un lugar único para vivir de la naturaleza con toda su
                        magia y esplendor.</p>
                    <p class="pElLodge pNone" id="main-p-desde-los-miradores">Desde los miradores a orillas del río Uruguay, es posible tomar sol y admirar el paisaje. El complejo cuenta con 3 piscinas de distintos niveles para poder disfrutar del paisajes, del sol y de la naturaleza.
                    </p>
                    <p class="pElLodge pNone" id="main-p-en-nuestra-orilla">En nuestra orilla podemos embarcar para poder visitar directamente a los Saltos de Mocona. (con reserva previa).</p>
                    <p class="pElLodge pNone" id="main-p-el-house-espacio-podemos">El House es el espacio donde podemos disfrutar de un espacio mágico y cálido, donde brindamos el servicio de gastronomía y podemos entretenernos con juegos de mesa, y en invierno disfrutar de la calidez del hogar a leña.</p>
                    <div class="div-ver-mas-header">
                        <p class="link" id="main-verMas-1">Ver más</p>
                        <img id='arrow-ver-mas' src="img/arrowDownGreen.svg" />
                    </div>
                </div>
                <div class="col-12 col-md-6 colRightSectionElLodge">
                    <div class="divContactSectionElLodge">
                        <img src="img/whatsappMain.svg" class="imgContactSectionElLodge" /><span>(011) 15 3415-
                            0500</span>
                    </div>
                    <div class="divContactSectionElLodge">
                        <img src="img/mail.svg" class="imgContactSectionElLodge"><span>lamisionlodge@gmail.com</span>
                    </div>
                    <div class="divContactSectionElLodge divLocationSectionElLodge">
                        <img src="img/location.svg" class="imgContactSectionElLodge imgLocationSectionElLodge" />
                        <span id="main-direccion">Ruta provincial 2km 36.
                            Colonia Paraíso - Saltos del Moconá -
                            Misiones - Argentina</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 position-relative text-center text-md-start">
                    <a href="pages/gastronomia.php">
                        <img src="img/gastronomia.png" class="imgRelativeSide" />
                        <div class="text-absolute-img text-absolute-img-section-lodge"><span id="main-gastronomia">Gastronomía</span><img src="img/arrowRightWhite.svg" /></div>
                    </a>
                </div>
                <div class="col-12 col-md-4 position-relative">
                    <a href="pages/house.php">
                        <img src="img/house.png" class="imgRelativeCenter" />
                        <div class="text-absolute-img text-absolute-img-center-section-lodge"><span>House</span><img src="img/arrowRightWhite.svg" /></div>
                    </a>
                </div>
                <div class="col-12 col-md-4 position-relative">
                    <a href="pages/excursiones.php">
                        <img src="img/excursiones.png" class="imgRelativeSide" />
                        <div class="text-absolute-img text-absolute-img-section-lodge"><span>Actividades</span><img src="img/arrowRightWhite.svg" /></div>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <main class="container-fluid sectionSaltos">
        <section class="container">
            <div class="row">
                <div class="col-12 col-lg-6 text-center text-lg-start order-1 order-lg-0">
                    <img src="img/saltosMocona.png" class="img-saltos">
                </div>
                <div class="col-12 col-lg-6 order-0 order-lg-1 d-flex justify-content-center col-right-section-saltos">
                    <h6 class="h6LaMision">LODGE DE SELVA</h6>
                    <h3 class="h3TitleSection" id="main-saltos-mocona">Saltos de Moconá</h3>
                    <p id="main-p-nos-encontramos-saltos">Nos encontramos a sólo 30 kilometros de los Saltos del Moconá, por lo cual podemos acceder desde
                        nuestro complejo de forma directa y en muy pocos minutos.</p>
                    <p id="main-p-padre-saltos-misiones">El padre de los saltos de Misiones es el llamado por su descubridor “Gran Salto de Moconá” o más
                        popularmente conocido como los Saltos del Moconá. “Moconá”, voz guaraní que tan simplemente
                        grafica la magnificencia del lugar: “Que todo lo traga”.
                    </p>
                    <div class="div-info-section-saltos">
                        <a href="pages/saltos.php" class="link" id="main-masInfo-1">Más información</a>
                        <a href="pages/saltos.php" class="linkArrow"> <img src="img/arrowRightGreen.svg" /></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- VIDEO CONTAINER -->
    <main class="container-fluid section-divider">
        <div class="video-container">
            <video width="100%" height="525px"playsinline autoplay muted loop>
                <source id="mov" src="img/header-video.mov" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="container text-upon-video-container">
            <div class="row">
                <div class="col-12">
                    <span class="h6LaMision">LA MISIÓN MOCONÁ</span>
                    </br>
                    <span class="section-divider-text">Estamos donde queremos estar,</br>
                    rodeados de la siempre apasionante y</br>
                    sorprendente Madre Naturaleza.</span>
                </div>
            </div>
        </div>
    </main>
    <!-- VIDEO CONTAINER -->
    <main class="container-fluid sectionSuites">
        <section class="container">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex justify-content-center col-left-section-suite">
                    <h6 class="h6LaMision">LODGE DE SELVA</h6>
                    <h3 class="h3TitleSection" id="main-suite-la-selva">Suite la selva</h3>
                    <p id="main-p-cuentan-estufas-frigobar">Cuentan con estufas por tiro balanceado con termostato, salamandra a leña, frigobar y una gran
                        vista al rio Uruguay.</p>
                    <p id="main-p-capacidad-habitaciones-categorias">En La Misión Moconá cuenta con una capacidad para 56 huéspedes en 14 habitaciones y se divide en
                        2 categorías:
                        Todas las habitaciones fueron planificadas para dos personas y se pueden adaptar en triples y
                        cuádruples.
                    </p>
                    <div class="div-info-section-saltos">
                        <a href="pages/suites.php" class="link" id="main-masInfo-2">Más información</a>
                        <a href="pages/suites.php" class="linkArrow"> <img src="img/arrowRightGreen.svg" /></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-center text-lg-start">
                    <img src="img/suiteLaSelva.png" class="img-saltos">
                </div>
            </div>
            <div class="row rowSectionLocation">
                <div class="col-12">
                    <h6 class="h6LaMision">LODGE DE SELVA</h6>
                    <h3 class="h3TitleSection h3TitleSectionWithMasInfo" id="main-ubicacion">Ubicación</h3>
                    <a href="pages/contacto.php" class="link" id="main-masInfo-3">Más información</a>
                    <a href="pages/contacto.php" class="linkArrow"> <img src="img/arrowRightGreen.svg" /></a>
                </div>
            </div>
        </section>
    </main>
    <main class="container-fluid section-map">
        <div class="container container-section-map">
            <div class="row colWithMarginTopSectionLocation">
                <div class="col-12 col-map-google">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27804.759245670008!2d-54.03539266987565!3d-27.22922947149769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x50a7bd9283185e8a!2sHotel+La+Mision+Lodge+de+la+Selva!5e1!3m2!1ses-419!2sar!4v1464893306268" width="100%" frameborder="0" style="border:0" allowfullscreen="" class="map-google"></iframe>
                </div>
            </div>
        </div>
    </main>
    <main class="container-fluid section-tripadvisor">
        <section class="container">
            <div class="row justify-content-evenly rowTripadvirsorCertificado">
                <div class="col-6 col-md-2 text-center text-md-start">
                    <div class="posicionCertificadoTripAd">
                        <div id="TA_certificateOfExcellence615" class="TA_certificateOfExcellence">
                            <div id="CDSWIDCOE" class="widCOE cx_brand_refresh "> <a class="widCOEClickWrap" target="_blank" href="https://www.tripadvisor.com.ar/Hotel_Review-g1226747-d2693597-Reviews-La_Mision_Mocona_Lodge_de_Selva-El_Soberbio_Province_of_Misiones_Litoral-m14348.html" onclick="ta.cds.handleTALink(14348,this);return true;"></a>
                                <div class="widCOETitle"> Certificado de Excelencia <span class="widCOEDateText">2018</span>
                                </div>
                                <div class="widCOEReadReviews"> Leer opiniones </div>
                                <div class="widCOELogo"> <a target="_blank" href="https://www.tripadvisor.com.ar/Hotel_Review-g1226747-d2693597-Reviews-La_Mision_Mocona_Lodge_de_Selva-El_Soberbio_Province_of_Misiones_Litoral.html" rel="nofollow"><img src="https://www.tripadvisor.com.ar/img/cdsi/img2/awards/v2/coe-14348-2.svg" alt="Tripadvisor" class="widCOEImg" id="CDSWIDCOELOGO"></a> </div>
                            </div><!--/ #CDSWIDCOE-->
                        </div>
                        <script async="" src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=615&amp;locationId=2693597&amp;lang=es_AR&amp;year=2018&amp;display_version=2" data-loadtrk="" onload="this.loadtrk=true"></script>
                    </div>
                </div>
                <div class="col-6 col-md-2 text-center text-md-start">
                    <div class="posicionCertificadoTripAd">
                        <div id="TA_certificateOfExcellence926" class="TA_certificateOfExcellence">
                            <div id="CDSWIDCOE" class="widCOE cx_brand_refresh "> <a class="widCOEClickWrap" target="_blank" href="https://www.tripadvisor.com.ar/Hotel_Review-g1226747-d2693597-Reviews-La_Mision_Mocona_Lodge_de_Selva-El_Soberbio_Province_of_Misiones_Litoral.html" onclick="ta.cds.handleTALink(14348,this);return true;"></a>
                                <div class="widCOETitle"> Certificado de Excelencia <span class="widCOEDateText">2017</span>
                                </div>
                                <div class="widCOEReadReviews"> Leer opiniones </div>
                                <div class="widCOELogo"> <a target="_blank" href="https://www.tripadvisor.com.ar/Hotel_Review-g1226747-d2693597-Reviews-La_Mision_Mocona_Lodge_de_Selva-El_Soberbio_Province_of_Misiones_Litoral.html" rel="nofollow"><img src="https://www.tripadvisor.com.ar/img/cdsi/img2/awards/v2/coe-14348-2.svg" alt="Tripadvisor" class="widCOEImg" id="CDSWIDCOELOGO"></a> </div>
                            </div><!--/ #CDSWIDCOE-->
                        </div>
                        <script src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=926&amp;locationId=2693597&amp;lang=es_AR&amp;year=2017&amp;display_version=2"></script>
                    </div>
                </div>
                <div class="col-6 col-md-2 text-center text-md-start">
                    <div class="posicionCertificadoTripAd">
                        <div id="TA_certificateOfExcellence167" class="TA_certificateOfExcellence">
                            <div id="CDSWIDCOE" class="widCOE cx_brand_refresh "> <a class="widCOEClickWrap" target="_blank" href="https://www.tripadvisor.com.ar/Hotel_Review-g1226747-d2693597-Reviews-La_Mision_Mocona_Lodge_de_Selva-El_Soberbio_Province_of_Misiones_Litoral.html" onclick="ta.cds.handleTALink(14348,this);return true;"></a>
                                <div class="widCOETitle"> Certificado de Excelencia <span class="widCOEDateText">2016</span>
                                </div>
                                <div class="widCOEReadReviews"> Leer opiniones </div>
                                <div class="widCOELogo"> <a target="_blank" href="https://www.tripadvisor.com.ar/Hotel_Review-g1226747-d2693597-Reviews-La_Mision_Mocona_Lodge_de_Selva-El_Soberbio_Province_of_Misiones_Litoral.html" rel="nofollow"><img src="https://www.tripadvisor.com.ar/img/cdsi/img2/awards/v2/coe-14348-2.svg" alt="Tripadvisor" class="widCOEImg" id="CDSWIDCOELOGO"></a> </div>
                            </div><!--/ #CDSWIDCOE-->
                        </div>
                        <script src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=167&amp;locationId=2693597&amp;lang=es_AR&amp;year=2016&amp;display_version=2"></script>
                    </div>
                </div>
                <div class="col-6 col-md-2 text-center text-md-start">
                    <div class="posicionCertificadoTripAd">
                        <div id="TA_certificateOfExcellence890" class="TA_certificateOfExcellence">
                            <div id="CDSWIDCOE" class="widCOE cx_brand_refresh "> <a class="widCOEClickWrap" target="_blank" href="https://www.tripadvisor.com.ar/Hotel_Review-g1226747-d2693597-Reviews-La_Mision_Mocona_Lodge_de_Selva-El_Soberbio_Province_of_Misiones_Litoral.html" onclick="ta.cds.handleTALink(14348,this);return true;"></a>
                                <div class="widCOETitle"> Certificado de Excelencia <span class="widCOEDateText">2015</span>
                                </div>
                                <div class="widCOEReadReviews"> Leer opiniones </div>
                                <div class="widCOELogo"> <a target="_blank" href="https://www.tripadvisor.com.ar/"><img src="https://www.tripadvisor.com.ar/img/cdsi/img2/awards/v2/coe-14348-2.svg" alt="Tripadvisor" class="widCOEImg" id="CDSWIDCOELOGO"></a> </div>
                            </div><!--/ #CDSWIDCOE-->
                        </div>
                        <script src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=890&amp;locationId=2693597&amp;lang=es_AR&amp;year=2015&amp;display_version=2"></script>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="posicionExcellentTripAd">
                        <div id="TA_excellent351" class="TA_excellent">
                            <div id="CDSWIDEXC" class="widEXC cx_brand_refresh"> <a class="widEXCClickWrap" target="_blank" href="https://www.tripadvisor.com.ar/Hotel_Review-g1226747-d2693597-Reviews-La_Mision_Mocona_Lodge_de_Selva-El_Soberbio_Province_of_Misiones_Litoral.html" onclick="ta.cds.handleTALink(11863,this);return true;"></a>
                                <div class="bravoBox">
                                    <div class="bravoWrapper">
                                        <div class="bravoText"> ¡Bravo! </div>
                                    </div> <img src="https://www.tripadvisor.com.ar/img/cdsi/partner/transparent_pixel-11863-2.gif" height="1" width="1">
                                </div> <br>
                                <div id="CDSWIDEXCLINK" class="widEXCLINK"> <a target="_blank" href="" rel="nofollow">La
                                        Misión Moconá - Lodge de Selva ha sido puntuado como "Excelente" por 137
                                        viajeros</a><br> </div>
                                <div class="widEXCTALOGO"> <a target="_blank" href="https://www.tripadvisor.com.ar/"><img src="https://static.tacdn.com/img2/brand_refresh/Tripadvisor_lockup_horizontal_secondary_registered.svg" alt="Tripadvisor" class="widEXCIMG" id="CDSWIDEXCLOGO"></a> </div>
                            </div><!--/ cdsEXCBadge-->
                        </div>
                        <script src="https://www.jscache.com/wejs?wtype=excellent&amp;uniq=351&amp;locationId=2693597&amp;lang=es_AR&amp;display_version=2"></script>
                    </div>
                </div>
            </div>
            <div class="row rowLogoTripadvisor">
                <div class="col-12 text-center">
                    <div class="posicionCertificadoTripAd">
                        <div id="TA_greenleader783" class="TA_greenleader">
                            <ul id="ZVeU8c12p" class="TA_links V7KztdQYEW">
                                <li id="jaYfFDxQC" class="j8TRXn1vKgy">
                                    <a target="_blank" href="https://www.tripadvisor.com.ar/"><img src="https://www.tripadvisor.com.ar/img/cdsi/langs/awards/GreenLeaders_Logo-17354-2.png" alt="TripAdvisor" class="widGRNImg" id="S_GREEN_LEADER_LOGO"></a>
                                </li>
                            </ul>
                        </div>
                        <script src="https://www.jscache.com/wejs?wtype=greenleader&amp;uniq=783&amp;locationId=2693597&amp;lang=es_AR&amp;border=true&amp;display_version=2"></script>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    $imgLink = "'img/";
    $pagesLink = "'pages/";
    $indexLink = "'";
    $externLink = "'../";
    include 'includes/footer.php';
    footerPrint($imgLink, $pagesLink, $indexLink, $externLink);
    ?>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="formBottomMobile" aria-labelledby="formBottomMobileLabel">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center col-btn-close-form-bottom">
                    <img src="img/closeFormBottom.svg" data-bs-dismiss="offcanvas" type="button" class="btn-close">
                </div>
                <?php
                include 'includes/form.php';
                $extraClass2 = "mobileForm";
                formPrint($extraClass2, $imgLink, $pagesLink);
                ?>
            </div>
        </div>
    </div>
    <div class="sl-overlay-menu" id="sl-overlay-menu"></div>
    <script src="jquery/jquery-3.7.1.min.js"></script>
    <script src="js/multi-language.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/multiLanguageIndex.js"></script>
    <script src="js/scriptsIndex.js"></script>
    <script>
        //funcion para sobreescribir bootstrap para que te muestre en hover la clase show.
        $(document).ready(function() {
        $('.dropdown').hover(function() {
                $(this).addClass('show');
                $(this).find('.dropdown-menu').addClass('show');
            }, function() {
                $(this).removeClass('show');
                $(this).find('.dropdown-menu').removeClass('show');
                });
        });


         $(function() {
             var body = $('header');
             var imageUrls = [
                 'url(img/header1.png)',
                 'url(img/header2.png)',
                 'url(img/header3.png)',
                 'url(img/header4.png)',
                 'url(img/header5.png)',


                 //luis todo: agregar sombreado o al body o a las fotos, agregar sombrado a el logo, agregar fotos faltantes.
             ];

             var current = 0;

             function nextBackground() {
                 body.css('background-image', imageUrls[current]);
                 //el mod no deja que current valga + de la longitud de la lista de imageUrls y mantiene el ciclo.
                 current = (current + 1) % imageUrls.length;
                 }
                 setInterval(nextBackground, 3000);
         });


      
    </script>
</body>

</html>