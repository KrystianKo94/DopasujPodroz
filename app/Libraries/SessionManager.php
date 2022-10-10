<?php

namespace App\Libraries;

use App\Models\DistrictModel;
use App\Models\DriverModel;
use Config\Services;

class SessionManager {
    public static function createSession ($idUser, $email, $complete) {
        log_message("debug", "[SessionManager]::createSession: Tworzenie nowej sesji użytkownika o id = ".$idUser);
        $driverModel = new DriverModel();
        $idDriver = $driverModel->getDriverId($idUser);
        $data =
            ['id_user' => $idUser,
             'email' => $email,
             'isLoggedIn' => true,
             'is_complete' => $complete,
             'id_driver' => $idDriver
            ];
        session()->set($data);
    }

    public static function getIdUser(){
        return session()->get('id_user');
    }

    public static function getIdDriver(){
        return session()->get('id_driver');
    }

    public static function setCustomDataInSession($name,$data){
        log_message("debug", "[SessionManager]::setCustomDataInSession: Ustawianie parametru ".$name." = ".$data." użytkownika o id = ".SessionManager::getIdUser());
        session()->set($name,$data);
    }

    public static function userIsDriver(){
        log_message("debug", "[SessionManager]::setCustomDataInSession: Sprawdzanie, czy użytkownik o id użytkownika = ".Services::getIdUser()." ma uzupełniony profil kierowcy");
        if(is_null(Services::getIdDriver())){
            log_message("debug", "[SessionManager]::setCustomDataInSession: Użytkownik nie ma uzupełnionego profilu kierowcy");
            return false;
        }
        log_message("debug", "[SessionManager]::setCustomDataInSession: Użytkownik ma uzupełniony profil kierowcy");
        return true;
    }

    public static function sessionIsSet() : bool{
        log_message("debug", "[SessionManager]::sessionIsSet: Sprawdzanie, czy sesja jest ustawiona");
        return  session()->has("id_user");
    }
}