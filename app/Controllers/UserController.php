<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\LoggingModel;
use App\Entities\UserEntity;
use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;
use App\Models\ActivationAccountModel;
use Config\Services;
use CodeIgniter\Test\Fabricator;
use App\Libraries\Hash;

class UserController extends BaseController {

	private $userModel;
	function __construct(){
		$this->userModel = new UserModel();
		helper('text');
	}

	public function index()	{
        $UrlCall=$this->request->getGet('callback');
        log_message('debug', 'Przekazanie 1=='.$UrlCall);
		$validation= $this->validate([]);
		echo view("login.php",['validation'=>$this->validator,'callback'=>$UrlCall]);
        
    }

 // bedzie cos 
    public function approveUser()
    {   
        $UrlCall=$this->request->getJsonVar('callback');
        $email=$this->request->getJsonVar('email');
        $password=$this->request->getJsonVar('password');
        
        Services::userAuthorization($UrlCall,$email,$password);

        
       
    }


	public function sendlinkview(){
		$validation= $this->validate([]);
		echo view("sendlink.php",['validation'=>$this->validator]);
	}

    public function changePassword(){
        echo view('admin/edit_password');
    }
	public function editpersonaldata(){
		echo view('/admin/edit_personal_data');
	}
    public function addpersonaldata(){
        $name=$this->request->getJsonVar('name');
        $surname=$this->request->getJsonVar('surname');
        $email=session()->get('email');
        $UsrModel=new UserModel();
        $UsrModel->where('email',$email)->set(['name'=>$name,'surname'=>$surname])->update();
        Services::setCustomDataInSession("is_complete",true);
        $data= array(['success'=>true]);
        return json_encode($data);
    }

	public function sendlink(){
		$validation= $this->validate([
			'email'=>[
				'rules'=>'required|valid_email',
				'errors'=>[
					'required'=> 'Email jest wymagany',
				]
				],
			]);

			if(!$validation){
				return view('sendlink',['validation'=>$this->validator]); 
			}
			else{
				if ($this->request->getPost('email')){
					$email=$this->request->getPost('email');

					$findID= new UserModel();

					$checkemail= $findID->getCurrentId($email);
					
					$activationaccountmodel= new ActivationAccountModel();

					$uid_user= $activationaccountmodel->getUserUid($checkemail);

					$link= base_url().'/activation/'.$uid_user;

					Services::EmailSender($email, $link);
				
			    }
	        }
        }


    public function getEditData(){
        
        return view("admin/edit_data_user");
    }
    public function getRemoveAccount(){
        
        $data=$this->request->getJsonVar('test');
        $email=session()->get('email');
        $password=$this->request->getJsonVar('password');
        Services::removeAccount($data,$email,$password);
    }
    public function removeUser(){
		echo view("/admin/remove_account");
    }

    public function logout(){
        session()->destroy();
        $controller = new MainController();
        return $controller->index();
    }

}



