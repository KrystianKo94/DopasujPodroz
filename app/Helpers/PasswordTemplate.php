<?php

    namespace App\Helpers;
    class PasswordTemplate{
   public static function PasswordTemp($email,$token,$expirationdate){

    

	$template= getenv('app.template.forgetpass');
    $link= base_url().'/userpassview/'.$token;
   
     $template=str_replace('{email}', $email, $template);
    $template=str_replace('{link}', $link, $template);
    $template=str_replace('{expirationdate}', $expirationdate, $template);
   return $template;
    }
}
    ?>