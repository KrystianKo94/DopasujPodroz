<?php

namespace App\Models;

use CodeIgniter\Model;

class DistrictModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'district';
	protected $primaryKey           = 'id_district';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'App\Entities\DistrictEntity';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id_district','id_voivodeship','description'];

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

    public function getDistrictByIdVoivodeship($idVoivodeship){
        log_message('debug','ID = '.$idVoivodeship);
        return $this->where('id_voivodeship',$idVoivodeship)->findAll();
    }

}
