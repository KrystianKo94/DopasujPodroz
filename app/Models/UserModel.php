<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\ActivationKeyEntity;
use App\Entities\RegulationEntity;
use App\Models\ActivationAccountModel;
use App\Entities\AcceptRegulationsEntity;
use App\Entities\UserEntity;
use App\Models\LoggingModel;
use Config\Services;
use CodeIgniter\Test\Fabricator;
use App\Libraries\Hash;


use Ramsey\Uuid\Uuid;
use CodeIgniter\I18n\Time;

class UserModel extends Model
{

	protected $DBGroup              = 'default';
	protected $table                = 'users';
	protected $primaryKey           = 'id_user';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'App\Entities\UserEntity';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['name','surname','email','date_of_birth','password','is_active','date_block','id_user'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'date_create';
	protected $updatedField         = 'date_modify';
	protected $deletedField         = 'deleted_at'; 

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = ['guidv4'];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function guidv4($data){
	    $id_user= $data['id'];
		$receiver= $data['data']['email'];  // wyswietlanie zawartosci konkretnej kolumny
		$uid_user = Uuid::uuid4();
		$presenttime =  new Time('now');
		$status = 1;
		$expirationtime  =  $presenttime-> addDays(7);
		$activateregulation= new ActivationKeyEntity();
		$activateregulation->setUserId($id_user);
		$activateregulation-> setUserUid($uid_user);
		$activateregulation-> setDateExpiration($expirationtime);
		$injectactivation= new ActivationAccountModel();
		$injectactivation-> insert($activateregulation);
		$regulation= new RegulationModel();
		$regulationvalue=$regulation->getIdActiveRegulations();
		$acceptregulation= new AcceptRegulationsEntity();
		$acceptregulation-> setUserId($id_user);
		$acceptregulation->setUserReg($regulationvalue);
		$acceptregulation ->setacceptstatus($status);
		$acceptregulation ->setdateaccept($presenttime);
		$acceptregulationmodel= new AcceptRegulationsModel();
		$acceptregulationmodel->insert($acceptregulation);
		$message =Services::ETemp($receiver,$expirationtime, $uid_user);
		Services::EmailSender($receiver,  $message);
    }

	public function setUserStatus($id_user){
    	$data= [ 'is_active' => 1 ];
	 	$this->update($id_user, $data);
	}

	public function setUserLogin($id_user){
		$data= [ 'logging_success' => 1];
		$this->update($id_user,$data);
	}

	public function approveUser($user){
		$userVerify=$this->where('email',$user->getEmail())->where('is_active', 1)->first();
		if(is_null($userVerify)){
			return false;
		}
		return $user->verifyPassword($userVerify->getPassword());
	}
	

	public function getCurrentId($email){
        $ID= new UserEntity();
        $ID=$this->where('email',$email)->first();
    	if(!is_null($ID)){
            return $ID->getIdUser();
   	 	}
		else{
		    return null;
		}
	}

	public function getLastId(): int {
        $entity=$this->orderBy("id_user", "DESC")->first();
        if($entity == null ){
            return 1;
        }
        return $entity->getIdUser();
	}

	public function getEmail($email){
        $mail= new UserEntity();
        $mail=$this->where('email',$email)->first();
        return  $mail->getEmail();
	}

	public function updatepassword($password,$myid){
        $data = ['password'=>$password];
        $this->update($myid,$data);
	}

	public function getBlockDate($email){
        $userentity= new UserEntity();
        $userentity=$this->where('email', $email)->first();
        if(!is_null($userentity)){
            return $userentity->getdateblock();
        }
        else{
            return null;
        }
	}

	public function isCompleteUser($idUser): bool  {
        $user=$this->where('id_user',$idUser)->first();
        if(empty($user->getUserName())|| is_null($user->getUserName())){
            return false;
        }
        return true;
	}


}

