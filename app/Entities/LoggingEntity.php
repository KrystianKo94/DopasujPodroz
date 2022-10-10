<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class LoggingEntity extends Entity
{
	protected $datamap = [];
	protected $dates   = [
		'created_at',
		'updated_at',
		'deleted_at',
	];
	protected $casts   = [];

	public function GetIdUser(){
		return $this->attributes['id_user'];

	}
	public function SetIdUser($id_user){
		return $this->attributes['id_user'];
	}
	public function getLoginStatus(){
		return $this->attributes['login_success'];

	}
	public function setLoginStatus($loginbit){
		return $this->attributes['login_success'];
	}
}
