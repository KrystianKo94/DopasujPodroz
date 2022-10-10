<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CancelAdvertisement extends Migration
{
	public function up()
	{
        $this->forge->addField([
                'id_cancel_advertisement' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE,
                    'comment' => 'ID opini'
                ],
                'id_advertisement' => [
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
                'reason_of_resignation'=>[
                    'type' => 'text',
                    'null' => false,
                    'comment' => 'Powód rezygnacji '
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
        $this->forge->addKey('id_cancel_advertisement',true);
        $this->forge->addForeignKey('id_advertisement','advertisement','id_advertisement');
        $this->forge->addForeignKey('id_driver','profile_driver','id_driver');
        $this->forge->createTable('cancel_advertisement');
	}

	public function down()
	{
		$this->forge->dropTable('cancel_advertisement');
	}
}
