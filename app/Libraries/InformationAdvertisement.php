<?php

namespace App\Libraries;

use App\Helpers\StaticQuery;

class InformationAdvertisement
{
        public static function getAdvertisementDriver ($idDriver){
            log_message('debug', "[InformationAdvertisement]::getAdvertisementDriver - Wyszukiwanie ogloszenia na podstawie id kierowcy =".$idDriver);
            $db = db_connect();
            $sql = StaticQuery::$SQL_ADVERCITEMENT;
            $sql = str_replace('%prefix%',$db->getPrefix(),$sql);
            log_message('debug',"[InformationAdvertisement]::getAdvertisementDriver - Wykonane zapytanie:\n".$sql);
            $query=$db->query($sql, [$idDriver]);
            $row = $query->getResult();
            if (isset($row)) {
               return $row;
            }
            return  array();
        }
}