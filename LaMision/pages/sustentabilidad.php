<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustentabilidad - La Misión Moconá</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/splide.min.css">
    <link rel="stylesheet" href="../css/simple-lightbox.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/suites.css">
</head>

<body>
    <?php
    include '../includes/header.php';
    $title = "Sustentabilidad";
    $contenidoHeader = "<p class='p-header p-header-first' id='header-p-gestion-sustentable'>La Mision Mocona demuestra una gestión sustentable, respetuosa con el medio ambiente y socialmente responsable con la comunidad y con el destino turístico en el que desarrollan su actividad.</p>
        <p class='p-header desktop767 p-header-second' id='header-p-innovacion-aplicada'>Innovación aplicada que integran los principios de sustentabilidad en la cadena de valor de la hotelería. innovación aplicada que integran los principios de sustentabilidad en la cadena de valor de la hotelería.</p>
        <div class='div-ver-mas mobile767'><p class='p-verMas mobile767' id='ver-mas'>Ver más</p><img class='img-arrow-header mobile767' id='arrow-ver-mas' src='../img/arrowDownPink.svg'>
    </div>";
        $rutaImagen = "'../img/sustentabilidad-header.webp'";
    $classFlor = '';
    headerPrint($title, $contenidoHeader, $rutaImagen, $classFlor);
    ?>
    <main class="container-fluid section-suites">
        <section class="container">
            <div class="row">
                <div class="col-12 col-lg-7 col-with-border-bottom">
                    <p class="p-suites" id="main-p-hoteleria-turismo-sustentables">Hotelería y un turismo más sustentables, aportando criterios para la eficiencia en el uso de los recursos, minimizar los impactos negativos y maximizar los impactos positivos sobre su entorno social, cultural y ambiental.
                    </p>
                    <hr class="separador-section" />
                    <h3 class="h3TitleSection" id="main-conservacion-entorno">Conservación y mejora del entorno</h3>
                    <p class="p-suites" id="main-p-nos-enfocamos-en">Nos enfocamos en:</p>
                    <p class="p-suites list-sustentabilidad" id="main-p-integracion-entorno">- Integración en el entorno</p>
                    <p class="p-suites list-sustentabilidad" id="main-p-conservacion-patrimonio">- Conservación del patrimonio cultural del destino</p>
                    <p class="p-suites" id="main-p-conservacion-biodiversidad">- Conservación de la biodiversidad y el paisaje</p>
                    <hr class="separador-section" />
                </div>
                <?php
                include '../includes/form.php';
                $extraClass = "col-right-section-house";
                formPrint($extraClass);
                ?>
            </div>
            <div class="row">
                <div class="col-12 col-lg-7 col-with-border-bottom">
                    <h3 class="h3TitleSection" id="main-gestion-medioambiental">Gestión Medioambiental</h3>
                    <p class="p-suites" id="main-p-nos-enfocamos-en-2">Nos enfocamos en:</p>
                    <p class="p-suites list-sustentabilidad" id="main-p-gestion-energia">- Gestión de la energía</p>
                    <p class="p-suites list-sustentabilidad" id="main-p-gestion-agua">- Gestión del agua</p>
                    <p class="p-suites list-sustentabilidad" id="main-p-prevencion-contaminacion">- Prevención de la contaminación</p>
                    <p class="p-suites list-sustentabilidad" id="main-p-gestion-residuos">- Gestión de los residuos</p>
                    <p class="p-suites" id="main-p-proteccion-suelo">- Protección del suelo</p>
                    <hr class="separador-section" />
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-7 col-with-border-bottom">
                    <h3 class="h3TitleSection" id="main-desarrollo-sustentable">Desarrollo Sustentable del Destino</h3>
                    <p class="p-suites" id="main-p-nos-enfocamos-en-3">Nos enfocamos en:</p>
                    <p class="p-suites list-sustentabilidad" id="main-p-dialogo-comunidad">- Diálogo con la comunidad local</p>
                    <p class="p-suites list-sustentabilidad" id="main-p-participacion-programas-desarrollo">- Participación en programas de desarrollo local</p>
                    <p class="p-suites" id="main-p-fomento-buenas-practicas">- Fomento de buenas prácticas y apoyo a los emprendedores locales</p>
                    <hr class="separador-section" />
                </div>
            </div>
            <div class="row last-row-sustentabilidad">
                <div class="col-12 col-lg-7 col-with-border-bottom">
                    <h3 class="h3TitleSection" id="main-responsabilidad-social">Responsabilidad Social</h3>
                    <p class="p-suites" id="main-p-nos-enfocamos-en-4">Nos enfocamos en:</p>
                    <p class="p-suites list-sustentabilidad" id="main-p-acciones-responsables">- Acciones responsables con la comunidad local</p>
                    <p class="p-suites" id="main-p-gestion-proteccion-recurso">- Gestión y Protección del recurso humano</p>
                    <div class="container-fluid">
                        <div class="row row-img-master-suite desktop767">
                            <div class="col-12">
                                <div class="splide" id="splideSustentabilidadDiv" aria-label="Splide Sustentabilidad">
                                    <div class="splide__track">
                                        <div class="splide__list" id="splideSustentabilidad">
                                            <a class="splide__slide" href="../img/sustentabilidad1.webp">
                                                <img class="img-master-suite" src="../img/sustentabilidad1.webp" loading="lazy">
                                            </a>
                                            <a class="splide__slide" href="../img/sustentabilidad2.webp">
                                                <img class="img-master-suite" src="../img/sustentabilidad2.webp" loading="lazy">
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
                                            <img src="../img/sustentabilidad1.webp" class="d-block w-100" alt="..." loading="lazy">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../img/sustentabilidad2.webp" class="d-block w-100" alt="..." loading="lazy">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="../js/splide.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../js/simple-lightbox.js"></script>
    <script src="../js/multi-language.min.js"></script>
    <script src="../js/multiLanguagePages.js"></script>
    <script src="../js/scriptsPages.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let $splideDomosSelva = new SimpleLightbox('#splideSustentabilidad a', {
                showCounter: false,
                scaleImageToRatio: true,
                widthRatio: 0.4
            });
            var splide2 = new Splide('#splideSustentabilidadDiv', {
                perPage: 2,
                perMove: 1,
                gap: '10px',
                pagination: false,
            });
            splide2.mount();

        });
    </script>
</body>

</html>