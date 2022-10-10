<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterCommunityToPlace extends Migration
{
	public function up()
	{
        $fields = [
            'id_community' => [
                'type' => 'INT',
                'constraint' => 20,
                'unsigned' => TRUE,
                'comment' => 'ID gminy'
            ],
            'SYM' => [
                'type' => 'INT',
                'constraint' => 20,
                'unsigned' => TRUE,
                'comment' => 'identyfikator miejscowości'
            ],
            'SYMPOD' => [
                'type' => 'INT',
                'constraint' => 20,
                'unsigned' => TRUE,
                'comment' => 'identyfikator miejscowości podstawowej'
            ],

        ];
        $this->forge->addColumn('place',$fields);
	}

	public function down()
	{
		//
	}
}
