<?php

namespace App\Libraries;

use App\Entities\AdvertisementEntity;
use App\Helpers\StaticQuery;
use App\Models\AdressesModel;
use App\Models\Advertisement;
use App\Models\VehiclesModel;
use App\Models\AdressFromModel;
use App\Models\AdressToModel;
use Config\Services;


class AdvertisementServices{

public static function getDetailAdvertisement($idTravel) :array{
    log_message('debug', "[AdvertisementService]::getDetailAdvertisement - Wyszukiwanie ogloszenia na podstawie id_travel:".$idTravel);
    $advertisementModel=new Advertisement();
    $advertisementEntity=new AdvertisementEntity();
    $vehicleModel=new VehiclesModel();
    $advertisementEntity= $advertisementModel->getAdvertisement($idTravel);
    if(empty($advertisementEntity) || is_null($advertisementEntity)){
        log_message('error','[AdvertisementService]::getDetailAdvertisement - Nie znaleziono danych o ogloszeniu:'.$idTravel);
        return array();
    }
    else{
       log_message('debug','[AdvertisementService]::getDetailAdvertisement - Znaleziono informacje o ogloszeniu o id_travel='.$idTravel);
       log_message('debug','[AdvertisementService]::getDetailAdvertisement : '.json_encode($advertisementEntity));
       return array(
           'car'=>$vehicleModel->getVehicle($advertisementEntity->getIdVehicle()),
           'start'=>$advertisementEntity->getStart(),
           'seats'=>$advertisementEntity->getSeats(),
           'luggage'=>$advertisementEntity->getLuggage(),
           'coast' => $advertisementEntity->getCost(),
           'id_addres_to'=>$advertisementEntity->getTo(),
           'id_addres_from'=>$advertisementEntity->getFrom()
       );
       }
}

public static function getAdvertisementWithLocation($idTravel){
    log_message('debug','[AdvertisementService]::getAdvertisementWithLocation - Wyszukiwanie ogloszenia na podstawie id_travel='.$idTravel);
    $baseData=self::getDetailAdvertisement($idTravel);
    array_push($baseData,array('latlangfrom'=>self::getIdAddress($baseData['id_addres_from'],'from')));
    array_push($baseData,array('latlangto'=>self::getIdAddress($baseData['id_addres_to'],'to')));
    log_message('debug','[AdvertisementService]::getAdvertisementWithLocation - Zwrocona wartosc wraz z elementami lokalizacyjnymi znajduje sie ponizej');
    log_message('debug',json_encode($baseData));
    return $baseData;


}

private static function getIdAddress($id,$type){
    $addressFrom= new AdressFromModel();
    $addressTo= new AdressToModel();
    $addressModel= new AdressesModel();
    $idAddres = 0;
    log_message('debug',"[AdvertisementService]::getIdAddress - Wyszukiwanie danych geolokalizacyjnych wg. typu=".$type);
    if($type == 'from'){
        log_message('debug',"[AdvertisementService]::getIdAddress - Wyszukiwanie danych adresu do");
        $idAddres=$addressFrom->getIdAdres($id);
        return Services::getGeoLocationFromAddresses($addressModel->getInformationGeoLocation($idAddres));
    }
    else{
        log_message('debug',"[AdvertisementService]::getIdAddress - Wyszukiwanie danych adresu z");
        $idAddres= $addressTo->getIdAdres($id);
        return Services::getGeoLocationFromAddresses($addressModel->getInformationGeoLocation($idAddres));
    }

 }

 public static function getActiveAdvertisementByGeoLocation($lat,$lon,$distance){
     $query = null;
     $row = null;
     $db = db_connect();
     $sql = StaticQuery::$SQL_ADVERT_BY_LOCATION;
     $sql = str_replace('%prefix%',$db->getPrefix(),$sql);
     $sql = str_replace('%lat%',$lat,$sql);
     $sql = str_replace('%lon%',$lon,$sql);
     $sql = str_replace('%distance%',$distance,$sql);
     log_message('debug',$sql);
     $query = $db->query($sql);
     $row = $query->getResult("array");
     if(isset($row)){
         log_message("debug","przekazane idiki ".json_encode($row));
         return $row;
     }
     return -1;
 }


}









