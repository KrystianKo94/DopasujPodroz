<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class DriverEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    public function setDriverNumber($drivernumber){
        return $this->attributes['number_drive_lisense']=$drivernumber;
    }
    public function getDriverNumber(){
        return $this->attributes['number_drive_lisense'];
    }
    public function setDriverDescription($description){
        return $this->attributes['description']=$description;
    }
    public function getDriverDescription(){
        return $this->attributes['description'];
    }
    public function setIdUser($id_user){
        return $this->attributes['id_user']=$id_user;
    }
    public function getIdUser(){
        return $this->attributes['id_user'];
    }
    public function getIdDriver(){
        return $this->attributes['id_driver'];
    }
    public function setDriverId($idDriver){
        $this->attributes['id_driver'] = $idDriver;
    }
}
