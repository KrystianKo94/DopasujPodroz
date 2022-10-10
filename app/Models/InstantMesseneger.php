<?php

namespace App\Models;

use CodeIgniter\Model;

class InstantMesseneger extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'instant_messenger';
    protected $primaryKey       = 'id_instant_messenger';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'App\Entities\InstantMessenegerEntity';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_instant_messenger','id_user_sender','id_user_recipient','is_remove_driver','is_remove_user','id_advertisement'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'date_create';
    protected $updatedField  = 'date_modify';
   // protected $deletedField  = 'deleted_at';

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

    public function saveInstantMesseneger($instantMesseneger){
        log_message("debug","[InstantMesseneger]::saveInstantMesseneger - zapisywanie relacji wiadomości");
        $instantMesseneger->setIdInstantMessenger($this->getInsertID());
        return $this->insert($instantMesseneger);
    }

    public function conversationIsCreate($idUserSender,$idUserRecipient,$idAdvertisement):bool{
        log_message("debug","[InstantMesseneger]::conversationIsCreate - sprawdzanie, czy konwersjacaj, została już rozpoczęta");
        $data = $this->where("id_user_sender",$idUserSender)->where("id_user_recipient",$idUserRecipient)->where("id_advertisement",$idAdvertisement)->first();
        if(!is_null($data)){
            log_message("debug","[InstantMesseneger]::conversationIsCreate - konwersacja została już rozpoczęta");
            return true;
        }
        log_message("debug","[InstantMesseneger]::conversationIsCreate - konwersacja nie została już rozpoczęta");
        return false;
    }
    public function getIdInstantMessenger($idUserSender,$idUserRecipient,$idAdvertisement):bool{
        log_message("debug","[InstantMesseneger]::conversationIsCreate - wyszukiwanie id z tabeli instant_messenger");
        $data = $this->where("id_user_sender",$idUserSender)->where("id_user_recipient",$idUserRecipient)->where("id_advertisement",$idAdvertisement)->first();
        log_message("debug","[InstantMesseneger]::conversationIsCreate - wyszukiwanie id z tabeli instant_messenger, znaleziony id = ".$data->getIdInstantMessenger());
        return $data->getIdInstantMessenger();
    }
}
