<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InstantMessenger extends Migration
{
	public function up()
	{
        $this->forge->addField([
                'id_instant_messenger' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE,
                    'comment' => 'ID komunikatora'
                ],
                'id_user_sender' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID użytkownika wysyłającego'
                ],
                'id_user_recipient' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID użytkownika odbiorcy'
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
        $this->forge->addKey('id_instant_messenger',true);
        $this->forge->addForeignKey('id_user_sender','users','id_user');
        $this->forge->addForeignKey('id_user_recipient','users','id_user');
        $this->forge->createTable('instant_messenger');
	}

	public function down()
	{
		$this->forge->dropTable('instant_messenger');
	}
}
