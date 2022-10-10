<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class AdvertisementEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    public function setStart($start){
        return $this->attributes['go_date']=$start;
    }
    public function getStart(){
        return $this->attributes['go_date'];
    }
    public function setEnd($end){
       return $this->attributes['to_date']=$end;
    }
    public function getEnd(){
       return $this->attributes['to_date']; 
    }
    public function setCost($coast){
        return $this->attributes['trip_cost']=$coast;
    }
    public function getCost(){
        return $this->attributes['trip_cost'];
    }
    public function setSeats($seats){
        return $this->attributes['seats_amount']=$seats;
    }
    public function getSeats(){
        return $this->attributes['seats_amount'];
    }
    public function setLuggage($luggage){
        return $this->attributes['luggage_size']=$luggage;
    }
    public function getLuggage(){
        return $this->attributes['luggage_size'];
    }
    public function setActive($active){
        return $this->attributes['is_active']=$active;
    }
    public function getActive(){
        return $this->attributes['is_active'];
    }
    public function setTo($to){
        return $this->attributes['id_address_to']=$to;
    }
    public function getTo(){
        return $this->attributes['id_address_to'];
    }
    public function setFrom($from){
        return $this->attributes['id_address_from']=$from;
    }
    public function getFrom(){
        return $this->attributes['id_address_from'];
    }
    public function setIdDriver($id_driver){
        return $this->attributes['id_driver']=$id_driver;
    }
    public function getIdDriver(){
        return $this->attributes['id_driver'];
    }
    public function setIdVehicle($id_vehicle){
        return $this->attributes['id_vehicle']=$id_vehicle;
    }
    public function getIdVehicle(){
        return $this->attributes['id_vehicle'];
    }
    public function getStatus(){
        return $this->attributes['state'];
    }
    public function setState($state){
        $this->attributes['state']= $state;
    }
    public function getAllAttr(){
        return  $this->attributes;
    }
    public function getIdAdvertisement(){
        return $this->attributes['id_advertisement'];
    }
    public function setIdAdvertisement($idAdvertisement){
         $this->attributes['id_advertisement'] = $idAdvertisement;
    }




}
