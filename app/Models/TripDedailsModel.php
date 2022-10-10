<?php

namespace App\Models;

use CodeIgniter\Model;

class TripDedailsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tripDetailView';
    protected $primaryKey       = 'id_advertisement';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'App\Entities\TripDedailsEntity';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['address_to','address_from','id_advertisement','to_date','go_date','description','car','email'];

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
    
    public function getSpecificAdvert($idTravel){
        $userTrip=$this->where('id_advertisement',$idTravel)->first();
        return $userTrip;
    }
}
