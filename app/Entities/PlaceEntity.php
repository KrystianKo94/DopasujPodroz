<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class PlaceEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    public function getIdPlace(){
        return $this->attributes['id_place'];
    }
    
    public function getDescriptionPlace(){
        return $this->attributes['description'];
    }


}
