<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\UserEntity;
use App\Models\UserModel;
use CodeIgniter\I18n\Time;
use App\Models\ResetModel;
use App\Entities\ResetPassEntity;
use Config\Services;

class ForgotPassowrdController extends BaseController
{

	function __construct(){
		$this->userModel = new UserModel();
		helper('text', 'url');
	}

	public function index(){
		$validation=$this->validate([]);
		echo view("forgot.php",['validation'=>$this->validator]);
	}
	
	public function changepass(){
		$validation=$this->validate([
			'email'=> [
				'rules'=>'required',
				'errors'=> [
					'required'=>  'Email  jest wymagany'
					 ]
				]
			]);
        if(!$validation){
            return view('forgot',['validation'=>$this->validator]);
        }
		else 
		    if ($this->request->getPost('email')){
		        $email=$this->request->getPost('email');

		        $findID= new UserModel();

                $checkemail= $findID->getCurrentId($email);

                $expiredate=new Time('now');
                $expiredate= $expiredate->addDays(7);

                $token=random_string('alnum',20);

                $userEntity= new ResetPassEntity();
                $userEntity->setIdUser($checkemail);

                $uniqueindex= $userEntity->getIdUser();

                $userEntity->setToken($token);
                $userEntity->getToken();
                $userEntity->setExpireDate($expiredate);
                $userEntity->getExpireDate();
                $resetmodel= new ResetModel();
				
		            if($uniqueindex>0){
		                $resetmodel->insert($userEntity);
		                $resetmodel->where('token',$token)->set(['is_used' => 1])->update();
		                $info =Services::PasswordTemplate($email,$token, $expiredate);
		                Services::PasswordEmail($email,  $info);
		                return view("info_page",['alert_type' =>'alert-success',
		                    'header' =>'Operacja zakończona Sukcesem',
		                    'message' => 'Link zostal przeslany na skrzynke pocztowa. Wejdz w link aby ukonczyc proces zmiany hasla. Kliknij przycisk ponizej aby wrocic do strony logowania.',
		                    'direction'=>'/login'
		                    ]);
                    }
		            else {
			            return view("info_page",['alert_type' =>'alert-danger'
	                            , 'header' =>'Operacja zakończona Niepowodzeniem',
		                        'message' => 'Nie udalo sie wyslac linku z resetowaniem hasla. Kliknij przycisk ponizej aby powrocic do ekranu resetowania hasla i sprobowac ponownie ',
		                        'direction'=>'/password'
		                ]);
		            }
	            }
            }
}
