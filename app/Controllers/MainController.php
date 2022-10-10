<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TravelModel;

class MainController extends BaseController
{
    public function index(){
            
        $travelModel=new TravelModel();
        $allAdverts=$travelModel->travelList();
        return view("main",['travel'=>$allAdverts,'token'=> csrf_hash()]);
    }
}