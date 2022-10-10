<?php

namespace App\Libraries;

class ArrayConvert
{
    public static function convertArrayToSimpleArray($array,$nameObject){
        $simpleArray = array();
        foreach($array as $row){
            array_push($simpleArray,$row[$nameObject]);
        }
        return $simpleArray;
    }
}