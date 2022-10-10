<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class AdressFromEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];


    public function setIdAdres($numberFrom){
        return $this->attributes['id_address']=$numberFrom;
    
    }
    public function getIdAdres(){
        return $this->attributes['id_address'];
    
    }

    public function getIdFrom(){
        return $this->attributes['id_address_from'];
    }
}
