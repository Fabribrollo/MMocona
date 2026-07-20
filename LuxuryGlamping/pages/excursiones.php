<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excursiones - Luxury Glamping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/splide.min.css">
    <link rel="stylesheet" href="../css/simple-lightbox.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/suites.css">
</head>

<body>
    <?php
    include '../includes/header.php';
    $title = "Excursiones";
    $contenidoHeader = "";
    $rutaImagen = "'../img/excursionesHeader.png'";
    $classFlor = "img-absolute-header-excursiones";
    headerPrint($title, $contenidoHeader, $rutaImagen, $classFlor);
    ?>
    <main class="container-fluid section-suites">
        <section class="container">
            <div class="row">
                <div class="col-12 col-lg-7 col-with-border-bottom">
                    <h3 class="h3TitleSection" id="main-safari-4x4">Safari 4x4</h3>
                    <p class="p-suites" id="main-p-excursion-4x4">Esta excursión se realiza en vehículos 4x4, partiendo desde La Misión con
                        destino a la reserva de Biosfera Yaboty. Luego de un deslumbrante recorrido por parte de la
                        selva misionera, llegaremos al mirador, punto panorámico, donde luego de contemplar miles de
                        hectáreas de selva virgen y donde es posible divisar variadas especies de flora y fauna. </p>
                    <p class="p-suites" id="main-p-condiciones-climatologicas">Este circuito puede variar de acuerdo a las condiciones naturales del camino y
                        las condiciones climatológicas. (Salto Paraíso y Salto Yerba)</p>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="item-equipamiento"><img src="../img/recorrido.svg" class="img-equipamiento"><span class="p-suites" id="main-recorrido-total-1">Recorrido total: </span><span class="p-bold-excursiones">15 km</span>
                                </div>
                                <div class="item-equipamiento"><img src="../img/duracion.svg" class="img-equipamiento"><span class="p-suites" id="main-duracion-aprox-1">Duración apróx: </span><span class="p-bold-excursiones" id="main-2-horas">2 horas</span>
                                </div>
                                <div class="item-equipamiento"><img src="../img/transporte.svg" class="img-equipamiento"><span class="p-suites" id="main-medio-transporte-1">Medio de Transporte:
                                    </span><span class="p-bold-excursiones" id="main-vehiculo-4x4">Vehículo
                                        4x4</span></div>
                            </div>
                        </div>
                        <div class="row row-img-master-suite desktop767">
                            <div class="col-12">
                                <div class="splide" id="splideSafariDiv" aria-label="Splide Basic">
                                    <div class="splide__track">
                                        <div class="splide__list" id="splideSafari">
                                            <a class="splide__slide" href="../img/safari_01.png">
                                                <img class="img-master-suite" src="../img/safari_01.png">
                                            </a>
                                            <a class="splide__slide" href="../img/safari_02.png">
                                                <img class="img-master-suite" src="../img/safari_02.png">
                                            </a>
                                            <a class="splide__slide" href="../img/safari_03.png">
                                                <img class="img-master-suite" src="../img/safari_03.png">
                                            </a>
                                            <a class="splide__slide" href="../img/safari_04.png">
                                                <img class="img-master-suite" src="../img/safari_04.png">
                                            </a>
                                            <a class="splide__slide" href="../img/safari_05.png">
                                                <img class="img-master-suite" src="../img/safari_05.png">
                                            </a>
                                            <a class="splide__slide" href="../img/safari_06.png">
                                                <img class="img-master-suite" src="../img/safari_06.png">
                                            </a>
                                            <a class="splide__slide" href="../img/safari_07.png">
                                                <img class="img-master-suite" src="../img/safari_07.png">
                                            </a>
                                            <a class="splide__slide" href="../img/safari_08.png">
                                                <img class="img-master-suite" src="../img/safari_08.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-img-master-suite mobile767">
                            <div class="col-12">
                                <div id="carouselSafari" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="../img/safari1.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/safari2.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/safari3.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSafari" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselSafari" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr class="separador-section" />
                    </div>
                </div>
                <?php
                include '../includes/form.php';
                formPrint();
                ?>
            </div>
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h3 class="h3TitleSection" id="main-aventura-floating">Aventura en Floating</h3>
                    <p class="p-suites" id="main-p-travesia-floating">Travesía apta para todo público, iniciamos la aventura desde la costa de La
                        misión y navegamos a favor de la corriente hasta llegar al encuentro del Arroyo Paraíso, donde
                        luego de navegar en sus aguas calmas, desembarcamos en una pequeña playa de arena, disfrutaremos
                        el paisaje de la selva misionera desde el agua, una experiencia única, regresamos al hotel en
                        vehículo.</p>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="item-equipamiento"><img src="../img/recorrido.svg" class="img-equipamiento"><span class="p-suites" id="main-recorrido-total-3">Recorrido total: </span><span class="p-bold-excursiones">12 km</span>
                                </div>
                                <div class="item-equipamiento"><img src="../img/duracion.svg" class="img-equipamiento"><span class="p-suites" id="main-duracion-aprox-3">Duración apróx: </span><span class="p-bold-excursiones" id="main-2-horas-3">2 horas</span>
                                </div>
                                <div class="item-equipamiento"><img src="../img/transporte.svg" class="img-equipamiento"><span class="p-suites" id="main-medio-transporte-3">Medio de Transporte:
                                    </span><span class="p-bold-excursiones" id="main-vehiculo-4x4-gomon">Kayak + Vehículo 4x4</span></div>
                            </div>
                        </div>
                        <div class="row row-img-master-suite desktop767">
                            <div class="col-12">
                                <div class="splide" id="splideFloatingDiv" aria-label="Splide Basic">
                                    <div class="splide__track">
                                        <div class="splide__list" id="splideFloating">
                                            <a class="splide__slide" href="../img/floating_01.png">
                                                <img class="img-master-suite" src="../img/floating_01.png">
                                            </a>
                                            <a class="splide__slide" href="../img/floating_02.png">
                                                <img class="img-master-suite" src="../img/floating_02.png">
                                            </a>
                                            <a class="splide__slide" href="../img/floating_03.png">
                                                <img class="img-master-suite" src="../img/floating_03.png">
                                            </a>
                                            <a class="splide__slide" href="../img/floating_04.png">
                                                <img class="img-master-suite" src="../img/floating_04.png">
                                            </a>
                                            <a class="splide__slide" href="../img/floating_05.png">
                                                <img class="img-master-suite" src="../img/floating_05.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-img-master-suite mobile767">
                            <div class="col-12">
                                <div id="carouselFloating" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="../img/floating1.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/floating2.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/floating3.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselFloating" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselFloating" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr class="separador-section" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12 col-lg-7">
                    <h3 class="h3TitleSection" id="main-cabalgatas">Cabalgatas Guiadas</h3>
                    <p class="p-suites" id="main-p-aventura-selva">Aventura por la Selva, paseo guiado por distintos senderos, donde recorremos la
                        selva de una manera distinta
                    </p>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="item-equipamiento"><img src="../img/recorrido.svg" class="img-equipamiento"><span class="p-suites" id="main-recorrido-total-6">Recorrido total: </span><span class="p-bold-excursiones">5/15 km</span>
                                </div>
                                <div class="item-equipamiento"><img src="../img/duracion.svg" class="img-equipamiento"><span class="p-suites" id="main-duracion-aprox-6">Duración apróx: </span><span class="p-bold-excursiones" id="main-2-4-horas">2/4 horas</span>
                                </div>
                                <div class="item-equipamiento"><img src="../img/transporte.svg" class="img-equipamiento"><span class="p-suites" id="main-medio-transporte-6">Medio de Transporte:
                                    </span><span class="p-bold-excursiones" id="main-caballos">Caballos</span></div>
                            </div>
                        </div>
                        <div class="row row-img-master-suite desktop767">
                            <div class="col-12">
                                <div class="splide" id="splideCabalgataDiv" aria-label="Splide Basic HTML Example">
                                    <div class="splide__track">
                                        <div class="splide__list" id="splideCabalgata">
                                            <a class="splide__slide" href="../img/cabalgatas_01.png">
                                                <img class="img-master-suite" src="../img/cabalgatas_01.png">
                                            </a>
                                            <a class="splide__slide" href="../img/cabalgatas_02.png">
                                                <img class="img-master-suite" src="../img/cabalgatas_02.png">
                                            </a>
                                            <a class="splide__slide" href="../img/cabalgatas_03.png">
                                                <img class="img-master-suite" src="../img/cabalgatas_03.png">
                                            </a>
                                            <a class="splide__slide" href="../img/cabalgatas_04.png">
                                                <img class="img-master-suite" src="../img/cabalgatas_04.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-img-master-suite mobile767">
                            <div class="col-12">
                                <div id="carouselCabalgata" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="../img/cabalgata1.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/cabalgata2.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/masterSuiteDormitorio.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCabalgata" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCabalgata" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr class="separador-section" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h3 class="h3TitleSection" id="main-avistaje-aves">Avistaje de Aves y más</h3>
                    <p class="p-suites" id="main-p-avistaje-binoculares">Avistaje con binoculares en distintos puntos estratégicos del Lodge donde
                        podemos observar distintas especies de aves, incluyendo algunos tucanes.
                    </p>
                    <div class="container-fluid">
                    <div class="row row-img-master-suite desktop767">
                            <div class="col-12">
                                <div class="splide" id="splideAvesDiv" aria-label="Splide Basic HTML Example">
                                    <div class="splide__track">
                                        <div class="splide__list" id="splideAves">
                                            <a class="splide__slide" href="../img/aves1.png">
                                                <img class="img-master-suite" src="../img/aves1.png">
                                            </a>
                                            <a class="splide__slide" href="../img/aves2.png">
                                                <img class="img-master-suite" src="../img/aves2.png">
                                            </a>
                                            <a class="splide__slide" href="../img/aves3.png">
                                                <img class="img-master-suite" src="../img/aves3.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-img-master-suite mobile767">
                            <div class="col-12">
                                <div id="carouselAves" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="../img/aves1.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/aves2.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/aves3.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselAves" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselAves" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr class="separador-section" />
                    </div>
                </div>
            </div>
            <div class="row rowGranSuite">
                <div class="col-12 col-lg-7">
                    <h3 class="h3TitleSection" id="main-senderos-interpretativos">Senderos Interpretativos</h3>
                    <p class="p-suites" id="main-p-hasta-mirador-lodge">Hasta el mirador del Lodge, el punto más alto donde se pueden observar distintas
                        especies de flora y fauna.</p>
                    <div class="container-fluid">
                    <div class="row row-img-master-suite desktop767">
                            <div class="col-12">
                                <div class="splide" id="splideSenderoDiv" aria-label="Splide Basic">
                                    <div class="splide__track">
                                        <div class="splide__list" id="splideSendero">
                                            <a class="splide__slide" href="../img/sendero_01.png">
                                                <img class="img-master-suite" src="../img/sendero_01.png">
                                            </a>
                                            <a class="splide__slide" href="../img/sendero_02.png">
                                                <img class="img-master-suite" src="../img/sendero_02.png">
                                            </a>
                                            <a class="splide__slide" href="../img/sendero_03.png">
                                                <img class="img-master-suite" src="../img/sendero_03.png">
                                            </a>
                                            <a class="splide__slide" href="../img/sendero_04.png">
                                                <img class="img-master-suite" src="../img/sendero_04.png">
                                            </a>
                                            <a class="splide__slide" href="../img/sendero_05.png">
                                                <img class="img-master-suite" src="../img/sendero_05.png">
                                            </a>
                                            <a class="splide__slide" href="../img/sendero_06.png">
                                                <img class="img-master-suite" src="../img/sendero_06.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-img-master-suite mobile767">
                            <div class="col-12">
                                <div id="carouselSenderos" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="../img/sendero1.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/sendero2.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/sendero3.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSenderos" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselSenderos" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr class="separador-section" />
                    </div>
                </div>
            </div>
            <div class="row rowGranSuite">
                <div class="col-12 col-lg-7">
                    <p class="p-suites" id="main-p-operador">Operador responsable MULTIDESTINOS MCR TRAVEL  Leg. N° 10976</p>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <main class="container-fluid sectionSuites">
        <section class="container">
            <div class="row rowSectionLocation">
                <div class="col-12">
                    <h6 class="h6LaMision">LUXURY GLAMPING</h6>
                    <h3 class="h3TitleSection h3TitleSectionWithMasInfo" id="main-ubicacion">Ubicación</h3>
                    <a href="contacto.php" class="link" id="main-masInfo-1">Más información</a>
                    <a href="contacto.php" class="linkArrow"> <img src="../img/arrowRightYellow.svg" /></a>
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
                                    <a target="_blank" href="https://www.tripadvisor.com.ar/"><img src="https://www.tripadvisor.com.ar/img/cdsi/langs/awards/GreenLeaders_Logo-17354-2.svg" alt="TripAdvisor" class="widGRNImg" id="S_GREEN_LEADER_LOGO"></a>
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
    include '../includes/footer.php';
    footerPrint();
    ?>

<div class="sl-overlay-menu" id="sl-overlay-menu"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="../js/splide.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../js/simple-lightbox.js"></script>
    <script src="../js/multi-language.min.js"></script>
    <script src="../js/multiLanguagePages.js"></script>
    <script src="../js/scriptsPages.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let $splideSafari = new SimpleLightbox('#splideSafari a', {
                showCounter: false,
                scaleImageToRatio: true,
                widthRatio: 0.4
            });
            var splide1 = new Splide('#splideSafariDiv', {
                perPage: 3,
                perMove: 1,
                gap: '10px',
                pagination: false,
            });
            splide1.mount();


            let $splideFloating = new SimpleLightbox('#splideFloating a', {
                showCounter: false,
                scaleImageToRatio: true,
                widthRatio: 0.4
            });
            var splide2 = new Splide('#splideFloatingDiv', {
                perPage: 3,
                perMove: 1,
                gap: '10px',
                pagination: false,
            });
            splide2.mount();


            let $splideCabalgata = new SimpleLightbox('#splideCabalgata a', {
                showCounter: false,
                scaleImageToRatio: true,
                widthRatio: 0.4
            });
            var splide3 = new Splide('#splideCabalgataDiv', {
                perPage: 3,
                perMove: 1,
                gap: '10px',
                pagination: false,
            });
            splide3.mount();

            let $splideAves = new SimpleLightbox('#splideAves a', {
                showCounter: false,
                scaleImageToRatio: true,
                widthRatio: 0.4
            });
            var splide4 = new Splide('#splideAvesDiv', {
                perPage: 3,
                perMove: 1,
                gap: '10px',
                pagination: false,
            });
            splide4.mount();

            let $splideSendero = new SimpleLightbox('#splideSendero a', {
                showCounter: false,
                scaleImageToRatio: true,
                widthRatio: 0.4
            });
            var splide5 = new Splide('#splideSenderoDiv', {
                perPage: 3,
                perMove: 1,
                gap: '10px',
                pagination: false,
            });
            splide5.mount();

        });
    </script>
</body>

</html>
