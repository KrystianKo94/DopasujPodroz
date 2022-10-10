<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class TripDedailsEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
    
    public function getFromPlace(){
        return $this->attributes['address_from'];
    }
    
    public function getToPlace(){
        return $this->attributes['address_to'];
    }
    
    public function getSeats(){
        return $this->attributes['seats'];
    }
    
     public function getLuggage(){
        return $this->attributes['luggage'];
    }
    
      public function gettoCar(){
        return $this->attributes['car'];
    }
    
    public function getDescription(){
        return $this->attributes['description'];
    }
    
    public function getUserName(){
        return $this->attributes['email'];
    }
}
