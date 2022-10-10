<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class TravelEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
    
    public function getFrom(){
        return $this->attributes['address_from'];
    }
    
    public function getTo(){
        return $this->attributes['address_to'];
    }
    
    public function getStart(){
        return $this->attributes['go_date'];
    }
    
    public function getEnd(){
        return $this->attributes['to_date'];
    }
    
    public function getIdAdvertisement(){
        return $this->attributes['id_advertisement'];
    }
    
}
