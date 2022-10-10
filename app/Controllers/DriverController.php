<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;
use App\Models\DriverModel;

class DriverController extends BaseController{


    public function index(){
        echo view('/admin/edit_data',
        Services::getDriverData());
    }

    public function adddriver(){
        return json_encode(array(['success'=>Services::createDriver($this->request->getJsonVar('drivernumber'),
            $this->request->getJsonVar('description'))]));
    }

}
