<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Place extends Migration
{
	public function up()
	{
        $this->forge->addField([
                'id_place' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE,
                    'comment' => 'ID miejscowości'
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
                'description' => [
                    'type' => 'text',
                    'null' => false,
                    'comment' => 'Nazwa miejscowości'
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
        $this->forge->addPrimaryKey('id_place',true);
        //$this->forge->addForeignKey('id_voivodeship','voivodeship','id_voivodeship');
       // $this->forge->addForeignKey('id_district','district','id_district');
        $this->forge->createTable('place');
	}

	public function down()
	{
		//
	}
}
