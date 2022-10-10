<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class AdressEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    public function setVoivodeship($voi){
        return $this->attributes['voivodeship']=$voi;
    }
    public function getVoivodeship(){
        return $this->attributes['voivodeship'];
    }
    public function setDistrict($dis){
        return $this->attributes['district']=$dis;
    }
    public function getDistrict(){
        return $this->attributes['district'];
    }
    public function setCommune($com){
        return $this->attributes['commune']=$com;
    }
    public function getCommune(){
        return $this->attributes['commune'];
    }
    public function setPlace($pla){
        return $this->attributes['place']=$pla;
    }
    public function getPlace(){
        return $this->attributes['place'];
    }
    public function setStreet($str){
        return $this->attributes['street']=$str;
    }
    public function getStreet(){
        return $this->attributes['street'];
    }
    public function setZipCode($zip){
        return $this->attributes['zip_code']=$zip;
    }
    public function getZipCode(){
        return $this->attributes['zip_code'];
    }
    public function setNumber($num){
        return $this->attributes['number_apartment']=$num;
    }
    public function getNumber(){
        return $this->attributes['number_apartment'];
    }

    public function getIdAdress(){
        return $this->attributes['id_address'];
    }

    public function getAddressFull(){
        return $this->attributes['street'].' '.$this->attributes['number_apartment'].', '.$this->attributes['zip_code'].' '.$this->attributes['place'];
    }



}
