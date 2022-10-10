<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class DistrictEntity extends Entity
{
	protected $datamap = [];
	protected $dates   = [
		'created_at',
		'updated_at',
		'deleted_at',
	];
	protected $casts   = [];

    public function getDescriptionDistrict(){
        return $this->attributes['name_of_community'];
    }

    public function getIdDistrict(){
        return $this->attributes['id_district'];
    }
}
