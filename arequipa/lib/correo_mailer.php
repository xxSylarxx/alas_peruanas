<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once './PHPMailer/PHPMailer.php';

// no toca para nada
$objmail = new PHPMailer();
$objmail->CharSet = 'UTF-8';
$objmail->IsHTML(true);
$objmail->isSMTP();
$objmail->SMTPDebug  = false;
$objmail->SMTPSecure = '';
$objmail->Host = 'correo.cubicol.com.pe';
$objmail->SMTPAuth = false;
$objmail->Port = 25;

// modificar
$objmail->From = 'iepap@cubicol.com.pe';
$objmail->FromName = 'PAG. WEB';
$objmail->AddAddress('iepalasperuanasaqp@iepap.edu.pe', 'COLEGIO ALAS PERUANAS - SEDE AREQUIPA');
//$objmail->AddCC('axelmol2018@gmail.com', 'EJEMPLO');
$objmail->Subject = 'REGISTRO PARA RECIBIR NOTICIAS REFERENTE A ADMISIÓN Y VACANTES ESCOLARES';
$objmail->Body = '
            <h4><b>INFORMACIÓN - COLEGIO ALAS PERUANAS - SEDE AREQUIPA</b></h4>
            <p><b>Nombre : </b>' . $_POST['nombre'] . '</p>
            <p><b>Correo : </b>' . $_POST['correo'] . '</p>
            <p><b>Asunto : </b>' . $_POST['asunto'] . '</p>
            <p><b>Mensaje : </b>' . $_POST['mensaje'] . '</p>';
            
if ($objmail->Send()) {

    echo "SE ENVIO LA CONSULTA CORRECTAMENTE";

} else {
    echo 'OCURRIÓ UN ERROR, NO SE PUDO PROCESAR EL ENVÍO';
}

//print_r($_POST);
