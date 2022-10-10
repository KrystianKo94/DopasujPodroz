<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateViewFullPlaceShow extends Migration
{
    public function up()
    {
        $prefix = $this->db->getPrefix();
        $sql = "CREATE view ".$prefix."Detail_Address AS Select  
	CONCAT(tmp.MIEJSCOWSC,', gmina ',tmp.GMINA,', powiat ',tmp.POWIAT,', województwo ',tmp.WOJEWODZTWO) FULL_NAME,
	tmp.MIEJSCOWSC PLACE
from(
Select 
 l.description MIEJSCOWSC,
(Select   l2.name_of_community  from ".$prefix."community l2 where l2.id_community = l.id_community and l2.id_district = l.id_district and l2.id_voivodeship = l.id_voivodeship limit 1) GMINA,
(SELECT l3.description  from ".$prefix."district l3 where l3.id_district = l.id_district and l3.id_voivodeship = l.id_voivodeship ) POWIAT,
(Select l4.description  from ".$prefix."voivodeship l4 where l4.id_voivodeship = l.id_voivodeship) WOJEWODZTWO
FROM ".$prefix."place l ) tmp";
        $this->db->simpleQuery($sql);
    }

    public function down()
    {
        $prefix= $this->db->DBPrefix;
        $sql ="DROP view ".$prefix."Detail_Address;";
        $this->db->simpleQuery($sql);
    }
}
