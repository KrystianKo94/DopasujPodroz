<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\VehiclesEntity;
use App\Models\DriverModel;

class VehiclesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'vehicle';
    protected $primaryKey       = 'id_vehicle';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'App\Entities\VehiclesEntity';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['brand','model','type','capacity','power','year_of_production','capacity_of_trunk','is_active', 'id_driver','id_vehicle'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'date_create';
    protected $updatedField  = 'date_modify';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function createDriverCar($brand,$model,$type,$capacity,$power,$active,$ProductionYear,$TrunkCapacity,$id_user){
        $driver=new DriverModel();
        $userEntity=$driver->searchDriverByIdUser($id_user);
        $userVehiclesEntity= new VehiclesEntity();
        $userVehiclesEntity->setIdDriver($driver);
        $userVehiclesEntity->setCarBrand($brand);
        $userVehiclesEntity->setCarModel($model);
        $userVehiclesEntity->setCarType($type);
        $userVehiclesEntity->setCarCapacity($capacity);
        $userVehiclesEntity->setCarPower($power);
        $userVehiclesEntity->setCarActive($active);
        $userVehiclesEntity->setCarProductionYear($ProductionYear);
        $userVehiclesEntity->setCarTrunkCapacity($TrunkCapacity);
        $userVehiclesEntity->setIdUser($id_user);
        $userVehiclesEntity->setIdDriver($userEntity->getIdDriver());
        $userVehiclesModel= new VehiclesModel();
        $userVehiclesEntity->setIdVehicle($userVehiclesModel->getInsertID());
        $userVehiclesModel->insert($userVehiclesEntity);
    }

    public function getUserVehicles($id_driver){
        $arrayData= $this->where('id_driver',$id_driver)->findAll();
        if(empty($arrayData) || is_null($arrayData)){
            log_message("debug","Pusta lista, użytkownik nie posiada samochodu");
            return array();
        }
        return $arrayData;
    }

    public function getCar($idVehicle){
        log_message("debug","Wyszukiwanie samochodu o id_vehicle=".$idVehicle);
        return $this->where('id_vehicle',$idVehicle)->first();
    }

    public function updateVehicle($idVehicle,$data){
        log_message("debug","Aktualizowanie danych samochodu o id_vehicle=".$idVehicle.' zestaw danych '.json_encode($data));
        $this->update(["id_vehicle" => $idVehicle], $data);
    }

    public function carIsDriver($idCar,$idDriver): bool  {
        log_message("debug", "Sprawdzanie, czy samochód o id_vehicle =". $idCar. " należy do kierowcy id_driver".$idDriver );
        $entity = $this->where('id_vehicle',$idCar)->where('id_driver',$idDriver)->first();
        if(is_null($entity)){
            log_message('debug','Pojazd o id_vehicle ='.$idCar.' nie należy do kierowcy o id_driver'.$idDriver);
            return false;
        }
        log_message('debug','Pojazd o id_vehicle ='.$idCar.' należy do kierowcy o id_driver'.$idDriver);
        return true;
    }

    public function getVehicle($id_vehicle){
        $vehicleEntity=new VehiclesEntity();
        $vehicleEntity=$this->where('id_vehicle',$id_vehicle)->first();
        return $vehicleEntity->getCarBrand().' '.$vehicleEntity->getCarModel();
    }
    


}
