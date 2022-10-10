<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\ResetModel;
use App\Models\UserModel;

class PasswordController extends BaseController
{
	public function __construct(){
		helper(['url','form']);
	}

	public function index()
	{
	$validation=$this->validate([]);
	
		echo view("password_change.php",['validation'=>$this->validator]);
		
	}
	public function userpasswordview($token){
		$validation=$this->validate([]);

		$session=session();
		$_SESSION['token'] =$token;
		
		echo view("password_change.php",['validation'=>$this->validator]);

	}


	public function passwordreset(){
	$session=session();
	$token= $_SESSION['token'];

	$validation=$this->validate([
		'password'=> [
			'rules'=>'required|min_length[6]|max_length[12]|matches[password]',
			'errors'=> [
				'required'=>  'Pole haslo jest wymagane',
				'min_length'=> ' Haslo musi miec co najmniej 6 znakow',
				'max_length'=> 'Haslo nie moze byc dluzsze niz 12 znakow',

			]
			],
			'repeat_password'=> [
				'rules'=>'required|min_length[6]|max_length[12]|matches[password]',
				'errors'=> [
					'required'=> 'Pole powtorz haslo jest wymagane',
					'min_length'=> ' Haslo musi miec co najmniej 6 znakow',
					'max_length'=> 'Haslo nie moze byc dluzsze niz 12 znakow',
					'matches'=> 'Hasla nie sa takie same ', 
	
				]
				],


			]);
		

			if(!$validation){
				return view('password_change',['validation'=>$this->validator]); 
			}
			else{
				$password=$this->request->getPost('password');
				$password= Hash::make($password);

				$myid=new ResetModel();
				$myid=$myid->getIdUser($token);

				$pass=new UserModel();
				$pass->updatepassword($password,$myid);
		
				return view("info_page",['alert_type' =>'alert-success',
		 		'header' =>'Operacja zakończona sukcesem',
				'message' => 'Twoje haslo zostalo zmienione',
				'direction'=> '/login '
	
	
				]);

			
			}

}
    public function passwordChangeReset(){

        return view("admin/edit_password");

    }

}
