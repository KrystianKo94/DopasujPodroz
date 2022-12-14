<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddressesFrom extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_address_from' => [
				'type' => 'INT',
				'constraint' => 20,
                'unique' => TRUE,
                'auto_increment' => TRUE,
				'comment' => 'ID adresu do'
			],
			'id_address' => [
				'type' => 'INT',
				'constraint' => 20,
				'null' => false,
				'unsigned' => true,
				'comment' => 'ID adresu'
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
			$this->forge->addKey('id_address_from', true);
			$this->forge->addForeignKey('id_address','addresses','id_address');
			$this->forge->createTable('addresses_from');
			
	}

	public function down()
	{
		$this->forge->dropForeignKey('addresses_from','addresses_from_id_address_foreign');
		$this->forge->dropTable('addresses_from');
		
	}
}
