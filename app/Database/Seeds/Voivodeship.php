<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use function PHPUnit\Framework\isEmpty;

class Voivodeship extends Seeder
{
	public function run()
	{
        $count =1;
        $table = $this->db->DBPrefix ;

        if (($handle = fopen("./wojewodztwa.csv",'r')) !== FALSE) {
            while (($data = fgetcsv($handle,0,";")) !== FALSE) {
                print_r($data);
                if($count>1){
                    $this->db->query("INSERT INTO " .$table."voivodeship (id_voivodeship,description) VALUES(:0:,:1:)", $data);
                }
                $count++;
            }
        }

	}
}

