<?php

namespace App\Libraries;

use App\Entities\InstantMessenegerEntity;
use App\Entities\MessageEntity;
use App\Entities\UserEntity;
use App\Models\InstantMesseneger;
use App\Models\MessageModel;
use App\Models\TripDedailsModel;
use App\Models\UserModel;
use CodeIgniter\Session\Session;
use Config\Services;

class MessengerService
{
    public static function createMessage($idAdvertisement, $message){
        log_message("debug","[MessengerService::createMessage] - Tworzenie nowej konwersjacji pomiędzy użytkownikami");
        $instantMessenger = new InstantMesseneger();
        $instantMessengerEntity = new InstantMessenegerEntity();
        $advertisementDetail = new TripDedailsModel();
        $userModel = new UserModel();
        $advertisement = $advertisementDetail->getSpecificAdvert($idAdvertisement);
        $idUserRecipient = $userModel->getCurrentId($advertisement->getUserName());
        $idInstantMessenger=0;
        if($instantMessenger->conversationIsCreate(Services::getIdUser(),$idUserRecipient,$idAdvertisement)){
            $idInstantMessenger=$instantMessenger->getIdInstantMessenger(Services::getIdUser(),$idUserRecipient,$idAdvertisement);
            self::createMessageText(Services::getIdUser(),$idUserRecipient,$idInstantMessenger,$message);
        }
        else{
            $instantMessengerEntity->setIdAdvertisement($idAdvertisement);
            $instantMessengerEntity->setIdUserRecipient($idUserRecipient);
            $instantMessengerEntity->setIdUserSender(Services::getIdUser());
            $instantMessengerEntity->setIsRemoveDriver(0);
            $instantMessengerEntity->setIsRemoveUser(0);
            $idInstantMessenger=$instantMessenger->saveInstantMesseneger($instantMessengerEntity);
            self::createMessageText(Services::getIdUser(),$idUserRecipient,$idInstantMessenger,$message);
        }
    }


    public static function createMessageText($idUserSender,$idUserRecipient,$idInstantMessenger,$message){
        log_message("debug","[MessengerService::createMessageText] - Tworzenie wpisu w wiadomościach");
        $messageModel = new MessageModel();
        $messageEntity = new MessageEntity();
        $messageEntity->setIdUserSender($idUserSender);
        $messageEntity->setIdUserRecipient($idUserRecipient);
        $messageEntity->setIdInstantMessenger($idInstantMessenger);
        $messageEntity->setMessage($message);
        $messageEntity->setIsRemoveRecipient(0);
        $messageEntity->setIsRemoveSender(0);
        $messageModel->createMessage($messageEntity);
    }
}
?>