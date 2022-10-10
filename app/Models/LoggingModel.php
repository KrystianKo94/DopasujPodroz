<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\LoggingEntity;
use App\Models\UserModel;
use App\Entities\UserEntity;
use App\Entities\ActivationKeyEntity;
use App\Models\ActivationAccountModel;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\I18n\Time;



class LoggingModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'login';
	protected $primaryKey           = 'id_login';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'App\Entities\LoggingEntity';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id_user', 'login_success'];

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
	protected $beforeInsert        	= [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
	

	public function SearchLogggingPoints ($Id_user){
		$delaytime =  new Time('now');
		$unlocktime =$delaytime ->addMinutes(60);
		$previousetime  =  $delaytime-> subMinutes(30);
		$points= null;
		$points=  $this->groupStart()->where('id_user', $Id_user)->where('login_success', false)->where('date_create>',$previousetime)->groupEnd()->countAllResults();
		if($points>=3){
			$usermodel= new UserModel();
			$data=[ 
			'date_block' => $unlocktime,
			];
			$usermodel-> update($Id_user, $data);
		}
	}

}
	
	





	


	


		
	
	


