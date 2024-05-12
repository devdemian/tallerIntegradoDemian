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
                                                
    /* CONFIGURACION PARA SMTP LOCAL DE ALEXIS
    
    $mail->Host = 'smtp.gmail.com'; //local
    $mail->SMTPAuth   = true;                                   
    $mail->Username = 'drokuas@gmail.com';
    $mail->Password = 'ofgybgurwfrxiktj';
    $mail->SMTPSecure = 'tls';  //local                          
    $mail->Port       = 587;  //local   */    
    
    /* CONFIGURACION PARA SMTP LOCAL DE RICHARD*/
    $mail->Host = 'smtp-mail.outlook.com'; //local
    $mail->SMTPAuth   = true;                                   
    $mail->Username = 'r_eduardo_cc@outlook.com';
    $mail->Password = 'Monos123.';
    $mail->SMTPSecure = 'tls';  //local                          
    $mail->Port       = 587;  //local

    
    // Configuraci贸n del remitente y destinatario
    $mail->setFrom('r_eduardo_cc@outlook.com', 'ColegaBot');//local
    $mail->addAddress($email);
    /* $mail->addAddress($email); */ 
    //Content email
    $dir = 'C:\xampp\htdocs\public\img\logoColegaBot2.png';
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
                        <h2>¡Gracias por ponerte en contacto con nosotros!</h2>
                        <p>Estimado(a) '.$nombre.',</p>
                        <p>Hemos recibido tu mensaje y nos pondremos en contacto contigo lo antes posible.</p>
                        <table border="1" cellpadding="10" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="background-color: #f2f2f2;"><strong>Nombre:</strong></td>
                                <td>'.$nombre.'</td>
                            </tr>
                            <tr>
                                <td style="background-color: #f2f2f2;"><strong>Apellido:</strong></td>
                                <td>'.$apellido.'</td>
                            </tr>
                            <tr>
                                <td style="background-color: #f2f2f2;"><strong>Email:</strong></td>
                                <td>'.$email.'</td>
                            </tr>
                            <tr>
                                <td style="background-color: #f2f2f2;"><strong>Mensaje:</strong></td>
                                <td>'.$texto.'</td>
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
    $textoContactList= 'Gracias '.$nombre.' '.$apellido.' Por contactarnos, hemos recibido tu mensaje, responderemos pronto, Ademas recibiras una copia de tu solicitud en la direccion de correo que indicaste en el formulario.';
} catch (Exception $e) {
    $textoContactList= "Error en envio de correo, Intenta nuevamente";
}
require_once('./views/home.php');

?>
