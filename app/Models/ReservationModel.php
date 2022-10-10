<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservationModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'reservation';
    protected $primaryKey       = 'id_reservation';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'App\Entities\ReservationEntity';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_advertisement','id_user','capity','capity_of_trunk','is_active','state_is_full','date_start','planing_date_end','id_reservation'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'date_create';
    protected $updatedField  = 'date_modify';
    //protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = false;

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
    
    public function findAdvertUser($idAdvertisement, $idUser){
      $reservationEntity=$this->where('id_advertisement',$idAdvertisement)->where('id_user',$idUser)->first();
      if(is_null($reservationEntity)){
          return false;
      }
      else 
          return true;
    }
}
