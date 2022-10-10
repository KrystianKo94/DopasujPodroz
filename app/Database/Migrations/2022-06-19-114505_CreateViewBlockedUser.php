<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateViewBlockedUser extends Migration
{
    public function up()
    {
        $prefix = $this->db->getPrefix();
        $sql = "CREATE view ".$prefix."advertisement_user_blocked AS SELECT 
	                    la.id_advertisement ,
	                    l.id_user,
	                    ld.id_driver ,
	                    l.name,
	                    l.surname 
                FROM 
	                ".$prefix."advertisement la join
	                ".$prefix."profile_driver ld on ld.id_driver = la.id_driver JOIN 
	                ".$prefix."users l on l.id_user = ld.id_user 
                WHERE 
	                l.is_active = 0 and 
	                la.go_date < NOW();";
        $this->db->simpleQuery($sql);
    }

    public function down()
    {
        $prefix= $this->db->DBPrefix;
        $sql ="DROP VIEW ".$prefix."advertisement_user_blocked;";
        $this->db->simpleQuery($sql);
    }
}
