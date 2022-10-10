<?php


namespace App\Libraries;

use App\Models\Advertisement;
use App\Models\DriverModel;


class UpdateTripDetailsDataService {
    
    public static function updateDetailsDataTrip($idUser,$coast,$idAdvertisement){
        $advertisementModel= new Advertisement();
        $DriverModel=new DriverModel();
        $idDriver=$DriverModel->getDriverId($idUser);
        $idCar = $this->request->getJsonVar('idCar');
        if($advertisementModel->idCarEqualToIdDriver($idCar,$idDriver)){
            $data = [
                'luggage_size' => $this->request->getJsonVar('luggage'),
                'seats_amount' => $this->request->getJsonVar('seats'),
                'trip_cost' =>  $coast,
                'id_vehicle' => $idCar
            ];
            $advertisementModel->updateAdvertisementDetails($idAdvertisement,$data);
            return json_encode(array('alert_type'=> 'success', 'text' =>"Poprawnie zaktualizowano dane",'token' => csrf_hash()));
        }
        else{
            return json_encode(array('alert_type'=> 'error', 'text' =>"Brak uprawnień do wykonania operacji",'token' => csrf_hash()));
        }
    }
}
