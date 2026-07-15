<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excursiones - La Misión Moconá</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/splide.min.css">
    <link rel="stylesheet" href="../css/simple-lightbox.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/suites.css">
</head>

<body>
    <?php
    include '../includes/header.php';
    $title = "Galeria";
    $contenidoHeader = "";
    $rutaImagen = "'../img/header1.png'";
    $classFlor = 'img-absolute-header-excursiones';
    headerPrint($title, $contenidoHeader, $rutaImagen, $classFlor);
    ?>

    <!-- PHOTO GALLERY -->

    <div class="container">
        <!-- ROW FOR MARGIN -->
        <div class="row" style="height: 69px;"></div>
        <div class="row">
            <span class="photo-gallery-section-title">Complejo</span>
        </div>
        <!-- ROW FOR MARGIN -->
        <div class="row" style="height: 49px;"></div>
        <div class="row">
            <div class="col-12">
                <div class="splide" id="splideComplejoGallery" aria-label="Splide Basic">
                    <div class="splide__track">
                        <div class="splide__list" id="splideComplejo">
                            <a class="splide__slide" href="../img/complejo_01.png">
                                <img class="img-master-suite" src="../img/complejo_01.png">
                            </a>
                            <a class="splide__slide" href="../img/complejo_02.png">
                                <img class="img-master-suite" src="../img/complejo_02.png">
                            </a>
                            <a class="splide__slide" href="../img/complejo_03.png">
                                <img class="img-master-suite" src="../img/complejo_03.png">
                            </a>
                            <a class="splide__slide" href="../img/complejo_04.png">
                                <img class="img-master-suite" src="../img/complejo_04.png">
                            </a>
                            <a class="splide__slide" href="../img/complejo_05.png">
                                <img class="img-master-suite" src="../img/complejo_05.png">
                            </a>
                            <a class="splide__slide" href="../img/complejo_06.png">
                                <img class="img-master-suite" src="../img/complejo_06.png">
                            </a>
                            <a class="splide__slide" href="../img/complejo_07.png">
                                <img class="img-master-suite" src="../img/complejo_07.png">
                            </a>
                            <a class="splide__slide" href="../img/complejo_08.png">
                                <img class="img-master-suite" src="../img/complejo_08.png">
                            </a>
                            <a class="splide__slide" href="../img/complejo_09.png">
                                <img class="img-master-suite" src="../img/complejo_09.png">
                            </a>
                            <a class="splide__slide" href="../img/complejo_10.png">
                                <img class="img-master-suite" src="../img/complejo_10.png">
                            </a>
                            <a class="splide__slide" href="../img/complejo_11.png">
                                <img class="img-master-suite" src="../img/complejo_11.png">
                            </a>
                            <a class="splide__slide" href="../img/complejo_12.png">
                                <img class="img-master-suite" src="../img/complejo_12.png">
                            </a>
                            <a class="splide__slide" href="../img/complejo_13.png">
                                <img class="img-master-suite" src="../img/complejo_13.png">
                            </a>
                            <a class="splide__slide" href="../img/complejo_17.png">
                                <img class="img-master-suite" src="../img/complejo_17.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="height: 90px;"></div>
        <div class="row">
            <span class="photo-gallery-section-title">Saltos</span>
        </div>
        <!-- ROW FOR MARGIN -->
        <div class="row" style="height: 49px;"></div>
        <div class="row">
            <div class="col-12">
                <div class="splide" id="splideSuiteDeSelvaGallery" aria-label="Splide Basic">
                    <div class="splide__track">
                        <div class="splide__list" id="splideSuiteDeSelva">
                            <a class="splide__slide" href="../img/saltos_01.png">
                                <img class="img-master-suite" src="../img/saltos_01.png">
                            </a>
                            <a class="splide__slide" href="../img/saltos_02.png">
                                <img class="img-master-suite" src="../img/saltos_02.png">
                            </a>
                            <a class="splide__slide" href="../img/saltos_03.png">
                                <img class="img-master-suite" src="../img/saltos_03.png">
                            </a>
                            <a class="splide__slide" href="../img/saltos_04.png">
                                <img class="img-master-suite" src="../img/saltos_04.png">
                            </a>
                            <a class="splide__slide" href="../img/saltos_05.png">
                                <img class="img-master-suite" src="../img/saltos_05.png">
                            </a>
                            <a class="splide__slide" href="../img/saltos_06.png">
                                <img class="img-master-suite" src="../img/saltos_06.png">
                            </a>
                            <a class="splide__slide" href="../img/saltos_07.png">
                                <img class="img-master-suite" src="../img/saltos_07.png">
                            </a>
                            <a class="splide__slide" href="../img/saltos_08.png">
                                <img class="img-master-suite" src="../img/saltos_08.png">
                            </a>
                            <a class="splide__slide" href="../img/saltos_09.png">
                                <img class="img-master-suite" src="../img/saltos_09.png">
                            </a>
                            <a class="splide__slide" href="../img/saltos_10.png">
                                <img class="img-master-suite" src="../img/saltos_10.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="height: 90px;"></div>
        <div class="row">
            <span class="photo-gallery-section-title">Domos</span>
        </div>
        <!-- ROW FOR MARGIN -->
        <div class="row" style="height: 49px;"></div>
        <div class="row">
            <div class="col-12">
                <div class="splide" id="splideDomos" aria-label="Splide Basic">
                    <div class="splide__track">
                        <div class="splide__list" id="splideDomos">
                            <a class="splide__slide" href="../img/domos_01.png">
                                <img class="img-master-suite" src="../img/domos_01.png">
                            </a>
                            <a class="splide__slide" href="../img/domos_02.png">
                                <img class="img-master-suite" src="../img/domos_02.png">
                            </a>
                            <a class="splide__slide" href="../img/domos_03.png">
                                <img class="img-master-suite" src="../img/domos_03.png">
                            </a>
                            <a class="splide__slide" href="../img/domos_04.png">
                                <img class="img-master-suite" src="../img/domos_04.png">
                            </a>
                            <a class="splide__slide" href="../img/domos_05.png">
                                <img class="img-master-suite" src="../img/domos_05.png">
                            </a>
                            <a class="splide__slide" href="../img/domos_06.png">
                                <img class="img-master-suite" src="../img/domos_06.png">
                            </a>
                            <a class="splide__slide" href="../img/domos_07.png">
                                <img class="img-master-suite" src="../img/domos_07.png">
                            </a>
                            <a class="splide__slide" href="../img/domos_08.png">
                                <img class="img-master-suite" src="../img/domos_08.png">
                            </a>
                            <a class="splide__slide" href="../img/domos_09.png">
                                <img class="img-master-suite" src="../img/domos_09.png">
                            </a>
                            <a class="splide__slide" href="../img/domos_10.png">
                                <img class="img-master-suite" src="../img/domos_10.png">
                            </a>
                            <a class="splide__slide" href="../img/domos_11.png">
                                <img class="img-master-suite" src="../img/domos_11.png">
                            </a>
                            <a class="splide__slide" href="../img/domos_12.png">
                                <img class="img-master-suite" src="../img/domos_12.png">
                            </a>
                            <a class="splide__slide" href="../img/domos_13.png">
                                <img class="img-master-suite" src="../img/domos_13.png">
                            </a>
                            <a class="splide__slide" href="../img/domos_14.png">
                                <img class="img-master-suite" src="../img/domos_14.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <div class="widCOELogo"> <a target="_blank" href="https://www.tripadvisor.com.ar/Hotel_Review-g1226747-d2693597-Reviews-La_Mision_Mocona_Lodge_de_Selva-El_Soberbio_Province_of_Misiones_Litoral.html" rel="nofollow"><img src="https://www.tripadvisor.com.ar/img/cdsi/img2/awards/v2/coe-14348-2.png" alt="Tripadvisor" class="widCOEImg" id="CDSWIDCOELOGO"></a> </div>
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
                                <div class="widCOELogo"> <a target="_blank" href="https://www.tripadvisor.com.ar/Hotel_Review-g1226747-d2693597-Reviews-La_Mision_Mocona_Lodge_de_Selva-El_Soberbio_Province_of_Misiones_Litoral.html" rel="nofollow"><img src="https://www.tripadvisor.com.ar/img/cdsi/img2/awards/v2/coe-14348-2.png" alt="Tripadvisor" class="widCOEImg" id="CDSWIDCOELOGO"></a> </div>
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
                                <div class="widCOELogo"> <a target="_blank" href="https://www.tripadvisor.com.ar/Hotel_Review-g1226747-d2693597-Reviews-La_Mision_Mocona_Lodge_de_Selva-El_Soberbio_Province_of_Misiones_Litoral.html" rel="nofollow"><img src="https://www.tripadvisor.com.ar/img/cdsi/img2/awards/v2/coe-14348-2.png" alt="Tripadvisor" class="widCOEImg" id="CDSWIDCOELOGO"></a> </div>
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
                                <div class="widCOELogo"> <a target="_blank" href="https://www.tripadvisor.com.ar/"><img src="https://www.tripadvisor.com.ar/img/cdsi/img2/awards/v2/coe-14348-2.png" alt="Tripadvisor" class="widCOEImg" id="CDSWIDCOELOGO"></a> </div>
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
            let $splideComplejo = new SimpleLightbox('#splideComplejoGallery a', {
                showCounter: false,
                scaleImageToRatio: true,
                widthRatio: 0.5,

            });
            var splide1 = new Splide('#splideComplejoGallery', {
                perPage: 5,
                perMove: 1,
                gap: '10px',
                pagination: false,
                breakpoints: {
                    640: {
                        perPage: 1,

                    },
                    768: {
                        perPage: 2,

                    },
                    1024: {
                        perPage: 3,

                    },
                    1440: {
                        perPage: 5,

                    },
                },
            });
            splide1.mount();


            let $splideSuiteDeSelva = new SimpleLightbox('#splideSuiteDeSelvaGallery a', {
                showCounter: false,
                scaleImageToRatio: true,
                widthRatio: 0.5,
            });
            var splide2 = new Splide('#splideSuiteDeSelvaGallery', {
                perPage: 5,
                perMove: 1,
                gap: '10px',
                pagination: false,
                breakpoints: {
                640: {
                    perPage: 1,

                },
                768: {
                    perPage: 2,

                },
                1024: {
                    perPage: 3,

                },
                1440: {
                    perPage: 5,

                },
                },
             });
            splide2.mount();

            let $splideDomos = new SimpleLightbox('#splideDomos a', {
                showCounter: false,
                scaleImageToRatio: true,
                widthRatio: 0.5,
            });
            var splide3 = new Splide('#splideDomos', {
                perPage: 5,
                perMove: 1,
                gap: '10px',
                pagination: false,
                breakpoints: {
                640: {
                    perPage: 1,

                },
                768: {
                    perPage: 2,

                },
                1024: {
                    perPage: 3,

                },
                1440: {
                    perPage: 5,

                },
                },
             });
            splide3.mount();



        });
    </script>
</body>

</html>
