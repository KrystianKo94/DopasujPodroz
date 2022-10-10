<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class CommunityEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];


public function getIdCommunity(){
    return $this->attributes['id_community'];
}

public function getDescriptionCommunity(){
    return $this->attributes['description'];
}

}