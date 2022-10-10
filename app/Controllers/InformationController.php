<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class InformationController extends BaseController
{
	public function index(){
		return view("info_page");
	}
}
