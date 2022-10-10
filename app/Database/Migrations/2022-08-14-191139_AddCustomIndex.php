<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCustomIndex extends Migration
{
    public function up()
    {
        $prefix = $this->db->getPrefix();
        $sql = "ALTER TABLE ".$prefix."community ADD INDEX community_index (`id_community`,`id_district`,`id_voivodeship`) ";
        $this->db->simpleQuery($sql);
        $sql = "ALTER TABLE ".$prefix."district ADD INDEX district_index (`id_district`,`id_voivodeship`) ";
        $this->db->simpleQuery($sql);
    }

    public function down()
    {
        $this->forge->dropKey('community', 'community_index');
        $this->forge->dropKey('district', 'district_index');
       /* $databaseName = env('database.default.database');
        $prefix = $this->db->getPrefix();
        $sql = "ALTER TABLE ".$databaseName.".".$prefix."community DROP INDEX community_index;";
        log_message("debug",$sql);
        //ALTER TABLE codegniter.lpcommunity DROP INDEX community_index;
        $this->db->simpleQuery($sql);*/
    }
}
