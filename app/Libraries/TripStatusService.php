<?php



namespace App\Libraries;

use App\Models\Advertisement;


class TripStatusService {
   
    public static function switchStatus($status,$idTravel){
       $adv=new Advertisement();
       $advertisementStatus=$adv->getStatus($idTravel);
       log_message('debug', $idTravel);
       log_message('debug',$advertisementStatus);
       switch($status){
           case 0:
            if($advertisementStatus!='CLOSE'){
            $adv->where('id_advertisement',$idTravel)->set(['state'=>'ACTIVE','is_active'=>true])->update();
            $info="Poprawnie zmieniono status ogloszenia";
            }
            else {
                $info="Status ogloszenia wygasl";
            }
           break;

           case 1:
           if($advertisementStatus!='CLOSE'){
            $adv->where('id_advertisement',$idTravel)->set(['state'=>'IN_PROGRESS'])->update();
            $info="Poprawnie zmieniono status ogloszenia";
            }
            else {
                $info="Status ogloszenia wygasl";
            }

           case 2:
           $adv->where('id_advertisement',$idTravel)->set(['state'=>'IN_CLOSE'])->update();
           $info="Poprawnie zmieniono status ogloszenia";
        }
           return json_encode(array('alert_type'=>'success','alert_info' => $info, 'token' => csrf_hash()));
   }
}
