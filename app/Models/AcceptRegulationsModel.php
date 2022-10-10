<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\AcceptRegulationsEntity;

class AcceptRegulationsModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'accept_regulations';
	protected $primaryKey           = 'id_accept';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'App\Entities\AcceptRegulationsEntity';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id_regulation', 'id_user', 'data_accept', 'is_accept',];

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



}
