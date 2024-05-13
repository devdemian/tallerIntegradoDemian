<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$aregloContacto[2];//nombre
$aregloContacto[3];//apellido
$claveIngresada;//clave
$aregloContacto[0];//rut usuario
$aregloContacto[6];


require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Configuraci贸n del servidor SMTP
    $mail->isSMTP();
    
    /*CONFIGURACION PARA SMTP LOCAN ALEXIS
    $mail->Host = 'smtp.gmail.com'; //local
    $mail->SMTPAuth   = true;                                   
    $mail->Username = 'drokuas@gmail.com';
    $mail->Password = 'ofgybgurwfrxiktj';
    $mail->SMTPSecure = 'tls';  //local                          
    $mail->Port       = 587;  //local  */               

     //CONFIGURACION PARA SMTP LOCAL DE RICHARD
     $mail->Host = 'smtp-mail.outlook.com'; //local
     $mail->SMTPAuth   = true;                                   
     $mail->Username = 'r_eduardo_cc@outlook.com';
     $mail->Password = 'Monos123.';
     $mail->SMTPSecure = 'tls';  //local                          
     $mail->Port       = 587;  //local

    /* CONFIGURACION PARA SMTP LOCAL DE Demian
     $mail->Host = 'smtp-mail.outlook.com'; //local
     $mail->SMTPAuth   = true;                                   
     $mail->Username = 'r_eduardo_cc@outlook.com';
     $mail->Password = 'Monos123.';
     $mail->SMTPSecure = 'tls';  //local                          
     $mail->Port       = 587;  //local*/

    // Configuraci贸n del remitente y destinatario
    $mail->setFrom('r_eduardo_cc@outlook.com', 'ColegaBot');//local
    $mail->addAddress($aregloContacto[6]);
    /* $mail->addAddress($email); */ 
    //Content email
    $dir = 'C:\xampp\htdocs\public\img\logoColegaBot2.png'; //ruta local richard
    //$dir= 'C:\wamp64\www\htdocs\tallerIntegradoDemian\public\img\bot1.png'; ruta local demian 
    $mail->AddEmbeddedImage($dir, 'imagen_cid', 'imagen.png');
    $mail->isHTML(true);
    $mail->Subject = 'Contacto a colegaBot';
    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Correo ColegaBot</title>
    </head>
    <body>
        <div>
            <table style="max-width: 600px; margin: 0 auto; padding: 20px; font-family: Arial, sans-serif; border-collapse: collapse; width: 100%;">
                <tr>
                    <td style="padding: 20px; text-align: center; background-color: #f8f8f8;">
                        <div>
                        <img src="cid:imagen_cid" alt="Imagen" width="200px">
                        </div>
                        <h2>¡Gracias por Registrarte!</h2>
                        <p>Estimado(a) '.$aregloContacto[2].',</p>
                        <p>Hemos recibido tu mensaje y nos pondremos en contacto contigo lo antes posible.</p>
                        <table border="1" cellpadding="10" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="background-color: #f2f2f2;"><strong>Nombre:</strong></td>
                                <td>'.$aregloContacto[2].'</td>
                            </tr>
                            <tr>
                                <td style="background-color: #f2f2f2;"><strong>Apellido:</strong></td>
                                <td>'.$aregloContacto[3].'</td>
                            </tr>
                            <tr>
                                <td style="background-color: #f2f2f2;"><strong>Usuario:</strong></td>
                                <td>'.$aregloContacto[0].'</td>
                            </tr>
                            <tr>
                                <td style="background-color: #f2f2f2;"><strong>Clave:</strong></td>
                                <td>'.$claveIngresada.'</td>
                            </tr>
                        </table>
                        <p>Atentamente,</p>
                        <p>Tu Colega de Aprendizaje</p>
                    </td>
                </tr>
            </table>
        </div>
    </body>
    </html>';
    $mail->Body    = $body;

    $mail->send();
    $textoContactList= 'Gracias '.$aregloContacto[2].' '.$aregloContacto[3].' Por Registrarte.';
} catch (Exception $e) {
    $textoContactList= "Error en envio de correo, Intenta nuevamente";
}
require('./views/registroExterno.php');
?>
