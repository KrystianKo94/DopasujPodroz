<?php
namespace App\Helpers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Helpers\EmailTemplate;


class PasswordEmail{
   

  public static function SendPasswordEmail($email, $info)
{
    
 $mail= new PHPMailer(TRUE);


try {
    
     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
     $mail->isSMTP();                                            
     $mail->Host       = getenv('app.email.Host');                     
     $mail->SMTPAuth   = true;                                   
     $mail->Username   = getenv('app.email.Username');                    
     $mail->Password   = getenv('app.email.Password');                              
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
     $mail->Port       = getenv('app.email.Port');                                   

    
    $mail->setFrom(getenv('app.email.setFrom()'));
    $mail->addAddress($email, $email);      
  

    
    $mail->isHTML(true);                                 
    $mail->Subject = 'Zapomnialem hasla';                     
    $mail->Body    = $info;
    $mail->AltBody = $info;

    $mail->send();
    echo 'Wiadomosc zostala wyslana';
} catch (Exception $e) {
    echo "Wiadomosc nie moze zostac wyslana  {$mail->ErrorInfo}";
}
}
}
