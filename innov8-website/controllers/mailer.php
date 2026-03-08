<?php
require_once('../vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$env = Dotenv\Dotenv::createImmutable('../');
$env->load();

class Mailer {
    public function sendEmail($destinatario, $subject, $mailHTML, $mailAlt, $attatchment = null) {
        try {
            $mail = new PHPMailer(true);
            //Server settings
            $mail->isSMTP();
            $mail->Host       = $_ENV['MAIL_HOST'];
            $mail->SMTPAuth   = true; //Enable SMTP authentication
            $mail->Port       = $_ENV['MAIL_PORT'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Comentarlo para hacer pruebas con SMTP4DEV
            $mail->Username   = $_ENV['MAIL_USERNAME'];
            $mail->Password   = $_ENV['MAIL_PASSWORD'];

            // $mail->SMTPOptions = array(
            //     'ssl' => array(
            //         'verify_peer' => false,
            //         'verify_peer_name' => false,
            //         'allow_self_signed' => true
            //     )
            // );
            
            $mail->isHTML(true);
            $mail->CharSet = 'utf-8';
        
            //Recipients
            $mail->setFrom($_ENV['MAIL_USERNAME'], 'INNOV8 CREATIONS WEBSITE');
            $mail->addAddress($_ENV['MAIL_RECEIVER_MAIL'], $destinatario);
            $mail->addAddress('soporte@jaimeruizdev.com', 'Jaime Ruiz Dev'); //Add a recipient for testing purposes
            $mail->Subject = $subject;
    
            $mail->Body    = $mailHTML;
            $mail->AltBody = $mailAlt;

            $mail->send();
    
            $data = array('success' => true, 'message' => 'Correo enviado con éxito');
            return $data;
        } catch (Exception $e) {
            $data = array('success' => false, 'message' => "El mensaje no pudo ser enviado. Error de correo: {$mail->ErrorInfo}");
            return $data;
        }
    }
}