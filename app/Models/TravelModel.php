<?php

namespace App\Models;

use CodeIgniter\Model;


class TravelModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'allAdvertisements';
    protected $primaryKey       = 'id_advertisement';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'App\Entities\TravelEntity';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_advertisement','address_to','address_from','to_date','go_date','car'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
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
    
    public function travelList(){
        
        $listTravel=$this->findAll();
        log_message('debug',json_encode($listTravel));
        if(empty($listTravel) || is_null($listTravel)){
            log_message("debug","Pusta lista, nie ma ogloszen");
                return array();
        }
        return $listTravel;
    }

    public function getTravelByIds($idsAdvertisement){
      //  log_message("debug",$idsAdvertisement[1]["id_advertisement"]);
        $listAdvertisement = array();
        if(!empty($idsAdvertisement) || !isset($idsAdvertisement) ){
            $listAdvertisement = $this->whereIn("id_advertisement",$idsAdvertisement)->findAll();
            log_message("debug", "Lista ogłoszeń ".json_encode($listAdvertisement));
            if(empty($listAdvertisement) || is_null($listAdvertisement)){
                log_message("debug","Pusta lista, nie ma ogloszen");
                return array();
            }
        }
        return $listAdvertisement;
    }

}
