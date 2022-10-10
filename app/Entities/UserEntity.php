<?php

namespace App\Entities;


use CodeIgniter\Entity\Entity;

class UserEntity extends Entity
{
	protected $datamap = [];
	protected $dates   = [
		'created_at',
		'updated_at',
		'deleted_at',
	];
	protected $casts   = [];

	 public function setstate($uuid){
	 return	$this->attributes['is_active']=1;
	}
	public function setPassword($password){
		return $this->attributes['password']= $password;
	}
	public function getPassword(){
		return $this->attributes['password'];
	}
	public function setEmail($email){
		return $this->attributes['email']=$email;

	}
	public function getEmail(){
		return $this->attributes['email'];

	}
	public function getActiveAccount(){
		return $this->attributes['is_active'];
	}
	public function verifyPassword($password) : bool{
		return password_verify($this->attributes['password'],$password);
	}

	public function getIdUser(){
		return $this->attributes['id_user'];
	}
	public function setUserId($id){
		return $this->attributes['id_user']=$id;
	}
	public function getdateblock(){
		return $this->attributes['date_block'];
	}
	public function setUserName($name){
		return $this->attributes['name']=$name;
	}
	public function setUserSurname($surname){
		return $this->attributes['surname']=$surname;
	}
	public function getUserName(){
		return $this->attributes['name'];

	}
	public function getUserSurname($surname){
		return $this->attributes['surname'];
	}


	


}

