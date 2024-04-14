<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$texto=$_POST['mensaje'];

require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Configuraci贸n del servidor SMTP
    $mail->isSMTP();
                                                
    $mail->Host= 'smtp-mail.outlook.com'; //local
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'r_eduardo_cc@outlook.com';   //local
    $mail->Password   = 'Monos123.';  // local
    $mail->SMTPSecure = 'tls';  //local                          
    $mail->Port       = 587;  //local                 

    // Configuraci贸n del remitente y destinatario
    $mail->setFrom('r_eduardo_cc@outlook.com', 'richard');//local
    $mail->addAddress('rcalderon2.0pro@gmail.com');
    $mail->addAddress($email); 
    
    

    //Content email
    $mail->Subject = 'Contacto a colegaBot';
    $mail->Body    = 'remite: '.$nombre.'<br>'.$texto;

    $mail->send();
    $textoContactList= 'Gracias '.$nombre.' '.$apellido.' Por contactarnos, hemos recibido tu mensaje, responderemos pronto, Ademas recibiras una copia de tu solicitud en la direccion de correo que indicaste en el formulario.';
} catch (Exception $e) {
    $textoContactList= "Error en envio de correo, Intenta nuevamente";
}
require_once('./views/home.php');

?>