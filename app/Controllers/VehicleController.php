<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\VehiclesEntity;
use App\Models\VehiclesModel;
use App\Models\DriverModel;
use Config\Services;

class VehicleController extends BaseController
{
    public function index(){
        return view("admin/list_car",['cars' => Services::getVehiclesDriver()]);
    }

    public function addCarGet()    {
        return view("admin/add_car");
    }

    public function addCar(){
        $idUser=session()->get('id_user');
        $brand=$this->request->getJsonVar('brand');
        $model=$this->request->getJsonVar('model');
        $type=$this->request->getJsonVar('type');
        $capacity=$this->request->getJsonVar('capacity');
        $power=$this->request->getJsonVar('power');
        $active=1;
        $productionYear=$this->request->getJsonVar('year_of_production');
        $trunkCapacity=$this->request->getJsonVar('capacity_of_trunk');
        $userVehiclesModel=new VehiclesModel();
        $driver=new DriverModel();
       if(!is_null($driver->checkIfDriverIsComplete($idUser))){
            log_message("debug", "Wszystkie warunki zostały spełnione, dodawanie samochodu");
            $userVehiclesModel->createDriverCar($brand,$model,$type,$capacity,$power,$active,$productionYear,$trunkCapacity,$idUser);
            return json_encode(array(['success'=>true]));
        }
        else{
            log_message("debug","Samochód nie został dodany");
           return json_encode(array(['success'=>false]));
        }
    }

    public function editCarGet(){
        return view("admin/edit_car",['brand'=> Services::getVehiclesDriver()]);
    }

    public function getCar($idCar){
        $vehicleModel= new VehiclesModel();
        $vehicleEntity = $vehicleModel->getCar($idCar);
        echo json_encode($vehicleEntity->getAllAttr());
    }

    public function updateVehicle(){
        $vehicleModel= new VehiclesModel();
        $idDriver=Services::getIdDriver();
        $idCar = $this->request->getJsonVar('id_vehicle');
        if($vehicleModel->carIsDriver($idCar,$idDriver)){
            $data = [
                'brand' => $this->request->getJsonVar('brand'),
                'model' => $this->request->getJsonVar('model'),
                'type' =>   $this->request->getJsonVar('type'),
                'capacity'  =>  $this->request->getJsonVar('capacity'),
                'power' =>  $this->request->getJsonVar('power'),
                'year_of_production' =>  $this->request->getJsonVar('year_of_production'),
                'capacity_of_trunk' =>  $this->request->getJsonVar('capacity_of_trunk')
            ];
            $vehicleModel->updateVehicle($idCar,$data);
            return json_encode(array('alert_type'=> 'success', 'text' =>"Poprawnie zaktualizowano dane",'token' => csrf_hash()));
        }
        else{
            return json_encode(array('alert_type'=> 'error', 'text' =>"Brak uprawnień do wykonania operacji",'token' => csrf_hash()));
        }
    }
    
}
