<?php

namespace App\Database\Migrations;


use CodeIgniter\Database\Migration;

class AlterKeyDistrict extends Migration
{
	public function up()
	{
        $table = $this->db->DBPrefix . 'district';
        $this->db->simpleQuery("ALTER table ". $table." add key (`id_district`);");
	}

	public function down()
	{
		//
	}
}
