<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Street extends Seeder
{
	public function run()
	{
        $table = $this->db->DBPrefix ;
        $count =1;
        if (($handle = fopen("./ULIC_Adresowy_2022-04-08.csv",'r')) !== FALSE) {
            while (($data = fgetcsv($handle,0,";")) !== FALSE) {
                print_r($data);
                if($count>1){
                    $data =
                        array(
                            "id_voivodeship" =>$data[0],
                            "id_district" => $data[1],
                            "id_community" => $data[2],
                            "type" => $data[3],
                            "SYM" => $data[4],
                            "SYM_UL" => $data[5],
                            "feature" => $data[6],
                            "name1" => $data[7],
                            "name2" => $data[8],

                        );
                    $this->db->table($table.'street')->insert($data);
                   // $this->db->simpleQuery('INSERT INTO ' .$table.'street (,id_district,id_community,type,SYM,SYM_UL,feature,name1,name2) VALUES("'."'.$data[0].'","'.$data[1].'"',$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8])');
                }
                $count++;
            }
        }
	}
}
