<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdvertisementsView extends Migration
{
    public function up()
    {
        $prefix= $this->db->DBPrefix;
        $sql = "CREATE view ".$prefix."allAdvertisements AS SELECT 
	(if (adr.street is null, CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(adr.place,''),' '),adr.number_apartment),' '),', '),adr.zip_code),' '),adr.place),CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(' ul. ',adr.street),' '),adr.number_apartment),' '),adr.place),', '),adr.zip_code),' '),adr.place))) address_to,
	(if (adr2.street is null, CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(adr2.place,''),' '),adr2.number_apartment),' '),', '),adr2.zip_code),' '),adr2.place),CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(' ul. ',adr2.street),' '),adr2.number_apartment),' '),adr2.place),', '),adr2.zip_code),' '),adr2.place))) address_from,
	adv.id_advertisement,
	adv.to_date,
	adv.go_date,
	CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(veh.brand ,' '),veh.model),' '),veh.`type`),' '),veh.power),' km, rok produkcji'),veh.year_of_production)  AS car
    From
	".$prefix."advertisement adv join
	".$prefix."addresses_to adrt on adrt.id_address_to = adv.id_address_to JOIN
	".$prefix."addresses_from adrf on adrf.id_address_from = adv.id_address_from JOIN
	".$prefix."addresses adr on adr.id_address = adrt.id_address JOIN
	".$prefix."addresses adr2 on adr2.id_address = adrf.id_address JOIN
	".$prefix."vehicle veh on veh.id_vehicle=adv.id_vehicle;";
       $this->db->simpleQuery($sql);

    }

    public function down()
    {
        
        $sql ="DROP view AdvertisementsView;";
        $this->db->simpleQuery($sql);
    }
}
