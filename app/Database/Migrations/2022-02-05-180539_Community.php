<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Community extends Migration
{
	public function up()
	{
        $this->forge->addField([
                'id_community' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID gminy'
                ],
                'id_district' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID powiatu'
                ],
                'id_voivodeship' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID województwa'
                ],
                'name_of_community' => [
                    'type' => 'text',
                    'null' => false,
                    'comment' => 'Nazwa gminy'
                ],
                'description' => [
                    'type' => 'text',
                    'null' => false,
                    'comment' => 'Nazwa gminy'
                ],
                'type' => [
                    'type' => 'INT',
                    'constraint' => 10,
                    'null' => false,
                    'comment' => 'Rodzaj gminy'
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
        $this->forge->createTable('community');
	}

	public function down()
	{
		$this->forge->dropTable('community');
	}
}
