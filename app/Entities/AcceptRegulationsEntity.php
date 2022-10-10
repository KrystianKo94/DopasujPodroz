<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class AcceptRegulationsEntity extends Entity
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
	public function getUserId(){
		return $this->attributes['id_user'];
	}
	public function getUserReg(){
		return $this->attributes['id_regulation'];
	}
	public function setUserReg($acceptreq){
		$this->attributes['id_regulation']= $acceptreq;
	}
	public function setdateaccept($presenttime){ 
		$this->attributes['date_accept']= $presenttime;
	}
	public function getdateaccept(){ 
		return $this->attributes['date_accept'];
	}
	 public function setacceptstatus($status){
		$this->attributes['is_accept']=$status;
	}
	public function getacceptstatus(){
		return $this->attributes['is_accept'];
	} 
}
