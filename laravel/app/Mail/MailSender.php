<?php

namespace App\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class MailSender{
    
    public function mail($to, $subject, $body){ 
        try{ 
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 1; 
        $this->mail->isSMTP(); 
        $this->mail->Host = 'smtp.gmail.com'; 
        $this->mail->SMTPAuth = true; 
        $this->mail->Username = 'gp2022grupob@gmail.com'; 
        $this->mail->Password = 'hmgmtvulmrhzcxrc';
        $this->mail->SMTPSecure  = 'tls';
        $this->mail->SMTPSecure = 'tls'; 
        $this->mail->Port = 587;
        $this->mail->setFrom('gp2022grupob@gmail.com', 'GEA'); 
        $this->mail->isHTML(true);
        $this->mail->addAddress($to); 
        $this->mail->Subject = $subject;
        $this->mail->Body=$body;
        $this->mail->Send();
        echo "Message sent!";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
    }

        



}