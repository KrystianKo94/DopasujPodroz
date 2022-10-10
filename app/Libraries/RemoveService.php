<?php


namespace App\Libraries;

use App\Models\UserModel;
use App\Entities\UserEntity;
use CodeIgniter\Test\Fabricator;
use App\Libraries\Hash;


class RemoveService {
    public static function removeAccount($data,$email,$password){
         $userEnt= new UserEntity();
        $userEnt->setEmail($email);
        $userEnt->setpassword($password);
        $userremove=new UserModel();
        if($userremove->approveUser($userEnt)){
            $fabricator = new Fabricator(UserModel::class);
            $fakedata=$fabricator->makeArray();
            $fakeemail=$fakedata['email'];
            $fakepassword=$fakedata['password'];
            $fakename=$fakedata['name'];
            $fakesurname=$fakedata['surname'];
            $fakebirthdate=$fakedata['date_of_birth'];
            $fakeactivestatus=$fakedata['is_active'];
            $fakepassword=Hash::make($fakepassword);
            if($fakename==null||$fakesurname==null){
                $userremove->where('email',$email)->set(['email'=>$fakeemail,'password'=>$fakepassword, 'date_of_birth'=>$fakebirthdate, 'is_active'=>0]);
            }
            else {
                $userremove->where('email',$email)->set(['name'=>$fakename, 'surname'=>$fakesurname,'email'=>$fakeemail,'password'=>$fakepassword, 'date_of_birth'=>$fakebirthdate, 'is_active'=>0]);
            }
            $data=array(['success'=>true]);
            return  json_encode($data);
        }
        else {
            $data=array(['success'=>false]);
            return json_encode($data);
        }
	}
    }

