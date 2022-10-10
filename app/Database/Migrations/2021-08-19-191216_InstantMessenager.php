<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InstantMessenager extends Migration
{
	public function up()
	{
        $this->forge->addField([
                'id_instant_messenger' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE,
                    'comment' => 'ID komunikatora'
                ],
                'date_create' => [
                    'type' => 'timestamp',
                    'null' => false,
                    'comment' => 'Data utworzenia'
                ],
                'date_modify' => [
                    'type' => 'timestamp',
                    'null' => false,
                    'comment' => 'Data zmiany rekordu'
                ]
            ]
        );
        $this->forge->addPrimaryKey('id_instant_messenger',true);
        $this->forge->createTable('instant_messenger');
	}

	public function down()
	{
		$this->forge->dropTable('instant_messenger');
	}
}
