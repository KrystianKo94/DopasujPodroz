<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\AdressEntity;
use App\Entities\AdressToEntity;
use App\Entities\AdvertisementEntity;
use App\Entities\PlaceEntity;
use App\Models\Voivodeship;
use App\Models\DistrictModel;
use App\Models\DriverModel;
use App\Models\VehiclesModel;
use App\Models\AdressesModel;
use App\Models\Advertisement;
use App\Models\AdressFromModel;
use App\Models\AdressToModel;
use Config\Services;

class JourneyController extends BaseController

{
	public function index(){
    
	}
    public function list(){
        return view( "/admin/list_journey",
            ['token' => csrf_hash(),
            'advertisements' => Services::getAdvertisementDriver(),
            'vehicles' => Services::getVehiclesDriver()
        ]);
  
    }
    public function addGet(){
        $modelVoivodeship = new Voivodeship();
        $id_user=session()->get('id_user');
        $userModel=new DriverModel();
        $id_driver=$userModel->getDriverId($id_user);
        $vehicleModel= new VehiclesModel();
        $cars= $vehicleModel->getUserVehicles($id_driver);
        
        return view("/admin/add_journey",["voivodeships" => $modelVoivodeship->getAllVoivodeships(),'token' => csrf_hash(), 'brand'=>$cars]);
    }
    public function editJourneys(){

        return view("/admin/edit_journey");
    }
    public function addadvertisement(){
        $adress=new AdressesModel();
        $userModel=new DriverModel();
        $idUser=session()->get('id_user');
        $idDriver=$userModel->getDriverId($idUser);
   
        $data=[
            'voi'=> $this->request->getJsonVar('voivodeship_start'),
            'dis'=> $this->request->getJsonVar('district_start'),
            'com'=>$this->request->getJsonVar('commune_start'),
            'pla'=>$this->request->getJsonVar('place_start'),
            'str'=>$this->request->getJsonVar('street_start'),
            'zip'=>$this->request->getJsonVar('zip_code_start'),
            'num'=>$this->request->getJsonVar('number_apartment_start'),
        ];

        $idAdressStart=$adress->setLocationFirst($data);
        $adressFrom=new AdressFromModel();
        $idAddressesStart=$adressFrom->setIdAdresFrom($idAdressStart);

        $data=[
            'voi'=> $this->request->getJsonVar('voivodeship_end'),
            'dis'=> $this->request->getJsonVar('district_end'),
            'com'=>$this->request->getJsonVar('commune_end'),
            'pla'=>$this->request->getJsonVar('place_end'),
            'str'=>$this->request->getJsonVar('street_end'),
            'zip'=>$this->request->getJsonVar('zip_code_end'),
            'num'=>$this->request->getJsonVar('number_apartment_end'),
        ];

        $idAdressEnd=$adress->setLocationFirst($data);
        $adressTo=new AdressToModel();
        $idAddressesEnd=$adressTo->setIdAdresTo($idAdressEnd);

        $data=[
            'startdate'=>$this->request->getJsonVar('date_start'),
            'enddate'=>$this->request->getJsonVar('date_end'),
            'coast'=>$this->request->getJsonVar('coast'),
            'seats'=>$this->request->getJsonVar('number_of_field'),
            'luggage'=>$this->request->getJsonVar('luggage'),
            'is_active'=>0,
            'id_adress_to'=>$idAddressesEnd,
            'id_adress_from'=>$idAddressesStart,
            'id_driver'=>$idDriver,
            'id_vehicle'=>$this->request->getJsonVar('car'),
        ];
        
        $adv=new Advertisement();
        $records=$adv->findTripPeriods($idDriver,$data);
        if($records==0){
            
            $adv->InitializeAdvertisement($data);
            return json_encode(array('alert_type'=> 'success', 'success'=>true, 'text' =>"Poprawnie zaktualizowano dane",'token' => csrf_hash()));
        }
        else{
            return json_encode(array('alert_type'=> 'success', 'success'=>false, 'text' =>"Masz inny przejazd w tych ramach czasowych, Nie mozesz dodac nastepnego",'token' => csrf_hash()));
        }

    }
    public function checkAdvertisement (){
        $driverModel=new DriverModel();
        $idUser=session()->get('id_user');
        $idDriver=$driverModel->getDriverId($idUser);
        $advertisement=new Advertisement();
        $canAddAdvertisement=$advertisement->canAddAdvertisement($idDriver,$this->request->getJsonVar('date_start'));
        return json_encode(array('can_add'=> $canAddAdvertisement ,'token' => csrf_hash()));
    }

   public function listArchive(){
       return view("/admin/list_journey_archive");
   }

   public function changeTripStatus(){
       $status=$this->request->getJsonVar('status');
       $idTravel=$this->request->getJsonVar('id_travel');
       Services::switchStatus($status,$idTravel);
      
   }

    public function ModifyTripDetails($IdCar){
        log_message('debug',"Przekazana wartość id_vehicle =". $IdCar);
        $advertModel=new Advertisement();
        $advertEntity=new AdvertisementEntity();
        $advertEntity=$advertModel->getCarId($IdCar);
        echo json_encode(array($advertEntity->getAllAttr(),'token'=>csrf_hash()));

    }

    public function EditDetailsDataTrip(){
        $idUser=session()->get('id_user');
        $coast=  $this->request->getJsonVar('coast');
        $coast= (int)$coast;
        $idAdvertisement = $this->request->getJsonVar('idAdvertisement');
        Services::updateDetailsDataTrip($idUser,$coast,$idAdvertisement);
      
    }

    public function tripDetails(){
    
        $id_travel=$this->request->getJsonVar('id_travel');
        $data=Services::getAdvertisementDetail($id_travel);
        return json_encode([$data,'token'=>csrf_hash()]);
    }

    public function getDetailAdvertisementWithLocation(){
        $idtravel= $this->request->getJsonVar('id_travel');
        $data=Services::getAdvertisementWithLocation($idtravel);
        return json_encode([$data,'token'=>csrf_hash()]);
        
    } 
    

  

  
}
