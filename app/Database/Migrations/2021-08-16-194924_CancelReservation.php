<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CancelReservation extends Migration
{
	public function up()
	{
        $this->forge->addField([
                'id_cancel_reservation' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE,
                    'comment' => 'ID opini'
                ],
                'id_reservation' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID rezerwacji'
                ],
                'id_driver' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'comment' => 'ID kierowcy'
                ],
                'plaintiff_cancel'=>[
                    'type' => 'text',
                    'null' => false,
                    'comment' => 'Powód anulowania rezerwacji'
                ],
                'canceled_is_accept' => [
                    'type' => 'bit',
                    'constraint' => 1,
                    'default' => 0,
                    'comment' => 'Czy akceptacja jest zaakceptowane'
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
        $this->forge->addKey('id_cancel_reservation',true);
        $this->forge->addForeignKey('id_reservation','reservation','id_reservation');
        $this->forge->addForeignKey('id_driver','profile_driver','id_driver');
        $this->forge->createTable('cancel_reservation');
	}

	public function down()
	{
		$this->forge->dropTable('cancel_reservation');
	}
}
