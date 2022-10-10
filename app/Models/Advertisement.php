<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\AdvertisementEntity;

class Advertisement extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'advertisement';
    protected $primaryKey       = 'id_advertisement';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'App\Entities\AdvertisementEntity';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['go_date','to_date','trip_cost','seats_amount','luggage_size','is_active','id_address_to','id_address_from','id_driver','id_vehicle','state'];

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

    public function InitializeAdvertisement($data){
        $adv= new AdvertisementEntity();
        $adv->setStart($data['startdate']);
        $adv->setEnd($data['enddate']);
        $adv->setCost($data['coast']);
	    $adv->setSeats($data['seats']);
	    $adv->setLuggage($data['luggage']);
	    $adv->setActive($data['is_active']);
	    $adv->setTo($data['id_adress_to']);
	    $adv->setFrom($data['id_adress_from']);
	    $adv->setIdDriver($data['id_driver']);
        $adv->setIdVehicle($data['id_vehicle']);
        $adv->setIdAdvertisement($this->getInsertID());
        $this->insert($adv);
    }

    public function getUserAdv($id_driver){
        $ListData= $this->where('id_driver',$id_driver)->findAll();
        return $ListData;
    }

    public function getIdAdressTo($id_driver){
        $idAdress=$this->where('id_driver',$id_driver)->findColumn('id_address_to');
        log_message('debug', json_encode($idAdress));
        return $idAdress;

    }

    public function findTripPeriods($idDriver,$data){
        $periods=$this->groupStart()->where('go_date <=',$data['startdate'])->where('to_date>=',$data['enddate'])->where('id_driver',$idDriver)->orGroupStart()->where('go_date>=',$data['startdate'])->where('to_date<=',$data['enddate'])->where('id_driver',$idDriver)->orGroupStart()->where('go_date>=',$data['startdate'])->where('to_date>=',$data['enddate'])->where('id_driver',$idDriver)->orGroupStart()->where('go_date <=',$data['startdate'])->where('to_date>=',$data['startdate'])->where('to_date<=',$data['enddate'])->where('id_driver',$idDriver)->groupEnd()->groupEnd()->groupEnd()->groupEnd()->countAllResults();
        log_message('debug',$periods);
        return $periods;
    }
    public function canAddAdvertisement($idDriver,$startDate){
        $count=$this->groupStart()->where('go_date >=',$startDate)->where('id_driver',$idDriver)->groupEnd()->orGroupStart()->where('to_date >=',$startDate)->groupStart()->where('id_driver',$idDriver)->where('go_date <=',$startDate)->groupEnd()->groupEnd()->countAllResults();
        log_message('debug','Zapytanie '.json_encode($this->db->showLastQuery()));
        log_message('debug','Ilość dodanych ogłoszeń wskazanego kierowcy: '.$count);
        return $count == 0;
    }

    public function getIdAdressFrom($id_driver){
        $idAdress=$this->where('id_driver',$id_driver)->findColumn('id_address_from');
        log_message('debug', json_encode($idAdress));
        return $idAdress;

    }

    public function getCarId($IdCar){
        return $this->where('id_vehicle',$IdCar)->first();
    }

     public function getUserVehiclesInfo($id_driver){
        $arrayData= $this->where('id_driver',$id_driver)->findAll();
        if(empty($arrayData) || is_null($arrayData)){
            log_message("debug","Pusta lista, użytkownik nie posiada samochodu");
                return null;
        }
        return $arrayData;
    
     }

     public function idCarEqualToIdDriver($idCar,$idDriver){
        
        $advEntity = $this->where('id_vehicle',$idCar)->where('id_driver',$idDriver)->first();
        if(is_null($advEntity)){
            return false;
        }
        return true;
     }
     public function updateAdvertisementDetails($id,$data){
        if($this->update($id, $data)){
            log_message("debug", "Poprawnie zaktualizowano rekord");
        }
        log_message('debug',$this->db->getLastQuery());
    }
    
    public function getIdVehicle($id_travel){
        $advEntity=new AdvertisementEntity();
        $advEntity=$this->where('id_advertisement',$id_travel)->first();
       
        return  $advEntity->getIdVehicle();
    

    }

    public function getDate($id_travel){
        log_message("debug", "Przekazany parametr ".$id_travel);
        $advEntity=$this->where('id_advertisement',$id_travel)->first();
        log_message("debug", "Wyszukana informacja ".json_encode($advEntity));
        return  $advEntity->getStart();
    }
    public function getEndDate($id_travel){
        
        $advEntity=$this->where('id_advertisement',$id_travel)->first();
       
        return  $advEntity->getStart();
    }

    public function getFreeSeats($id_travel){
        
        $advEntity=$this->where('id_advertisement',$id_travel)->first();
       
        return  $advEntity->getSeats();
    }
    
    public function getLuggage($id_travel){
        $advEntity=$this->where('id_advertisement',$id_travel)->first();
        return $advEntity->getLuggage();
    }

    public function getTripCost($id_travel){
        
        $advEntity=$this->where('id_advertisement',$id_travel)->first();
       
        return  $advEntity->getCost();
    }

    public function getAdvertisement($id_travel){
        return $this->where('id_advertisement',$id_travel)->first();
    }

    public function getAdvertisementExpired(){
        $date = date('Y-m-d H:i:s');
        log_message('info',"Wyszukiwanie ogłoszeń aktywnych, które się zakończyły po ". $date);
        $data= $this->where('go_date<', $date)->where('state','ACTIVE')->findAll();
        log_message('debug',json_encode($data));
        return $data;
    }

    public function getAdvertisementsById($array){
        log_message("info","Wyszukiwanie wszystkich ogłoszeń");
        $data = $this->whereIn('id_advertisement',$array)->findAll();
        log_message('debug',json_encode($data));
        return $data;
    }
    
     public function getStatus($idTravel){
        $advEntity=$this->where('id_advertisement',$idTravel)->first();
       return $advEntity->getStatus();
    }



}

