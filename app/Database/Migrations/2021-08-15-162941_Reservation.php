<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reservation extends Migration
{
	public function up()
	{
        $this->forge->addField([
            'id_reservation' => [
                'type' => 'INT',
                'constraint' => 20,
                'unsigned' => TRUE,
                'unique' => TRUE,
                'auto_increment' => TRUE,
                'comment' => 'ID rezerwacji'
            ],
            'id_advertisement'=> [
                    'type'=> 'INT',
                    'constraint'=> 20,
                    'unsigned' => true,
                    'comment'=> 'id_ogloszenie'
            ],
            'id_user' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => true,
                    'comment' => 'ID użytkownika'
                ],
            'capity'=>[
                'type' => 'INT',
                'constraint' => 11,
                'nullable' => false,
                'comment' => 'Ilość miejsc zadeklarowana'
            ],
            'capity_of_trunk' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    'comment' => 'Pojemność bagażnika pojazdu'
            ],
            'is_active' => [
                    'type' => 'bit',
                    'constraint' => 1,
                    'comment' => 'Czy aktualne'
                ],
            'state_is_full' => [
                    'type' => 'bit',
                    'constraint' => 1,
                    'comment' => 'Aktualny'
                ],
            'date_start' => [
                    'type' => 'datetime',
                    'null' => false,
                    'comment' => 'Data wyjazdu'
                ],
            'planing_date_end' => [
                    'type' => 'timestamp',
                    'null' => false,
                    'comment' => 'Data przyjazdu'
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
        $this->forge->addKey('id_reservation',true);
        $this->forge->addForeignKey('id_advertisement','advertisement','id_advertisement');
        $this->forge->addForeignKey('id_user','users','id_user');
        $this->forge->createTable("reservation");
	}

	public function down()
	{
		$this->forge->dropTable('reservation');
	}
}
