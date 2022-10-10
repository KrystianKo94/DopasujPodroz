<?php

namespace App\Libraries;

class LocationService
{
    private static $client;
    private static $configQuery;
    private static $url;

    public static function init()
    {
        static::$client  = \Config\Services::curlrequest();
        static::$configQuery =
            ['query' => [
                'addressdetails' => '1',
                'q'  => '',
                'format' => 'jsonv2',
                'limit' => '1' ],
                'user_agent' => 'Mozilla/5.0 (X11; Linux i686; rv:99.0) Gecko/20100101 Firefox/99.0'
            ];
        static::$client  = \Config\Services::curlrequest(static::$configQuery);
        static::$url= 'https://nominatim.openstreetmap.org/search';
    }

    public static function getPostCode($address){
        $detail = static::getResponseFromApi($address);
        if(!is_null($detail)){
            return $detail[0]->address->postcode;
        }
        return null;

    }

    private static function getResponseFromApi($address){
        try {
            log_message('debug','wprowadzony adres : '.self::makeReplaceAddress($address));
            if(is_null(static::$url)){
                static::init();
            }
           
            static::$configQuery['query']['q']=self::makeReplaceAddress($address);
            $response =static::$client->request("GET",static::$url,static::$configQuery);
            if($response ->getStatusCode() == 200){
                return json_decode($response ->getBody());
            }
            else{
                log_message('debug',"dupa");
                return null;
            }
        }
        catch(Exception $e) {
            die( 'Message: ' .$e->getMessage());
        }

    }

    public static function getGeoLocationFromAddress($address){
        $detail = static::getResponseFromApi($address);
        if(!is_null($detail)){
            return array('lat'=>$detail[0]->lat, 'lon' =>$detail[0]->lon );
        }
        return $detail;
    }
    
       private static function makeReplaceAddress($address){
        return str_replace("ul.","",$address);
    }

}