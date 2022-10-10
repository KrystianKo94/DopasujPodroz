<?php

namespace Config;

use App\Libraries\DriverService;
use App\Libraries\InformationAdvertisement;
use App\Libraries\MessengerService;
use App\Libraries\ReservationService;
use App\Libraries\SessionManager;
use App\Libraries\VehicleService;
use CodeIgniter\Config\BaseService;
use	App\Helpers\EmailTemplate;
use App\Helpers\SendEmail;
use App\Helpers\PasswordEmail;
use App\Helpers\PasswordTemplate;
use App\Libraries\LocationService;
use App\Libraries\AdvertisementServices;
use App\Helpers\UserAuthorization;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This file holds any application-specific services, or service overrides
 * that you might need. An example has been included with the general
 * method format you should use for your service methods. For more examples,
 * see the core Services file at system/Config/Services.php.
 */
class Services extends BaseService
{

	
	// public static function example($getShared = true)
	// {
	//     if ($getShared)
	//     {
	//         return static::getSharedInstance('example');
	//     }
	//
	//     return new \CodeIgniter\Example();
	// }

	public static function EmailSender($receiver, $message) {
			return SendEmail::SendEmail($receiver,$message);
    }

	public static function PasswordTemplate($email,$token,$expirationdate){
	 return PasswordTemplate::PasswordTemp($email,$token,$expirationdate);
	}

	public static function PasswordEmail($email, $info){
		return PasswordEmail::SendPasswordEmail($email,$info);
    }

	public static function ETemp($receiver,$expirationtime, $uid_user) {
	    return EmailTemplate::EmailTemp($receiver,$expirationtime, $uid_user);
    }

    public static function getPostCode($addresses){
        return LocationService::getPostCode($addresses);
    }

    public static function getGeoLocationFromAddresses($addresses){
        return LocationService::getGeoLocationFromAddress($addresses);
    }
    public static function getAdvertisementDriver(){
        return InformationAdvertisement::getAdvertisementDriver(Services::getIdDriver());
    }

	public static function getAdvertisementDetail($idTravel) :array{
		return AdvertisementServices::getDetailAdvertisement($idTravel);
	}

	public static function getAdvertisementWithLocation($idTravel) :array{
		return AdvertisementServices::getAdvertisementWithLocation($idTravel);
	}

    public static function createSession($idUser,$email,$complete){
            SessionManager::createSession($idUser,$email,$complete);
    }

    public static function getIdUser(){
        return SessionManager::getIdUser();
    }

    public static function getIdDriver(){
        return SessionManager::getIdDriver();
    }

    public static function createReservation($request){
        $reservation = new ReservationService();
        return $reservation->createReservation($request);
    }

    public static function setCustomDataInSession($name,$value){
        SessionManager::setCustomDataInSession($name,$value);
    }
    public static function getDriverData(){
        $driverService = new DriverService();
        return $driverService->getDriverData();
    }
    public static function createDriver($driverNumber,$description) : bool{
        $driverService = new DriverService();
        return $driverService->createDriver($driverNumber,$description);
    }
    public static function userIsDriver():bool{
       return SessionManager::userIsDriver();
    }

    public static function getVehiclesDriver(){
        $vehicleService = new VehicleService();
        return $vehicleService->getCarsDriver();
    }

    public static function sessionIsSet(){
        return SessionManager::sessionIsSet();
    }

    public static function createMessage($idAdvertisement, $message){
        MessengerService::createMessage($idAdvertisement, $message);
    }
    
    public static function userAuthorization($UrlCall,$email,$password){
        UserAuthorization::userAuthorization($UrlCall, $email, $password);
    }
    
    public static function removeAccount($data,$email,$password){
        RemoveService::removeAccount($data,$email,$password);
    }
    
    public static function switchStatus($status,$idTravel){
        TripStatusService::switchStatus($status,$idTravel);
    }
    
    public static function updateDetailsDataTrip($idUser,$coast,$idAdvertisement){
        UpdateTripDetailsDataService::updateDetailsDataTrip($idUser,$coast,$idAdvertisement);
    }

}
