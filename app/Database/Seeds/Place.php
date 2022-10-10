<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use function PHPUnit\Framework\isEmpty;

class Place extends Seeder
{
	public function run()
	{
        $count =1;
        $table = $this->db->DBPrefix ;

        if (($handle = fopen("./SIMC_Adresowy_2022-02-05.csv",'r')) !== FALSE) {
            while (($data = fgetcsv($handle,0,";")) !== FALSE) {
                print_r($data);
                if($count>1){
                    $this->db->simpleQuery("INSERT INTO " .$table."place (id_district,id_voivodeship,description,id_community,SYM,SYMPOD) VALUES(".$data[1].",".$data[0].",'".$data[6]."',".$data[2].",".$data[7].",".$data[8].")");
                }
                $count++;
            }
        }

	}
}
