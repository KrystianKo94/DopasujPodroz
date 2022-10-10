<?php

namespace App\Models;

use CodeIgniter\Model;

class CommunityModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'community';
    protected $primaryKey       = 'id_community';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'App\Entities\CommunityEntity';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_district','id_voivodeship','name_of_community','description','type'];

    // Dates
    protected $useTimestamps = false;
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

    public function getCommunitybyVoiDis($idVoivodeship,$idDistrict){
 
        return $this-> groupStart()->where('id_voivodeship',$idVoivodeship)->where('id_district',$idDistrict)->groupEnd()->findAll();

    }




}

