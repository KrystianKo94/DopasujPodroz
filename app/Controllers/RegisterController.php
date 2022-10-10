<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\RegulationModel;
use App\Models\ActivationAccountModel;
use App\Models\UserModel;
use App\Entities\UserEntity;
use CodeIgniter\I18n\Time;
use App\Entities\ActivationKeyEntity;
use App\Models\AcceptRegulationsModel;


class RegisterController extends BaseController
{
    private $uuid;
	public function __contruct(){
		helper(['url', 'form']);
		     
	}
	   
	public function index()
	{
        $validation = $this-> validate([]);

		$description = new RegulationModel();

		echo view("register.php",['validation'=>$this->validator, 'regulation' =>$description->getActiveRegulations()]);
	}
	public function saveUser(){
		$validation = $this-> validate([
			'email'=>[
				'rules'=>'required|valid_email|is_unique[users.email]',
				'errors'=>[
					'required'=> 'Email jest wymagany',
					'valid_email'=> 'Wprowadz poprawny email',
					'is_unique'=> "Wprowadz inny email",
			]
			],
			'date_of_birth'=>[
				'rules'=>'required',
				'errors'=>[
					'required'=>'Data urodzenia jest wymagana',
				]
				],
		    'password'=> [
				'rules'=>'required|min_length[6]|max_length[12]|matches[password]',
				'errors'=> [
					'required'=> 'Haslo jest wymagane',
					'min_length'=> ' Haslo musi miec co najmniej 6 znakow',
					'max_length'=> 'Haslo nie moze byc dluzsze niz 12 znakow',

			]
			],
			'password2'=> [
				'rules'=>'required|min_length[6]|max_length[12]|matches[password]',
				'errors'=> [
					'required'=> 'Haslo jest wymagane',
					'min_length'=> ' Haslo musi miec co najmniej 6 znakow',
					'max_length'=> 'Haslo nie moze byc dluzsze niz 12 znakow',
					'matches'=> 'Hasla nie sa takie same ', 
	
				]
				],

				'regulation'=>[
					'rules'=>'required',
					'errors'=>[
					'required'=>'Zaakaceptuj ten regulamin',
					]
					],
				
			
		
        ]);

		if (!$validation){
            $description = new RegulationModel();
			return view('register',['validation'=>$this->validator, 'regulation' =>$description->getActiveRegulations()]);

		}else{
			$email=$this->request->getPost('email');
			$date_birth=$this->request->getPost('date_of_birth');
			$password=$this->request->getPost('password');
		
			$values = [
				"email"=>$email,
				"date_of_birth"=>$date_birth,
				"password"=>Hash::make($password),
				
			];
			$userEntity = new UserEntity();
			$userEntity -> fill($values);
			$userModel = new  \App\Models\UserModel();
			$userModel->getLastId();
			$userEntity->setUserId($userModel->getLastId() +1 );
		
			if(!$userModel -> insert($userEntity) ){
				return view("info_page",['alert_type' =>'alert-danger',
                'header' =>'Operacja zakończona niepowodzeniem',
            	'message' => 'Nie udalo sie zarejestrowac. Kliknij przycisk ponizej i przejdz do ekranu rejestracji.',
			 	'direction'=> '/register '
			
			]);

			}
			else{
				return view("info_page",['alert_type' =>'alert-success',
                'header' =>'Operacja zakończona sukcesem',
                'message' => 'Poprawnie utworzono konto użytkownika, sprawdź skrzynkę 
                 pocztową w celu aktywowania konta Kliknij przycisk ponizej aby przejsc do ekranu logowania.' ,
				'direction'=> '/login '
		
			]);
			}
		}

	}
	
	public function activation($uuid){
		
	$userid= new ActivationAccountModel();

	$id_user=$userid->getIdUser($uuid); 

	$updatestatus=new UserModel();
	$updatestatus->setUserStatus($id_user);

	$expiredate=$userid-> getDateExpiration($id_user);

	$presentdate= new Time('now');

	$updatestatuslink= new ActivationAccountModel();
	$updatestatuslink->where('id_user',$id_user)->set(['is_used' => 1])->update();
	$updatestatuslink->where('id_user',$id_user)->set(['date_avtivation'=>$presentdate])->update();

	if($expiredate>=$presentdate){
        return view("info_page",['alert_type' =>'alert-success',
		'header' =>'Operacja zakończona sukcesem',
		'message' => 'Twoje konto zostało pomyslnie aktywowane. Kliknij przycisk ponizej i przejdz do ekranu logowania.',
		'direction'=> '/login '
   		 ]);
	}
	else {
		return view("info_page",['alert_type' =>'alert-danger',
		'header' =>'Operacja zakonczona niepowodzeniem ',
		'message' => 'Link aktywacyjny stracił ważnosć. Skontaktuj sie z administratorem celem ponownego wyslania linku aktywacyjnego ',
	    'direction'=> '/register'
    	]);
	}



}

}