<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class MessageController extends BaseController
{
	public function index()
	{
			echo view('admin/message');
	}
        
        public function addMessage(){
            if(Services::sessionIsSet()){
                Services::createMessage($this->request->getJsonVar('idAdvertisement'),
                    $this->request->getJsonVar('message'));
                return json_encode(array('alert_type'=>'success','alert_info' => 'Poprawnie wysłano wiadomość', 'token' =>csrf_hash() ));

            }else{
                log_message("info","[ReservationService]::createReservation: Wykonywanie rezerwacji - brak uwierzytelnienia");
                log_message("debug",$this->request->getJsonVar('message'));
                $url = base_url()."/login?callback=".base_url().'/advertisement/'
                    .$this->request->getJsonVar('idAdvertisement').'/detail?message='
                    .$this->request->getJsonVar('message').'&action=message';
                return json_encode(array('alert_type'=>'info','alert_info' => 'Po kliknięciu Ok przejdziesz do strony logowania', 'url' =>$url));
            }
        }
        
        public function showGenerallyMessages(){
            
        }
        
         public function showSpecificMessages(){
            
        }
}
