<?php

namespace App\Libraries;

use App\Entities\DriverEntity;
use App\Models\DriverModel;
use Config\Services;

class DriverService
{
    private $driverModel;
    private $driverEntity;
    public function __construct(){
        $this->driverModel = new DriverModel();
        $this->driverEntity = new DriverEntity();
    }
    public function getDriverData(){
        log_message("debug", "[DriverService]::getDriverData: Wyszukiwanie danych o kierowcy na podstawie id użytkownika");
        $idUser = Services::getIdUser();
        $this->driverEntity = $this->driverModel->getDriverEntity($idUser);
        if(!is_null($this->driverEntity)){
            log_message("debug", "[DriverService]::getDriverData: Wyszukiwanie danych o kierowcy - użytkownik uzupełnił profil kierowcy");
            return array(
                'drivernumber'=>$this->driverEntity->getDriverNumber(),
                'description'=>$this->driverEntity->getDriverDescription
            );
        }
        else{
            log_message("debug", "[DriverService]::getDriverData: Wyszukiwanie danych o kierowcy - użytkownik nie uzupełnił profil kierowcy");
            return array(
                'drivernumber'=> "",
                'description'=> ""
            );
        }
    }

    public function createDriver($driverNumber,$description){
        log_message("debug", "[DriverService]::createDriver: Tworzenie nowego kierowcy");
        $this->driverEntity->setIdUser(Services::getIdUser());
        $this->driverEntity->setDriverNumber($driverNumber);
        $this->driverEntity->setDriverDescription($description);
        if($this->driverIsCreate()){
            log_message("debug", "[DriverService]::createDriver: Tworzenie nowego kierowcy - aktualizowanie danych kierowcy");
            $this->driverEntity->setDriverId(Services::getIdDriver());
        }
        else{
            log_message("debug", "[DriverService]::createDriver: Tworzenie nowego kierowcy - tworzenie nowego kierowcy");
            log_message("debug", "[DriverService]::createDriver: Tworzenie nowego kierowcy - aktualizowanie danych sesji id_driver = ".$this->driverModel->getInsertID());
            $this->driverEntity->setDriverId($this->driverModel->getInsertID());
        }
        $retruend= $this->driverModel->save($this->driverEntity);
        if($retruend){
            log_message("debug", "[DriverService]::createDriver: Tworzenie nowego kierowcy - aktualizowanie danych sesji id_driver = ".$this->driverModel->getInsertID());
            Services::setCustomDataInSession("id_driver",$this->driverModel->getInsertID());
            return true;
        }
        return false;
    }

    private function driverIsCreate() : bool{
        return !is_null(Services::getIdDriver());
    }



}