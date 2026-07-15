<?php


function formPrint($extraClass = "", $imgLink = "'../img/", $pagesLink = "'")
{
    echo "<div class='col-12 col-lg-5 desktop colRightSectionElLodge $extraClass'>
    <form action='https://www.hoteladmin.com.ar/system/responsive/plugged-apps/book-vertical.php?hotelID=334&action=query_externo' target='_blank'  method='post' class='form-reserva container-fluid'>
        <div class='row'>
            <div class='col-6 col-form-group-form-fechas'>
                <div class='form-group form-group-fecha-entrada'>
                    <label for='fecha-entrada' class='label-fechas'>CHECK IN</label>
                    <img src={$imgLink}datePicker.svg' class='img-date'>
                    <input name='f_in' class='form-control input-fecha' id='fecha-entrada' type='date'>
                </div> 
            </div>
            <div class='col-6 col-form-group-form-fechas'>
            <div class='form-group form-group-fecha-salida form-group-fecha-salida-reserva-ahora'>
                <label for='fecha-salida' class='label-fechas label-check-out-reserva-ahora'>CHECK OUT</label>
                <input name='f_fin' type='date' class='form-control input-fecha input-fecha-salida' id='fecha-salida'>
            </div>
            </div>
            <div class='form-group form-group-huespedes col-12'>
                <label for='select-huespedes' class='label-huespedes' id='label-huespedes'>PASAJEROS</label>
                <img src= {$imgLink}huesped.svg' class='img-date'>
                <select name='pasajeros' class='form-control select-huespedes' id='select-huespedes'>
                    <option id='select-option-1-huesped'>1 pasajero</option>
                    <option id='select-option-2-huespedes'>2 pasajeros</option>
                    <option id='select-option-3-huespedes'>3 pasajeros</option>
                </select>
            </div>
            <button type='submit' value ='buscar' href= {$pagesLink}reservaAhora.php' class='btn btn-primary btn-form-reservar' id='form-btn-reservar'>Reservar</button>
    </form>
</div>";
}
