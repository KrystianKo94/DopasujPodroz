<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CarController extends BaseController
{
    public function index(){
        echo view('admin/add_car');
    }
    public function listCar(){
        return view('admin/list_car');
    }
}
