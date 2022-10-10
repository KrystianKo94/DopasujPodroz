<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\DriverEntity;

class DriverModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'profile_driver';
    protected $primaryKey       = 'id_driver';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'App\Entities\DriverEntity';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_user','number_drive_lisense','description','id_driver'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'date_create';
    protected $updatedField  = 'date_modify';
    //protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function createDriver($id_user, $drivernumber,$description){
        $userEntity=new DriverEntity();
        $userEntity->setIdUser($id_user);
        $userEntity->setDriverNumber($drivernumber);
        $userEntity->setDriverDescription($description);

        $drivemodel=new DriverModel();
        if(is_null($this->searchDriverByIdUser($id_user))){
            $this->insert(['id_user'=>$id_user,'number_drive_lisense'=>$drivernumber, 'description'=>$description ]);
           
        }
       
    }

    public function searchDriverByIdUser($id_user){
        
       $user=$this->where('id_user',$id_user)->first();
        return $user;
        
    }
    public function getDescription($id_user){
        $description= new DriverEntity();
        $description= $this->where('id_user',$id_user)->first();
        if(!is_null($description)){
            return $description->getDriverDescription();
        }
        return null;
    }
    
    public function getDriverLicense($id_user){
        $license= new DriverEntity();
        $license=$this->where('id_user',$id_user)->first();
        if(!is_null($license)){
            return $license->getDriverNumber();
        }
        return null;
    }
    public function checkIfDriverIsComplete($idUser) : bool {
        $entity= new DriverEntity();
        $entity = $this->where('id_user',$idUser)->first();
        if(is_null($entity)){
            return false;
        }
        return true;
    }
    public function updateDriverData($id_user,$drivernumber,$description){
        $data=[
        'number_drive_lisense'=>$drivernumber,
        'description'=>$description,
        ]; 
        $DriveModel= new DriverModel();
        $DriveModel->update($id_user,$data);
    }
    public function getDriverId($id_user){
        $driverId= new DriverEntity();
        $driverId=$this->where('id_user',$id_user)->first();
        if(!is_null($driverId)){
            return $driverId->getIdDriver();
        }
        return null;
    }

    public function getStatus($id_driver){
        $status=$this->where('id_driver',$id_driver)->first();
        return $status->getAdvStatus();
    }
    public function getDriverEntity($id_user){
        $entity= new DriverEntity();
        $entity=$this->where('id_user',$id_user)->first();
        if(!is_null($entity)){
            return $entity;
        }
        return null;
    }

}
