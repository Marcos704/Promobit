<?php

namespace app\core\util;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailSend
{
    private $error;

    public function sendEmail($destinatario, $assunto, $corpo)
    {
       
        try{
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host = EMAIL_HOST_GMAIL;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = EMAIL_SMTP_SECURE;    
            $mail->Username = EMAIL_USERNAME;
            $mail->Password = EMAIL_PASSWORD;
            $mail->Port = 587;
            $mail->CharSet = EMAIL_CHARSET;

            $mail->setFrom(EMAIL_USERNAME, EMAIL_SUBTITLE);
            $mail->addAddress($destinatario);

            $mail->isHTML(true);

            $mail->Subject = $assunto;
            $mail->Body    = nl2br($corpo);
            $mail->AltBody = nl2br(strip_tags("Tudo certo"));

            return $mail->send();

        }catch(Exception $e){
            $this->error = $e->errorMessage();
        }
        
    }
    public function getErroEmail()
    {
        return $this->error;
    }
}
