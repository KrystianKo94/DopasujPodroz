<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailAdvertView extends Migration
{
    public function up()
    {
       $prefix= $this->db->DBPrefix;
        $sql = "CREATE view ".$prefix."Advert_View AS SELECT
        tmp.id_advertisement, 
	    tmp.SEAT - tmp.RESERVATION + tmp.CANCEL_RES RESERVATION_TO_SEAT,
	    tmp.luggage_size - tmp.LUGGAGE_RES + tmp.LUGGAGE_CANCEL LUGGAGE_TO_RESERVATION 
        FROM (
        SELECT
	    l.id_advertisement ,
	    l.seats_amount  SEAT,
	    NVL((Select SUM(l2.capity)  from ".$prefix."reservation l2 where l2.id_advertisement = l.id_advertisement),0) RESERVATION,
	    NVL((Select l3.capity  from ".$prefix."cancel_reservation lrs join ".$prefix."reservation l3 on lrs.id_reservation = l3.id_reservation where l3.id_advertisement = l.id_advertisement),0) CANCEL_RES,
	    l.luggage_size,
	    NVL((Select SUM(l2.capity_of_trunk)  from ".$prefix."reservation l2 where l2.id_advertisement = l.id_advertisement),0) LUGGAGE_RES,
	    NVL((Select SUM(l3.capity_of_trunk) from ".$prefix."cancel_reservation lrs join ".$prefix."reservation l3 on lrs.id_reservation = l3.id_reservation where l3.id_advertisement = l.id_advertisement),0) LUGGAGE_CANCEL
    FROM 
	".$prefix."advertisement l ) tmp;";
        $this->db->simpleQuery($sql);
    }

    public function down()
    {
         $prefix= $this->db->DBPrefix;
        $sql ="DROP view ".$prefix."Advert_View;";
        $this->db->simpleQuery($sql);
    }
}
