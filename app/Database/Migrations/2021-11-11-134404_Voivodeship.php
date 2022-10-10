<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Voivodeship extends Migration
{
	public function up()
	{
        $this->forge->addField([
                'id_voivodeship' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE,
                    'comment' => 'ID województwa'
                ],
                'description' => [
                    'type' => 'Text',
                    'null' => false,
                    'comment' => 'nazwa województwa'
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
        $this->forge->addPrimaryKey('id_voivodeship',true);
        $this->forge->createTable('voivodeship');
	}

	public function down()
	{
		//
	}
}
