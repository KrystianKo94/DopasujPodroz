<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\ReservationEntity;
use App\Models\Advertisement;
use App\Models\ReservationModel;
use Config\Services;

class ReservationController extends BaseController
{
    public function index()
    {
        //
    }

    public function listReservation(){
        return view('/admin/list_reservation');
    }

    public function listReservationDriver(){
        return view('/admin/list_reservation_driver');
    }
    
    public function addReservation(){
        return json_encode(Services::createReservation($this->request));
      }
      
      
    }



