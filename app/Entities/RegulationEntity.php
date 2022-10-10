<?php

namespace App\Entities;


use CodeIgniter\Entity\Entity;


class RegulationEntity extends Entity
{
	protected $datamap = [];
	protected $dates   = [
		'created_at',
		'updated_at',
		'deleted_at',
	];
	protected $casts   = [];


	public function getDescription(){
		
		return $this->attributes['description_pl'];
		}

	public function getUserReg(){
		
		return $this->attributes['id_regulation'];
		}
	
		
	
	
	
}
