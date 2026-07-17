<?php

function footerPrint($imgLink = "'../img/", $pagesLink = "'", $indexLink = "'../", $externLink = "'../../")
{
    echo "<a href='https://api.whatsapp.com/send/?phone=541134150500&text&type=phone_number&app_absent=0' target='_blank' class='whatsapp-float' aria-label='Escribinos por WhatsApp'>
        <img src={$imgLink}whatsapp.svg' />
    </a>
    <footer class='container-fluid'>
        <div class='container'>
            <div class='row first-row-footer justify-content-center justify-content-lg-start'>
                <div class='col-12 col-lg-2 text-center text-lg-start'>
                    <a href={$indexLink}index.php'><img src= {$imgLink}logo.svg' /></a>
                </div>
                <div class='col-12 col-sm-10 col-md-8 col-lg-4 col-links-footer'>
                    <div class='d-flex justify-content-around desktop'>
                        <div>
                            <ul class='menu-footer'>
                                <li><a href={$pagesLink}suites.php'>Lodge de Selva</a></li>
                                <li><a href={$pagesLink}excursiones.php' id='footer-actividades'>Actividades</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class='menu-footer'>
                                <li><a href={$pagesLink}sustentabilidad.php' id='footer-sustentabilidad'>Sustentabilidad</a></li>
                                <li><a href={$pagesLink}contacto.php' id='footer-contacto'>Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class='container-fluid mobile'>
                        <div class='row'>
                            <div class='col-6 text-center'>
                                <a href={$pagesLink}suites.php'>Lodge de Selva</a>
                            </div>
                            <div class='col-6 text-center'>
                                <a href={$pagesLink}excursiones.php'>Actividades</a>
                            </div>
                        </div>
                        <div class='row'>
                        <div class='col-6 text-center'>
                        <a href={$pagesLink}sustentabilidad.php' id='footer-sustentabilidad-2'>Sustentabilidad</a>
                        </div>
                        <div class='col-6 text-center'>
                            <a href={$pagesLink}contacto.php' id='footer-contacto-2'>Contacto</a>
                        </div>
                    </div>


                    </div>
                </div>
                <div class='col-12 col-lg-5 col-contact-footer'>
                    <div class='divContactSectionElLodge'>
                        <img src={$imgLink}whatsappMain.svg' class='imgContactSectionElLodge' /><span>(011) 15 3415-
                            0500</span>
                    </div>
                    <div class='divContactSectionElLodge'>
                        <img src={$imgLink}mail.svg' class='imgContactSectionElLodge'><span>lamisionlodge@gmail.com</span>
                    </div>
                    <div class='divContactSectionElLodge divLocationSectionElLodge'>
                        <img src={$imgLink}location.svg' class='imgContactSectionElLodge imgLocationSectionElLodge' />
                        <span id='footer-direccion'>Ruta provincial 2km 36.
                            Colonia Paraíso - Saltos del Moconá -
                            Misiones - Argentina</span>
                    </div>
                </div>
                <div class='col-12 col-lg-1 col-languaje-footer text-center text-lg-start'>
                <img src={$imgLink}spanish.svg' class='img-languaje' id='img-languaje' />
                <select id='languages1' class='span-languaje mobile-inline'>
                    <option value='es' selected>Español</option>
                    <option value='en'>English</option>
                </select>
                <select id='languages2' class='span-languaje desktop'>
                    <option value='es' selected>ES</option>
                    <option value='en'>EN</option>
                </select>
                </div>
            </div>
            <div class='row second-row-footer'>
                <div class='col-12 col-sm-10 col-md-8 col-lg-6'>
                    <div class='d-flex justify-content-between div-second-links-footer'>
                        <a href={$externLink}LaMision/index.php' class='link-footer linkPoliticas' id='footer-sitio-web-complejo'>Sitio Web del Complejo</a>
                        <a href={$indexLink}index.php class='link-footer linkTerminos' id='footer-sitio-web-lodge'>Sitio web del Lodge</a>
                        <a href={$externLink}LuxuryGlamping/index.php' class='link-footer linkPrivacidad' id='footer-sitio-web-domos'>Sitio web de Domos</a>
                    </div>
                </div>
                <div class='col-2 col-md-4 col-lg-6 text-end screen-lg-md'>
                    <img src={$imgLink}instagram.svg' />
                </div>
            </div>
        </div>
    </footer>";
}
