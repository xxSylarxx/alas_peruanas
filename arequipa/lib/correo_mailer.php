<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$mail = new PHPMailer(true);


try {
    $mail->SMTPDebug = false;                     
    $mail->isSMTP();
    $mail->Host       = 'correo.cubicol.com.pe';
    $mail->SMTPAutoTLS = false;
    $mail->SMTPSecure = false;
    $mail->Port       = 25;

    //Recipients
    $mail->setFrom('iepap@cubicol.com.pe', 'COLEGIOS ALAS PERUANAS');
    //$mail->addAddress('iepalasperuanasaqp@iepap.edu.pe', 'COLEGIO ALAS PERUANAS - SEDE AREQUIPA');
	$mail->addAddress('axelmol2018@gmail.com', 'COLEGIO ALAS PERUANAS - SEDE AREQUIPA');
    //$mail->addCC('cc@example.com');
	
    //Content
    $mail->isHTML(true);
    $mail->Subject = 'REGISTRO PARA RECIBIR NOTICIAS REFERENTE A ADMISION Y VACANTES ESCOLARES';
    $mail->Body    = '
            <h4><b>INFORMACIÓN - COLEGIO ALAS PERUANAS - SEDE AREQUIPA</b></h4>
            <p><b>Nombre : </b>' . $_POST['nombre'] . '</p>
            <p><b>Correo : </b>' . $_POST['correo'] . '</p>
            <p><b>Asunto : </b>' . $_POST['asunto'] . '</p>
            <p><b>Mensaje : </b>' . $_POST['mensaje'] . '</p>';

               
if ($mail->Send()) {

    echo "SE ENVIO LA CONSULTA CORRECTAMENTE";

}
} catch (Exception $e) {
   echo 'OCURRIÓ UN ERROR, NO SE PUDO PROCESAR EL ENVÍO';
}

//print_r($_POST);
