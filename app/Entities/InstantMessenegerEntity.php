<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class InstantMessenegerEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    public function getIdAdvertisement(){
        return $this->attributes['id_advertisement'];
    }

    public function setIdAdvertisement($idAdvertisement){
        $this->attributes['id_advertisement']= $idAdvertisement;
    }
    public function getIsRemoveUser(){
        return $this->attributes['is_remove_user'];
    }

    public function setIsRemoveUser($isRemoveUser){
        $this->attributes['is_remove_user']= $isRemoveUser;
    }

    public function getIsRemoveDriver(){
        return $this->attributes['is_remove_driver'];
    }

    public function setIsRemoveDriver($isRemoveDriver){
        $this->attributes['is_remove_driver']= $isRemoveDriver;
    }

    public function getIdUserRecipient(){
        return $this->attributes['id_user_recipient'];
    }

    public function setIdUserRecipient($idUserRecipient){
        $this->attributes['id_user_recipient']= $idUserRecipient;
    }

    public function getIdUserSender(){
        return $this->attributes['id_user_sender'];
    }

    public function setIdUserSender($idUserSender){
        $this->attributes['id_user_sender']= $idUserSender;
    }

    public function getIdInstantMessenger(){
        return $this->attributes['id_instant_messenger'];
    }

    public function setIdInstantMessenger($idInstantMessenger){
        $this->attributes['id_instant_messenger']= $idInstantMessenger;
    }

}
