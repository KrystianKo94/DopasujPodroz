<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class MessageEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    public function setIdMessage($idMessage){
        $this->attributes['id_message']=$idMessage;
    }

    public function getIdMessage(){
        return $this->attributes['id_message'];
    }
    public function setIdInstantMessenger($idInstantMessenger){
        $this->attributes['id_instant_messenger']=$idInstantMessenger;
    }

    public function getIdInstantMessenger(){
        return  $this->attributes['id_instant_messenger'];
    }
    public function setIdUserRecipient($idUserRecipient){
        $this->attributes['id_user_recipient']=$idUserRecipient;
    }

    public function getIdUserRecipient(){
        return $this->attributes['id_user_recipient'];
    }
    public function setIdUserSender($idUserSender){
        $this->attributes['id_user_sender']=$idUserSender;
    }

    public function getIdUserSender(){
        return $this->attributes['id_user_sender'];
    }
    public function setMessage($message){
        $this->attributes['message']=$message;
    }

    public function getMessage(){
        return $this->attributes['message'];
    }

    public function setIsRemoveSender($isRemoveSender){
        $this->attributes['is_remove_sender']=$isRemoveSender;
    }

    public function getIsRemoveSende(){
        return $this->attributes['is_remove_sender'];
    }
    public function setIsRemoveRecipient($isRemoveRecipient){
        $this->attributes['is_remove_recipient']=$isRemoveRecipient;
    }

    public function getIsRemoveRecipient(){
       return $this->attributes['is_remove_recipient'];
    }

}
