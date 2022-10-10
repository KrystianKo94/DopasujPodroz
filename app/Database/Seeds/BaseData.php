<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BaseData extends Seeder
{
	public function run()
	{
        $count =1;
        $table = $this->db->DBPrefix ;
        if (($handle = fopen("./dane_podstawowe_adres.csv",'r')) !== FALSE) {
            while (($data = fgetcsv($handle,0,";")) !== FALSE) {
               if($count>1){
                   print_r($data);
                   if($data[5] == "województwo"){
                        $this->db->query("INSERT INTO " .$table."voivodeship (id_voivodeship,description) VALUES(".$data[0].",'".$data[4]."')");
                       // $this->db->query("INSERT INTO " .$table."voivodeship (id_voivodeship,description) VALUES(".$data[0].",".$data[4].")");
                      // $this->db->query("INSERT INTO " .$table."voivodeship (id_voivodeship,description) VALUES('".$data[0]."','".$data[4]."')");
                     //  $this->db->simpleQuery("INSERT INTO " .$table."voivodeship (id_voivodeship,description) VALUES('".$data[0].'","'.$data[4]."')");
                    }
                    if($data[5] == "powiat" || $data[5] == "miasto na prawach powiatu" ){//miasto na prawach powiatu
                        $this->db->simpleQuery("INSERT INTO " .$table."district (id_district,id_voivodeship,description) VALUES('".$data[1]."','".$data[0]."','".$data[4]."')");
                    }
                    if( !empty($data[3])){//
                        $this->db->query("INSERT INTO " .$table."community (id_community,id_district,id_voivodeship,name_of_community,description,type) VALUES('".$data[2]."','".$data[1]."','".$data[0]."','".$data[4]."','".$data[5]."','".$data[3]."')");
                    }
                }
                $count++;
            }
        }
	}
}
