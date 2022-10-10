<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\AdressEntity;

class AdressesModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'addresses';
	protected $primaryKey           = 'id_address';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'App\Entities\AdressEntity';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['voivodeship','district','commune','place','street','zip_code','number_apartment','lat','lon'];

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

	public function setLocationFirst($data){
        $LocEntity= new AdressEntity();
        $LocEntity->setVoivodeship($data['voi']);
        $LocEntity->setDistrict($data['dis']);
        $LocEntity->setCommune($data['com']);
        $LocEntity->setPlace($data['pla']);
        $LocEntity->setStreet($data['str']);
        $LocEntity->setZipCode($data['zip']);
        $LocEntity->setNumber($data['num']);
        $id=$this->insert($LocEntity);
        log_message('debug', 'Dodano adres id_adresu='.$id);
        return $id;
	}

	public function getIdAdressFrom($idFrom){
		$IdAdressEntity= new AdressEntity();
		$IdAdressEntity=$this->where('voivodeship',$idFrom)->first();
		return $IdAdressEntity->getIdAdress();
	}

	public function getLocation($id_adres){
        $Location= $this->where('id_address',$id_adres)->first();
        return $Location;
    }

    public function getInformationGeoLocation($idAddress){
        $address= $this->where('id_address',$idAddress)->first();
        return $address->getAddressFull();
    }
    
     public function updateLatLon($id,$lat,$lon){
        $this->update($id,array('lat' =>$lat,'lon'=>$lon));
    }

    public function updateLatLon($id,$lat,$lon){
        $this->update($id,array('lat' =>$lat,'lon'=>$lon));
    }

}
