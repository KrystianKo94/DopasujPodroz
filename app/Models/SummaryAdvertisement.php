<?php

namespace App\Models;

use CodeIgniter\Model;

class SummaryAdvertisement extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Advert_View';
    protected $primaryKey       = 'id_advertisement';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_advertisement','RESERVATION_TO_SEAT','LUGGAGE_TO_RESERVATION'];

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
      
    public function getDataById($id_advertisement){
        return $this->where('id_advertisement',$id_advertisement)->first();
    }
}
