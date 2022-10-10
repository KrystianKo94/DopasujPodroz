<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class VoivodeshipEntity extends Entity
{
	protected $datamap = [];
	protected $dates   = [
		'created_at',
		'updated_at',
		'deleted_at',
	];
	protected $casts   = [];

    public function getDescription(){
        return $this->attributes['description'];
    }

    public function getIdVoivodeship(){
          return $this->attributes['id_voivodeship'];
    }


}
