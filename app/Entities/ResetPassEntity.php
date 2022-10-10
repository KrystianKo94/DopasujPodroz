<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class ResetPassEntity extends Entity
{
	protected $datamap = [];
	protected $dates   = [
		'created_at',
		'updated_at',
		'deleted_at',
	];
	protected $casts   = [];

	public function setToken($token){
		return $this->attributes['token']=$token;
	}
	public function setIdUser($checkemail){
		return $this->attributes['id_user']=$checkemail;
	}
	public function setExpireDate($expiredate){
		return $this->attributes['date_expiration']=$expiredate;
	}
	public function getToken(){
		return $this->attributes['token'];
	}
	public function getIdUser(){
		return $this->attributes['id_user'];
	}
	public function getExpireDate(){
		return $this->attributes['date_expiration'];
	}
	
}
