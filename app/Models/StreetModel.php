<?php

namespace App\Models;

use CodeIgniter\Model;

class StreetModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'street';
    protected $primaryKey       = 'id_street';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'App\Entities\StreetEntity';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_voivodeship','id_district','id_community','type','SYM','SYM_UL','feature','name1','name2'];

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

    public function getStreetbyVoiDisCom($idVoivodeship,$idDistrict,$idCommunity){
    
        return $this-> groupStart()->where('id_voivodeship',$idVoivodeship)->where('id_district',$idDistrict)->where('id_community',$idCommunity)->groupEnd()->findAll();
        

    }
}
