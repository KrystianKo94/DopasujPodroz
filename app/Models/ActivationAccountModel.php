<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\ActivationKeyEntity;
use Ramsey\Uuid\Uuid;
use App\Models\UserModel;



class ActivationAccountModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'activation_accont';
	protected $primaryKey           = 'id_activation';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'App\Entities\ActivationKeyEntity';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id_user','activate_code', 'date_avtivation','date_expiration', 'is_used', 'date_create'];

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
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function getIdUser($uuid){
		$activationKeyEntity= $this->where('activate_code',$uuid)->first();
		return $activationKeyEntity->getUserId();

	}
	public function getDateCreate($id_user){
        $activationKeyEntity=$this->where('id_user',$id_user)->first();
		return $activationKeyEntity->getCreateDate();
	}
	public function getDateExpiration($id_user){
        $activationKeyEntity= $this->where('id_user', $id_user)->first();
		return $activationKeyEntity->getDateExpiration();
	}
	
	public function getDateExpiration2($id_user){
        $activationKeyEntity=$this->where('id_user', $id_user)->first();
		return $activationKeyEntity-> getDateExpiration();
	}
	public function setUserActive($id_user){
		$changestatus=new ActivationAccountModel();
		$data=[ 
		'is_used' => 1
		];
 		$changestatus->update($id_user, $data);
	}
	public function getUserUid($checkemail){
        $activationKeyEntity= $this->where('id_user',$checkemail)->first();
		return $activationKeyEntity->getUserUid();
	}

}