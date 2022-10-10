<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class ReservationEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    public function setIdUser($idUser){
        return $this->attributes['id_user'] = $idUser;
    }
    public function setIdAdvertisement($idAdvertisiemnt){
        return $this->attributes['id_advertisement'] = $idAdvertisiemnt;
    }
    public function setCapity($capacity){
        return $this->attributes['capity'] = $capacity;
    }
    public function setCapityOfTrunk($capacityOfTruck){
        return $this->attributes['capity_of_trunk']= $capacityOfTruck;
    }
    public function setIsActive($isActive){
        return $this->attributes['is_active'] =$isActive;
    }
    public function setStateIsFull($stateIsFull){
        return $this->attributes['state_is_full']= $stateIsFull;
    }
    public function setStartDate($startDate){
        return $this->attributes['date_start'] = $startDate;
    }
    public function setEndDate($planningData){
        $this->attributes['planing_date_end']= $planningData;
    }

    public function getIdUser(){
        return $this->attributes['id_user'];
    }
    public function getIdAdvertisement(){
        return $this->attributes['id_advertisement'];
    }
    public function getCapity(){
        return $this->attributes['capity'];
    }
    public function getCapityOfTrunk(){
        return $this->attributes['capity_of_trunk'];
    }
    public function getIsActive(){
        return $this->attributes['is_active'];
    }
    public function getStateIsFull(){
        return $this->attributes['state_is_full'];
    }
    public function getStartDate(){
        return $this->attributes['date_start'];
    }
    public function getEndDate(){
        return $this->attributes['planing_date_end'];
    }
}
