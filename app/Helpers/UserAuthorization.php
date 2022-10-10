<?php



namespace App\Helpers;

use App\Models\UserModel;
use App\Models\LoggingModel;
use App\Entities\UserEntity;
use Config\Services;
use CodeIgniter\I18n\Time;


class UserAuthorization {
      public static function userAuthorization($UrlCall,$email,$password)  {
      
        log_message('debug', 'Przekazanie 2=='.$UrlCall);
        log_message('debug', 'Przekazanie 2=='.$email);
        log_message('debug', 'Przekazanie 2=='.$password);
     
            $userEntity = new UserEntity();
            //$userEntity->setEmail($this->request->getPost('email'));
           // $userEntity->setPassword($this->request->getPost('password'));
            $userEntity->setEmail($this->request->getJsonVar('email'));
            $userEntity->setPassword($this->request->getJsonVar('password'));

            $email = $userEntity->getEmail();

            $userLogModel = new UserModel();

            $blockdate = $userLogModel->getBlockDate($email);

            $Id_user = $userLogModel->getCurrentId($email);
            
            $loggingmodel = new LoggingModel();
            

            $unlockdate = new Time('now');

            $userLogModel->where('id_user', $Id_user)->set(['date_block' => NULL])->update();

            if ($this->userModel->approveUser($userEntity) && $blockdate == NULL) {

              //  $session = session();
              //  $session->set(['email' => $userEntity->getEmail(), 'logged_in' => true]);
                $loggingmodel->insert(['id_user' => $Id_user, 'login_success' => true]);
               // $this->setUser($Id_user, $email,$this->userModel->isCompleteUser($Id_user));
                Services::createSession($Id_user, $email,$this->userModel->isCompleteUser($Id_user));
                return json_encode(array('callback'=>$UrlCall,'isSuccess'=>true, 'token'=>csrf_hash()));
               

             } else {
                if ($Id_user > 0 && $blockdate == NULL) {
                    $loggingmodel->insert(['id_user' => $Id_user, 'login_success' => false]);
                    $loggingmodel->SearchLogggingPoints($Id_user);
                    return json_encode(array('isSuccess'=>false, 'token'=>csrf_hash()));

                   

                } else {
                    if ($Id_user > 0 && $blockdate != NULL && $unlockdate <= $blockdate) {
                        $loggingmodel->insert(['id_user' => $Id_user, 'login_success' => false]);
                        $loggingmodel->SearchLogggingPoints($Id_user);
                        return json_encode(array('isBlock'=>true, 'token'=>csrf_hash()));

                       
                        }
                     else {
                        if ($Id_user > 0 && $blockdate != NULL && $unlockdate >= $blockdate) {
                            $loggingmodel->insert(['id_user' => $Id_user, 'login_success' => true]);
                            $loggingmodel->SearchLogggingPoints($Id_user);
                            
                            $userLogModel->where('id_user', $Id_user)->set(['date_block' => NULL])->update();
                            //$this->setUser($Id_user, $email,$this->userModel->isCompleteUser($Id_user));
                            Services::createSession($Id_user, $email,$this->userModel->isCompleteUser($Id_user));
                            return json_encode(array('callback'=>$UrlCall,'isSuccess'=>true, 'token'=>csrf_hash()));
                          
                        }
                          else {
                            if (is_null($Id_user)) {
                                return json_encode(array('isExist'=>true, 'token'=>csrf_hash()));
                               
                            }
                        }

                    }

                }

            }
       
    }
    
}
