<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva ahora - La Misión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/suites.css">
</head>

<body>
    <?php
    include '../includes/header.php';
    $title = "";
    $contenidoHeader = "";
    $rutaImagen = "";
    $classFlor = '';
    $isReservaAhora = true;
    headerPrint($title, $contenidoHeader, $rutaImagen, $classFlor, $isReservaAhora);
    ?>
    <main class="container-fluid sectionReservaAhora">
        <section class="container">
            <div class="row justify-content-center">
                <div class='col-12 col-lg-11 col-form-reserva-ahora'>
                    <form action="https://www.hoteladmin.com.ar/system/responsive/plugged-apps/book-vertical.php?hotelID=334&action=query_externo" target="_blank"  method="post" class='form-reserva container-fluid form-reserva-ahora'>
                        <div class='row justify-content-evenly align-items-center'>
                            <div class="col-12 col-md-5 col-fechas-reserva-ahora">
                                <div class="container-fluid container-form-reservar-ahora-fechas">
                                    <div class="row">
                                        <div class="col-6 col-form-group-form-fechas">
                                            <div class='form-group form-group-fecha-entrada'>
                                                <label for='fecha-entrada' class='label-fechas'>CHECK IN</label>
                                                <img src='../img/datePicker.svg' class='img-date'>
                                                <input name="f_in" class='form-control input-fecha' id='fecha-entrada' type='date'>
                                            </div>
                                        </div>
                                        <div class='col-6 col-form-group-form-fechas'>
                                            <div class="form-group form-group-fecha-salida form-group-fecha-salida-reserva-ahora">
                                                <label for='fecha-salida' class='label-fechas label-check-out-reserva-ahora'>CHECK OUT</label>
                                                <input name="f_fin" type='date' class='form-control input-fecha input-fecha-salida'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='form-group form-group-huespedes col-12 col-md-4'>
                                <label for='select-huespedes' class='label-huespedes' id='label-huespedes'>PASAJEROS</label>
                                <img src='../img/huesped.svg' class='img-date'>
                                <select name="pasajeros" class='form-control select-huespedes' id='select-huespedes'>
                                    <option id='select-option-1-huesped'>1 pasajero</option>
                                    <option id='select-option-2-huespedes'>2 pasajeros</option>
                                    <option id='select-option-3-huespedes'>3 pasajeros</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-2 col-btn-buscar">
                                <button value ='buscar' type='submit' class='btn btn-primary btn-form-reservar btn-form-buscar'>Buscar</button>
                            </div>
                        </div>
                    </form>
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
    <script src="../js/scriptsPages.js"></script>
</body>

</html>