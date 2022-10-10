<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterVehicle extends Migration
{
	public function up()
	{
        $table = $this->db->DBPrefix . 'vehicle';

       $this->forge->dropForeignKey('vehicle','vehicle_id_driver_foreign');
       $this->db->simpleQuery("ALTER TABLE ".$table." DROP CONSTRAINT id_driver");
        $this->db->simpleQuery("ALTER TABLE ".$table." ADD FOREIGN KEY (id_driver) REFERENCES ".$this->db->DBPrefix."profile_driver(id_driver)");
	}

	public function down()
	{
		//
	}
}
