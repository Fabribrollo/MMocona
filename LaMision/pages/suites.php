<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suites - La Misión Moconá</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/splide.min.css">
    <link rel="stylesheet" href="../css/simple-lightbox.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/suites.css">
</head>

<body>
    <?php
    include '../includes/header.php';
    $title = "Suites";
    $contenidoHeader = "<p class='p-header' id='header-p-suites-capacidad'>En La Misión Moconá cuenta con una capacidad para 56 huéspedes en 14
    habitaciones y se divide en
    2 categorías:</p>
<p class='p-header' id='header-p-suites-habitaciones-planificadas'>Todas las habitaciones fueron planificadas para dos personas y se pueden adaptar
    en triples y
    cuádruples</p>";
    $rutaImagen = "'../img/suiteHeader.webp'";
    $classFlor = '';
    headerPrint($title, $contenidoHeader, $rutaImagen, $classFlor);
    ?>
    <main class="container-fluid section-suites">
        <section class="container">
            <div class="row">
                <div class="col-12 col-lg-7 col-with-border-bottom">
                    <h3 class="h3TitleSection">Master suite</h3>
                    <p class="p-suites" id="main-p-master-suite-construidas">Construidas con los mejores materiales y diseño arquitectónico, lo cual
                        transforman los 65 m2 totales en un ambiente íntimo y de máximo confort. En los inmensos baños
                        podemos encontrar además de un hidromasaje con una vista panorámica al rio y la selva, una ducha
                        presurizada independiente la cual permite un momento de relax total.</p>
                    <p class="p-suites" id="main-p-master-suite-habitaciones-exclusiva-decoracion">Todas las habitaciones poseen una única y exclusiva decoración distintas entre
                        si, lo cual las hace únicas.</p>
                    <p class="p-suites p-medium" id="main-equipamiento-1">Equipamiento</p>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="item-equipamiento"><img src="../img/camaMatrimonial.svg" class="img-equipamiento"><span class="p-suites" id="main-cama-matrimonial">Cama matrimonial king size (2
                                        metros de ancho)</span></div>
                                <div class="item-equipamiento"><img src="../img/sofaCama.svg" class="img-equipamiento"><span class="p-suites" id="main-sofa-cama">Sofá cama con sommier</span>
                                </div>
                                <div class="item-equipamiento"><img src="../img/servicioLimpieza.svg" class="img-equipamiento"><span class="p-suites" id="main-servicio-mucama">Servicio diario de mucama y ropa
                                        blanca</span></div>
                                <div class="item-equipamiento"><img src="../img/aireAcondicionado.svg" class="img-equipamiento"><span class="p-suites" id="main-aire-acondicionado">Aire acondicionado frío /
                                        calor</span></div>
                                <div class="item-equipamiento"><img src="../img/hidromasaje.svg" class="img-equipamiento"><span class="p-suites" id="main-hidromasajes">Hidromasajes</span></div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="item-equipamiento"><img src="../img/ducha.svg" class="img-equipamiento"><span class="p-suites" id="main-ducha-presurizada">Ducha presurizada</span></div>
                                <div class="item-equipamiento"><img src="../img/cajaSeguridad.svg" class="img-equipamiento"><span class="p-suites" id="main-caja-seguridad">Caja de seguridad</span></div>
                                <div class="item-equipamiento"><img src="../img/vistas.svg" class="img-equipamiento"><span class="p-suites" id="main-vista-selva-rio">Vista a Selva y Río</span></div>
                                <div class="item-equipamiento"><img src="../img/deck.svg" class="img-equipamiento"><span class="p-suites" id="main-deck-15">Deck de 15 m2 con sillones y vista al río</span></div>
                            </div>
                        </div>
                        <div class="row row-img-master-suite desktop767">
                            <div class="col-12">
                                <div class="splide" id="splideMasterSuiteDiv" aria-label="Splide Basic">
                                    <div class="splide__track">
                                        <div class="splide__list" id="splideMasterSuite">
                                            <a class="splide__slide" href="../img/masterSuite.webp">
                                                <img class="img-master-suite" src="../img/masterSuite.webp" loading="lazy">
                                            </a>
                                            <a class="splide__slide" href="../img/masterSuiteDormitorio.webp">
                                                <img class="img-master-suite" src="../img/masterSuiteDormitorio.webp" loading="lazy">
                                            </a>
                                            <a class="splide__slide" href="../img/masterSuiteBano.webp">
                                                <img class="img-master-suite" src="../img/masterSuiteBano.webp" loading="lazy">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-img-master-suite mobile767">
                            <div class="col-12">
                                <div id="carouselMasterSuite" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="../img/masterSuite.webp" class="d-block w-100" alt="..." loading="lazy">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/masterSuiteDormitorio.webp" class="d-block w-100" alt="..." loading="lazy">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/masterSuiteBaño.webp" class="d-block w-100" alt="..." loading="lazy">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselMasterSuite" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselMasterSuite" data-bs-slide="next">
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
                $extraClass = "col-right-section-house";
                formPrint($extraClass);
                ?>
            </div>
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h3 class="h3TitleSection" id="main-suite-selva">Suite de selva</h3>
                    <p class="p-suites" id="main-p-construidas-piedra-madera">Son construidas en piedra y madera autóctonas del lugar, distribuidas en un
                        total de 42 m2, todas tienen vista al rio y a la selva, ofreciendo un ambiente de armonía y
                        descanso. Están equipadas con aire acondicionado frio-calor, ventilador de techo y calefacción
                        regulable con termostato para noches de invierno.</p>
                    <p class="p-suites" id="main-p-estufas-tiro-balanceado">Cuentan con estufas por tiro balanceado con termostato, salamandra a leña y una
                        gran vista al rio Uruguay.</p>
                    <p class="p-suites p-medium" id="main-equipamiento-2">Equipamiento</p>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="item-equipamiento">
                                    <img src="../img/camaMatrimonial.svg" class="img-equipamiento">
                                    <span class="p-suites" id="main-cama-matrimonial-2">Cama matrimonial king size (2
                                        metros de ancho)</span>
                                </div>
                                <div class="item-equipamiento">
                                    <img src="../img/sofaCama.svg" class="img-equipamiento">
                                    <span class="p-suites" id="main-sofa-cama-2">Sofá cama con sommier</span>
                                </div>
                                <div class="item-equipamiento">
                                    <img src="../img/servicioLimpieza.svg" class="img-equipamiento">
                                    <span class="p-suites" id="main-servicio-mucama-2">Servicio diario de mucama y ropa
                                        blanca</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="item-equipamiento">
                                    <img src="../img/aireAcondicionado.svg" class="img-equipamiento">
                                    <span class="p-suites" id="main-aire-acondicionado-2">Aire acondicionado frío /
                                        calor</span>
                                </div>
                                <div class="item-equipamiento">
                                    <img src="../img/vistas.svg" class="img-equipamiento">
                                    <span class="p-suites" id="main-vista-selva-rio-2">Vista a Selva y Río</span>
                                </div>
                            </div>
                        </div>
                        <div class="row row-img-master-suite desktop767">
                            <div class="col-12">
                                <div class="splide" id="splideSuiteSelvaDiv" aria-label="Splide Basic">
                                    <div class="splide__track">
                                        <div class="splide__list" id="splideSuiteSelva">
                                            <a class="splide__slide" href="../img/suiteSelvaFrente.webp">
                                                <img class="img-master-suite" src="../img/suiteSelvaFrente.webp" loading="lazy">
                                            </a>
                                            <a class="splide__slide" href="../img/suiteSelvaCama.webp">
                                                <img class="img-master-suite" src="../img/suiteSelvaCama.webp" loading="lazy">
                                            </a>
                                            <a class="splide__slide" href="../img/suiteSelvaDormitorio.webp">
                                                <img class="img-master-suite" src="../img/suiteSelvaDormitorio.webp" loading="lazy">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-img-master-suite mobile767">
                            <div class="col-12">
                                <div id="carouselSuiteSelva" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="../img/suiteSelvaFrente.webp" class="d-block w-100" alt="..." loading="lazy">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/suiteSelvaCama.webp" class="d-block w-100" alt="..." loading="lazy">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/suiteSelvaDormitorio.webp" class="d-block w-100" alt="..." loading="lazy">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSuiteSelva" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselSuiteSelva" data-bs-slide="next">
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
                    <h3 class="h3TitleSection" id="main-gran-suite">Gran suite</h3>
                    <p class="p-suites" id="main-p-construidas-madera-cedro">Construida totalmente con madera cedro moro y guayubira, con espacios muy
                        amplios y vista privilegiada al rio y a la selva. Con un total de 153 m2 totales es la Gran
                        Suite, tanto en su tamaño como en el máximo confort. Posee 2 inmensos baños con hidromasaje y
                        doble bacha, la cual permite un momento de relax total.</p>
                    <p class="p-suites" id="main-p-amplio-deck">Su amplio deck cubierto permite disfrutar una única y exclusiva vista al parque
                        y el río..</p>
                    <p class="p-suites p-medium" id="main-equipamiento-3">Equipamiento</p>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="item-equipamiento"><img src="../img/camaMatrimonial.svg" class="img-equipamiento"><span class="p-suites" id="main-cama-matrimonial-3">Cama matrimonial king size (2
                                        metros de ancho)</span></div>
                                <div class="item-equipamiento"><img src="../img/sofaCama.svg" class="img-equipamiento"><span class="p-suites" id="main-sofa-cama-3">Sofá cama con sommier</span>
                                </div>
                                <div class="item-equipamiento"><img src="../img/servicioLimpieza.svg" class="img-equipamiento"><span class="p-suites" id="main-servicio-mucama-3">Servicio diario de mucama y ropa
                                        blanca</span></div>
                                <div class="item-equipamiento"><img src="../img/aireAcondicionado.svg" class="img-equipamiento"><span class="p-suites" id="main-aire-acondicionado-3">Aire acondicionado frío /
                                        calor</span></div>
                                <div class="item-equipamiento"><img src="../img/hidromasaje.svg" class="img-equipamiento"><span class="p-suites" id="main-hidromasajes-3">Hidromasajes</span></div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="item-equipamiento"><img src="../img/ducha.svg" class="img-equipamiento"><span class="p-suites" id="main-ducha-presurizada-2">Ducha presurizada</span></div>
                                <div class="item-equipamiento"><img src="../img/cajaSeguridad.svg" class="img-equipamiento"><span class="p-suites" id="main-caja-seguridad-2">Caja de seguridad</span></div>
                                <div class="item-equipamiento"><img src="../img/vistas.svg" class="img-equipamiento"><span class="p-suites" id="main-vista-selva-rio-3">Vista a Selva y Río</span></div>
                                <div class="item-equipamiento"><img src="../img/deck.svg" class="img-equipamiento"><span class="p-suites" id="main-deck-35">Deck de 35m2 con sillones y vista al Río</span></div>
                            </div>
                        </div>
                        <div class="row row-img-master-suite desktop767">
                            <div class="col-12">
                                <div class="splide" id="splideGranSuiteDiv" aria-label="Splide Basic">
                                    <div class="splide__track">
                                        <div class="splide__list" id="splideGranSuite">
                                            <a class="splide__slide" href="../img/granSuiteDeck.webp">
                                                <img class="img-master-suite" src="../img/granSuiteDeck.webp" loading="lazy">
                                            </a>
                                            <a class="splide__slide" href="../img/granSuiteBano.webp">
                                                <img class="img-master-suite" src="../img/granSuiteBano.webp" loading="lazy">
                                            </a>
                                            <a class="splide__slide" href="../img/granSuiteBath.webp">
                                                <img class="img-master-suite" src="../img/granSuiteBath.webp" loading="lazy">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-img-master-suite mobile767">
                            <div class="col-12">
                                <div id="carouselGranSuite" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="../img/granSuiteDeck.webp" class="d-block w-100" alt="..." loading="lazy">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/granSuiteBaño.webp" class="d-block w-100" alt="..." loading="lazy">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/granSuiteBath.webp" class="d-block w-100" alt="..." loading="lazy">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselGranSuite" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselGranSuite" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <main class="container-fluid sectionSuites">
        <section class="container">
            <div class="row rowSectionLocation">
                <div class="col-12">
                    <h6 class="h6LaMision">LA MISIÓN MOCONÁ</h6>
                    <h3 class="h3TitleSection h3TitleSectionWithMasInfo" id="main-ubicacion">Ubicación</h3>
                    <a href="contacto.php" class="link" id="main-masInfo-1">Más información</a>
                    <a href="contacto.php" class="linkArrow"> <img src="../img/arrowDown.svg" /></a>
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
                                <div class="widCOELogo"> <a target="_blank" href="https://www.tripadvisor.com.ar/Hotel_Review-g1226747-d2693597-Reviews-La_Mision_Mocona_Lodge_de_Selva-El_Soberbio_Province_of_Misiones_Litoral.html" rel="nofollow"><img src="https://www.tripadvisor.com.ar/img/cdsi/img2/awards/v2/coe-14348-2.png" alt="Tripadvisor" class="widCOEImg" id="CDSWIDCOELOGO" loading="lazy"></a> </div>
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
                                <div class="widCOELogo"> <a target="_blank" href="https://www.tripadvisor.com.ar/Hotel_Review-g1226747-d2693597-Reviews-La_Mision_Mocona_Lodge_de_Selva-El_Soberbio_Province_of_Misiones_Litoral.html" rel="nofollow"><img src="https://www.tripadvisor.com.ar/img/cdsi/img2/awards/v2/coe-14348-2.png" alt="Tripadvisor" class="widCOEImg" id="CDSWIDCOELOGO" loading="lazy"></a> </div>
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
                                <div class="widCOELogo"> <a target="_blank" href="https://www.tripadvisor.com.ar/Hotel_Review-g1226747-d2693597-Reviews-La_Mision_Mocona_Lodge_de_Selva-El_Soberbio_Province_of_Misiones_Litoral.html" rel="nofollow"><img src="https://www.tripadvisor.com.ar/img/cdsi/img2/awards/v2/coe-14348-2.png" alt="Tripadvisor" class="widCOEImg" id="CDSWIDCOELOGO" loading="lazy"></a> </div>
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
                                <div class="widCOELogo"> <a target="_blank" href="https://www.tripadvisor.com.ar/"><img src="https://www.tripadvisor.com.ar/img/cdsi/img2/awards/v2/coe-14348-2.png" alt="Tripadvisor" class="widCOEImg" id="CDSWIDCOELOGO" loading="lazy"></a> </div>
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
                                    </div> <img src="https://www.tripadvisor.com.ar/img/cdsi/partner/transparent_pixel-11863-2.gif" height="1" width="1" loading="lazy">
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
                                    <a target="_blank" href="https://www.tripadvisor.com.ar/"><img src="https://www.tripadvisor.com.ar/img/cdsi/langs/awards/GreenLeaders_Logo-17354-2.png" alt="TripAdvisor" class="widGRNImg" id="S_GREEN_LEADER_LOGO" loading="lazy"></a>
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
    <script src="../js/multi-language.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="../js/multiLanguagePages.js"></script>
    <script src="../js/splide.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../js/simple-lightbox.js"></script>
    <script src="../js/scriptsPages.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let $splideMasterSuite = new SimpleLightbox('#splideMasterSuite a', {
                showCounter: false,
                scaleImageToRatio: true,
                widthRatio: 0.4
            });
            var splide1 = new Splide('#splideMasterSuiteDiv', {
                perPage: 3,
                perMove: 1,
                gap: '10px',
                pagination: false,
            });
            splide1.mount();

            let $splideSuiteSelva = new SimpleLightbox('#splideSuiteSelva a', {
                showCounter: false,
                scaleImageToRatio: true,
                widthRatio: 0.4
            });
            var splide2 = new Splide('#splideSuiteSelvaDiv', {
                perPage: 3,
                perMove: 1,
                gap: '10px',
                pagination: false,
            });
            splide2.mount();

            let $splideGranSuite = new SimpleLightbox('#splideGranSuite a', {
                showCounter: false,
                scaleImageToRatio: true,
                widthRatio: 0.4
            });
            var splide3 = new Splide('#splideGranSuiteDiv', {
                perPage: 3,
                perMove: 1,
                gap: '10px',
                pagination: false,
            });
            splide3.mount();

        });
    </script>

</body>

</html>