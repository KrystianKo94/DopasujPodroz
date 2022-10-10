<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\ResetPassEntity;

class ResetModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'reset_pass';
	protected $primaryKey           = 'id_password';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'App\Entities\ResetPassEntity';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id_user','token','is_used','date_expiration'];

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

	public function getIdUser($token){
		$id_usr=new ResetPassEntity();
		$id_usr=$this->where('token', $token)->first();
		return $id_usr->getIdUser();
	}
}
