<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TravelModel;
use App\Models\TripDedailsModel;
use App\Models\Advertisement;
use Config\Services;
use App\Models\SummaryAdvertisement;

class AnnouncementController extends BaseController
{
	public function index($idAdvertisement)
	{
            $tripDetailsModel=new TripDedailsModel();
            $details=$tripDetailsModel->getSpecificAdvert($idAdvertisement);
            $advert= new Advertisement();
            $carData=$advert->getAdvertisement($idAdvertisement);
            $startLatLang = Services::getGeoLocationFromAddresses($details->getFromPlace());
            $endLatLang = Services::getGeoLocationFromAddresses($details->getToPlace());
            $summaryAdvert = new SummaryAdvertisement();
            $freeDataToUser = $summaryAdvert->getDataById($idAdvertisement);
            return  view("detail_page",[
                'trip'=>$details,
                'tripData'=>$carData,
                'start'=> $startLatLang,
                'end' => $endLatLang,
                'free_data' => $freeDataToUser,
                'token' => csrf_hash()
            ]);
	}
    public function filterData(){
        log_message("debug","Funkcja filterData");
        $namePlace = $this->request->getJsonVar("name_place");
        $geoLocation = Services::getGeoLocationFromAddresses($namePlace);
        $idsAdvertisement = Services::getActiveAdvertisementByGeoLocation($geoLocation["lat"],$geoLocation["lon"],10);
        $travelModel=new TravelModel();
        $simpleArray = Services::getSimpleArrayFromArray($idsAdvertisement,"id_advertisement");
        $data = $travelModel->getTravelByIds($simpleArray);
        return json_encode(["advertisement" => $data,'token' => csrf_hash() ]);
       // log_message("debug",json_encode($idsAdvertisement[1]));
    }
        
}
