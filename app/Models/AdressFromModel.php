<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\AdressFromEntity;

class AdressFromModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'addresses_from';
    protected $primaryKey       = 'id_address_from';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'App\Entities\AdressFromEntity';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_address'];

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

    public function setIdAdresFrom($numberFrom){
        $fromEntity=new AdressFromEntity();
        $fromEntity->setIdAdres($numberFrom);
        $fromEntity->getIdAdres();
        $id=$this->insert($fromEntity);
        return $id;
    }

    public function getIdAdresFrom($numberFrom){
        $findFrom=new AdressFromEntity();
        $findFrom=$this->where('id_address',$numberFrom)->first();
        return $findFrom->getIdFrom();
    }

    public function getIdAdres($idAdresFrom){
        $idadres=$this->where('id_address_from',$idAdresFrom)->findColumn('id_address');
        return $idadres[0];
    }


}
