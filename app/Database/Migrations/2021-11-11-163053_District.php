<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class District extends Migration
{
	public function up()
	{
        $this->forge->addField([
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
                'description' => [
                    'type' => 'text',
                    'null' => false,
                    'comment' => 'Nazwa powiatu'
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
        $this->forge->addForeignKey('id_voivodeship','voivodeship','id_voivodeship');
        $this->forge->createTable('district');
	}

	public function down()
	{
        $this->forge->dropTable('district',true);
	}
}
