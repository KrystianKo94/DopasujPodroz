<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetailAddressModel;
use Config\Services;

class GeoLocationController extends BaseController
{
    public function index()
    {
        $detail = Services::getPostCode('Rynek 1, Sieniawa');
        echo print_r($detail);
    }
    public function getPostCode()
    {
        $place = $this->request->getJsonVar('place');
        $street = $this->request->getJsonVar('street');
        $number = $this->request->getJsonVar('number_apartment');
        $addresses =$street.' '.$number.', '.$place;
        $testGeo = Services::getPostCode($addresses);
        echo json_encode( ['zip_code'=>$testGeo,'token' => csrf_hash()]);
    }

    public function getLatLong(){
        $place = $this->request->getJsonVar('place_start');
        $street = $this->request->getJsonVar('street_start');
        $number = $this->request->getJsonVar('number_apartment_start');
        $address =$street.' '.$number.', '.$place;
        $locationStart = Services::getGeoLocationFromAddresses($address);
        $place = $this->request->getJsonVar('place_end');
        $street = $this->request->getJsonVar('street_end');
        $number = $this->request->getJsonVar('number_apartment_end');
        $address =$street.' '.$number.', '.$place;
        $locationEnd = Services::getGeoLocationFromAddresses($address);
        echo json_encode( ['start_geo'=>$locationStart,'end_geo'=>$locationEnd,'token' => csrf_hash()]);

    }
    
     public function findLocationByText(){
       $nameSearch = $this->request->getJsonVar("name_place");
       $detailAddress = new DetailAddressModel();
       $data = $detailAddress->getFullAddressByText($nameSearch);
       log_message("debug",json_encode($data));
       echo json_encode(["data_seach" => $data]);
    }
}
