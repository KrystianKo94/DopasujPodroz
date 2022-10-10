<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class VehiclesEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    public function setIdDriver($id_driver){
        return $this->attributes['id_driver']=$id_driver;
    }
    public function getIdDriver(){
        return $this->attributes['id_driver'];
    }

    public function setIdUser($id_user){
        return $this->attributes['id_driver']=$id_user;
    }
    public function getIdUser(){
        return $this->attributes['id_driver'];
    }
    public function setCarBrand($brand){
        return $this->attributes['brand']=$brand;
    }
    public function getCarBrand(){
        return $this->attributes['brand'];
    }
    public function setCarModel($model){
        return $this->attributes['model']=$model;
    }
    public function getCarModel(){
        return $this->attributes['model'];
    }
    public function setCarType($type){
        return $this->attributes['type']=$type;
    }
    public function getCarType(){
        return $this->attributes['type'];
    }
    public function setCarCapacity($capacity){
        return $this->attributes['capacity']=$capacity;
    }
    public function getCarCapacity(){
        return $this->attributes['capacity'];
    }
    public function setCarPower($power){
        return $this->attributes['power']=$power;
    }
    public function getCarPower(){
        return $this->attributes['power'];
    }
    public function setCarActive($active){
        return $this->attributes['is_active']=$active;
    }
    public function getCarActive(){
        return $this->attributes['is_active'];
    }
    public function setCarProductionYear($ProductionYear){
        return $this->attributes['year_of_production']=$ProductionYear;
    }
    public function getCarProductionYear(){
        return $this->attributes['year_of_production'];
    }
     public function setCarTrunkCapacity($TrunkCapacity){
        return $this->attributes['capacity_of_trunk']=$TrunkCapacity;
    }
    public function getCarTrunkCapacity(){
        return $this->attributes['capacity_of_trunk'];
    }

    public function setIdVehicle($idVehicle){
        $this->attributes['id_vehicle']= $idVehicle;
    }

    public function getCarDescription(){
        return $this->attributes['brand']." ".$this->attributes['model'];
    }

    public function getAllAttr(){
        return  $this->attributes;
    }

    public function getIdVehicle(){
        return $this->attributes['id_vehicle'];
    }


}
