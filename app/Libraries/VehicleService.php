<?php

namespace App\Libraries;

use App\Entities\VehiclesEntity;
use App\Models\VehiclesModel;
use Config\Services;

class VehicleService
{
    private $vehicle;
    private $vehicleEntity;

    public function __construct()
    {
        $this->vehicle = new VehiclesModel();
        $this->vehicleEntity = new VehiclesEntity();
    }

    public function getCarsDriver(){
        log_message("debug", "[VehicleService]::getCarsDriver: Wyszukiwanie samochodów użytkownika o id = ".Services::getIdUser());
        if(Services::userIsDriver()){
            log_message("debug", "[VehicleService]::getCarsDriver: Użytkownik posiada uzupełniony profil kierowcy");
            $this->vehicleEntity= $this->vehicle->getUserVehicles(Services::userIsDriver());
            return $this->vehicleEntity;
        }
        return array();
    }

}