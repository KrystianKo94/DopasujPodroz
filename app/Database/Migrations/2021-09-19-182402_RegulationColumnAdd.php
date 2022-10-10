<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RegulationColumnAdd extends Migration
{
	public function up()
	{
        $fields = [
            'is_active' => [
                'type' => 'BIT',
                'constraint' => 1,
                'default' => 0,
                'comment' => '0-tak, 1-nie'
            ],
        ];
        $this->forge->addColumn('regulations', $fields);
	}

	public function down()
	{
        $this->forge->dropColumn('regulations','is_active');
	}
}
