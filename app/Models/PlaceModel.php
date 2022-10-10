<?php

namespace App\Models;

use CodeIgniter\Model;

class PlaceModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'place';
    protected $primaryKey       = 'id_place';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'App\Entities\PlaceEntity';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_district','id_voivodeship','description','id_community','SYM','SYMPOD'];

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

    public function getPlacebyVoiDisPla($idVoivodeship,$idDistrict,$idCommunity){
    
        return $this-> groupStart()->where('id_voivodeship',$idVoivodeship)->where('id_district',$idDistrict)->where('id_community',$idCommunity)->groupEnd()->findAll();
        

    }



}
