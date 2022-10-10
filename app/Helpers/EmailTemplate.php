<?php

    namespace App\Helpers;
    class EmailTemplate{
   public static function EmailTemp($receiver,$expirationtime, $uid_user){

    

	$template= getenv('app.template.register');
    $link= base_url().'/activation/'.$uid_user;
   
     $template=str_replace('{email}', $receiver, $template);
     $template=str_replace('{uuid', $uid_user, $template );
    $template=str_replace('{link}', $link, $template);
    $template=str_replace('{expiration}', $expirationtime, $template);
   return $template;
    }
}
    ?>