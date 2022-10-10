<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class AdressToEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    public function setIdAdres($numberTo){
        return $this->attributes['id_address']=$numberTo;
    
    }
    public function getIdAdres(){
        return $this->attributes['id_address'];
    
    }

    public function getIdTo(){
        return $this->attributes['id_address_to'];
    }



}
