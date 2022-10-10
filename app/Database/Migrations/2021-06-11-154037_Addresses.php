<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Addresses extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_address' => [
				'type' => 'INT',
				'constraint' => 20,
                'unsigned' => TRUE,
                'unique' => TRUE,
                'auto_increment' => TRUE,
				'comment' => 'ID adresu'
			],
			'voivodeship' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
				'null' => true,
				'comment' => 'Wojewódzcto'
			],
			'district' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
				'null' => true,
				'comment' => 'Powiat'
			],
			'commune' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
				'null' => true,
				'comment' => 'Gmina'
			],
			'place' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
				'null' => true,
				'comment' => 'Miejscowość'
			],
            'street' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'comment' => 'Ulica'
            ],
            'zip_code' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => true,
                'comment' => 'Kod pocztowy'
            ],
            'number_apartment' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => true,
                'comment' => 'numer lokalu'
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
			]);
			$this->forge->addKey('id_address', true);
			$this->forge->createTable('addresses');
	}

	public function down()
	{
		$this->forge->dropTable('addresses');
	}
}
