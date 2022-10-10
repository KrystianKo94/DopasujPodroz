<?php

namespace App\Models;

use App\Entities\RegulationEntity;
use CodeIgniter\Model;

class RegulationModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'regulations';
	protected $primaryKey           = 'id_regulation';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'App\Entities\RegulationEntity';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id_regulation','description_pl','date_create'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
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

	
	public function getActiveRegulations(){
		$activeregulation= new RegulationEntity();
		$activeregulation= $this->where( 'is_active', 1 )-> first();

		return $activeregulation->getDescription();
	}
	
	 public function getIdActiveRegulations(){
		
		$idregulation= new RegulationEntity();
		$idregulation= $this->where('is_active', 1)->first();

		return $idregulation->getUserReg();
	} 
	
	


		
	
}

