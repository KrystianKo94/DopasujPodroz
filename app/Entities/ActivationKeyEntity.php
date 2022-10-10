<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class ActivationKeyEntity extends Entity
{
	protected $datamap = [];
	protected $dates   = [
		'created_at',
		'updated_at',
		'deleted_at',
	];
	protected $casts   = [];

	public function setUserId($id_user){
		$this->attributes['id_user']=$id_user;
	}
	public function setUserUid($uid_user){
		$this->attributes['activate_code']=$uid_user;
	
	}
	public function getUserId(){
		return $this->attributes['id_user'];
	}
	public function getUserUid(){
		return $this->attributes['activate_code'];
	}
	public function getDateExpiration(){
		return $this->attributes['date_expiration'];

	}
	public function setDateExpiration($expiration){
		$this->attributes['date_expiration']=$expiration;
	}

   public function getCreateDate(){
	   
	   return $this->attributes['date_create'];
   }
  


}
