<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class OpinionController extends BaseController
{
	public function index() {
        return view('admin/list_opinion');
	}
    public function getMyOpinion (){
        return view('admin/list_opinion_my');
    }

    public function addOpinion (){
        return view('admin/add_opinion');
    }
}
