<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\AdressToEntity;

class AdressToModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'addresses_to';
    protected $primaryKey       = 'id_address_to';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'App\Entities\AdressToEntity';
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

    public function setIdAdresTo($numberTo){
        $toEntity=new AdressToEntity();
        $toEntity->setIdAdres($numberTo);
        $toEntity->getIdAdres();
        $id=$this->insert($toEntity);
        return $id;
    }

    public function getIdAdresTo($numberTo){
        $findTo=new AdressToEntity();
        $findTo=$this->where('id_address',$numberTo)->first();
        return $findTo->getIdTo();
    }

    public function getIdAdres($idAdresTo){
        $idadres=$this->where('id_address_to',$idAdresTo)->findColumn('id_address');
        return $idadres[0];
    }
    public function getAddressFromId($idAdresTo){
        $idadres=$this->where('id_address_to',$idAdresTo)->first();
        return $idadres;
    }



}
