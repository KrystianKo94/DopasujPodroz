<?php

namespace App\Models;

use CodeIgniter\Model;

class AdvertisementUserBlocked extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'advertisement_user_blocked';
    protected $primaryKey       = 'id_advertisement';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_advertisement','id_user','id_driver','name','surname'];

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
    protected $allowCallbacks = false;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getBlockedIdsAdvertisement(){
        log_message("debug","Wyszukiwanie ogłoszeń użytkowników, którzy są zablokowaniu");
        $array = $this->findColumn('id_advertisement');
        if(is_null($array) || empty($array)){
            return array(-1);
        }
        return $array;
    }

}
