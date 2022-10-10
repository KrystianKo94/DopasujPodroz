<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ChangePasswordController extends BaseController
{
	public function index(){
            echo view('forgot');
	}
}
