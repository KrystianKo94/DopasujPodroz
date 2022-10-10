<?php

namespace App\Libraries;

use App\Entities\ReservationEntity;
use App\Models\Advertisement;
use App\Models\ReservationModel;
use CodeIgniter\HTTP\Request;
use Config\Services;

class ReservationService
{
    public function __construct()
    {
        $this->advertisement = new Advertisement();
        $this->reservation = new ReservationModel();
    }

    private $advertisement;
    private $reservation;
    public function createReservation(Request $request){
        log_message("debug", "[ReservationService]::createReservation: Tworzenie nowej rezerwacji");
        $reservationEntity = new ReservationEntity();
        $idUser = Services::getIdUser();
        $idAdvertisement=$request->getJsonVar('idAdvertisement');
        $reservationSeats=$request->getJsonVar('seats');
        $reservationLuggage=$request->getJsonVar('luggage');
        $start=$this->advertisement->getDate($idAdvertisement);
        $end=$this->advertisement->getEndDate($idAdvertisement);
        $seats=$this->advertisement->getFreeSeats($idAdvertisement);
        $luggage=$this->advertisement->getLuggage($idAdvertisement);
        if($this->userIsLogged($idUser)) {
            log_message("info","[ReservationService]::createReservation: Wykonywanie rezerwacji - brak uwierzytelnienia");
            $url = base_url()."/login?callback=".base_url().'/advertisement/'
                .$request->getJsonVar('idAdvertisement').'/detail?count_place='
                .$request->getJsonVar('seats').'&luggage='.$request->getJsonVar('luggage')
                .'&action=reservation';
            return array('alert_type'=>'info','alert_info' => 'Po kliknięciu Ok przejdziesz do strony logowania', 'url' =>$url);
        }
        else{
            if($this->reservatinCreateByUser($idAdvertisement,$idUser)){
                log_message("info","[ReservationService]::createReservation: Wykonywanie rezerwacji - tworzenie rezerwacji");
                $reservationEntity->setIdAdvertisement($idAdvertisement);
                $reservationEntity->setIdUser($idUser);
                $reservationEntity->setCapity($reservationSeats);
                $reservationEntity->setCapityOfTrunk($reservationLuggage);
                $reservationEntity->setIsActive(0);
                $reservationEntity->setStateIsFull(0);
                $reservationEntity->setStartDate($start);
                $reservationEntity->setEndDate($end);
                $this->reservation->insert($reservationEntity);
                log_message("info","[ReservationService]::createReservation: Wykonywanie rezerwacji - poprawnie utworzono rezerwacje");
                return array('alert_type'=>'success','alert_info' => 'Poprawnie dodano ogloszenie', 'token' =>csrf_hash());
            }
            else{
                log_message("debug","[ReservationService]::createReservation: Wykonywanie rezerwacji - uzytkownik wykonał już rezerwacje");
                return array('alert_type'=>'success','alert_info' => 'Do podanego zgłoszenia istnieje już Twoja rezerwacja', 'token' =>csrf_hash());
            }
        }
    }

    private function userIsLogged($idUser){
        return !isset($idUser);
    }

    private function reservatinCreateByUser($idAdvertisement,$idUser){
       return !$this->reservation->findAdvertUser($idAdvertisement,$idUser);
    }
}