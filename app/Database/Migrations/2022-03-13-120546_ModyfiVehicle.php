<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModyfiVehicle extends Migration
{
	public function up()
	{
        $fields = [
            'capity' => [
                'name' => 'capacity',
                'type' => 'INT',
                'constraint' => 5,
                'comment' => 'Pojemność pojazdu'
            ],
            'capity_of_trunk' => [
                'name' => 'capacity_of_trunk',
                'type' => 'INT',
                'constraint' => 5,
                'comment' => 'Pojemność bagażnika'
            ],
        ];
        $this->forge->modifyColumn('vehicle',$fields);
	}

	public function down()
	{
		//
	}
}
