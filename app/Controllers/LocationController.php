<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DistrictModel;
use App\Models\CommunityModel;
use App\Models\PlaceModel;
use App\Models\StreetModel;

class LocationController extends BaseController
{
	public function index()
	{
		//
	}

    public function listDistrict(){
        $idVoivodeship = $this->request->getJsonVar('id_voivodeship');
        $model = new DistrictModel();
        $data = $model->getDistrictByIdVoivodeship($idVoivodeship);
        echo json_encode(['districts'=>$model->getDistrictByIdVoivodeship($idVoivodeship),'token' => csrf_hash()]);
    }

    public function listCommunities(){
        $idVoivodeship = $this->request->getJsonVar('id_voivodeship');
        $idDistrict = $this->request->getJsonVar('id_district');
        $CommunityModel = new CommunityModel();
        $data = $CommunityModel->getCommunitybyVoiDis($idVoivodeship,$idDistrict);
        echo json_encode(['community'=>$CommunityModel->getCommunitybyVoiDis($idVoivodeship,$idDistrict),'token' => csrf_hash()]);

    }

    public function listPlaces(){
        $idVoivodeship = $this->request->getJsonVar('id_voivodeship');
        $idDistrict = $this->request->getJsonVar('id_district');
        $idCommunity =$this->request->getJsonVar('id_community');
        $PlaceModel = new PlaceModel();
        $data = $PlaceModel->getPlacebyVoiDisPla($idVoivodeship,$idDistrict,$idCommunity);
        echo json_encode(['place'=>$PlaceModel->getPlacebyVoiDisPla($idVoivodeship,$idDistrict,$idCommunity),'token' => csrf_hash()]);

    }

    public function listStreet(){
        $idVoivodeship = $this->request->getJsonVar('id_voivodeship');
        $idDistrict = $this->request->getJsonVar('id_district');
        $idCommunity =$this->request->getJsonVar('id_community');
        $StreetModel = new StreetModel();
        $data = $StreetModel->getStreetbyVoiDisCom($idVoivodeship,$idDistrict,$idCommunity);
        echo json_encode(['street'=>$StreetModel->getStreetbyVoiDisCom($idVoivodeship,$idDistrict,$idCommunity),'token' => csrf_hash()]);

    }
    public function tripinformation(){
        $car= $this->request->getJsonVar('car');
        $datetrip=$this->request->getJsonVar('date_start');
        $seatsnumber=$this->request->getJsonVar('number_of_field');
        log_message('debug', 'taki chuj');
        echo json_encode(['selected_car'=>$car, 'date_time'=>$datetrip,'free_place'=>$seatsnumber,'token' => csrf_hash()]);
    }
}
