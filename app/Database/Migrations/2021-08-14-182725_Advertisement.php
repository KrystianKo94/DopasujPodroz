<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Advertisement extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_advertisement'=> [
				'type'=> 'INT',
				'constraint'=> 20,
				'unigue' => true,
				'unsigned'=> TRUE, 
				'auto_increment'=> TRUE,
				'comment'=> 'id_ogloszenie'
			],
			'go_date'=> [
				'type'=> 'datetime',
				'null'=> false ,
				'comment'=> 'data_wyjazdu'
			],
			'trip_cost'=> [
				'type'=> 'DECIMAL',
				'constraint'=> '6,2',
				'NULL'=> FALSE,
				'comment'=> 'Koszt_podrozy'

			],'seats_amount'=>[
				'type'=> 'INT', 
				'constraint'=> 10,
				'unsigned'=>TRUE,
				'NULL'=> FALSE,
				'comment'=> 'Liczba_miejsc'
			],
			'luggage_size'=>[
				'type'=> 'VARCHAR', 
				'constraint'=> 255,
				'NULL'=> FALSE,
				'comment'=> 'Wielkosc_bagazu'
			],
			'is_active' => [
				'type' => 'bit',
				'constraint' => 1,
				'null'=> false,
				'comment' => 'Aktualny'
			],
            'id_address_to' => [
                'type' => 'INT',
                'constraint' => 20,
                'comment' => 'ID adresu do'
            ],
            'id_address_from' => [
                'type' => 'INT',
                'constraint' => 20,
                'comment' => 'ID adresu do'
            ],
            'id_driver' => [
                'type' => 'INT',
                'constraint' => 20,
                'comment' => 'ID kierowcy'
            ],
            'id_vehicle' => [
                'type' => 'INT',
                'constraint' => 20,
                'comment' => 'ID pojazu'
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
        $this->forge->addKey('id_advertisement',true);
        $this->forge->addForeignKey('id_driver','profile_driver','id_driver');
        $this->forge->addForeignKey('id_address_from','addresses_from','id_address_from');
        $this->forge->addForeignKey('id_address_to','addresses_to','id_address_to');
        $this->forge->addForeignKey('id_vehicle','vehicle','id_vehicle');
	    $this->forge->createTable('advertisement');
	}
	

	public function down()
	{
		$this->forge->dropTable('advertisement');
	}
}
