<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class StreetEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    public function getIdStreet(){
        return $this->attributes['id_street'];
    }
    
    public function getDescriptionStreet(){
        return $this->attributes['name1'];
    }
}
