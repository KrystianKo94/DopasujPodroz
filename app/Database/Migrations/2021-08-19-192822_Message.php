<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Message extends Migration
{
	public function up()
	{
        $this->forge->addField([
                'id_message' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE,
                    'comment' => 'ID odpowidzi'
                ],
                'id_instant_messenger' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID komunikatora'
                ],
                'id_user_recipient' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID nadawcy'
                ],
                'id_user_sender' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID odbiorcy'
                ],
                'message' => [
                    'type' => 'text',
                    'null' => false,
                    'comment' => 'Treść wiadomości'
                ],
                'is_remove_sender' => [
                    'type' => 'BIT',
                    'constraint' => 1,
                    'default' => 0,
                    'comment' => 'Usunięte przez nadawce'
                ],
                'is_remove_recipient' => [
                    'type' => 'BIT',
                    'constraint' => 1,
                    'default' => 0,
                    'comment' => 'Usunięte przez odbiorcę'
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
        $this->forge->addPrimaryKey('id_message',true);
        $this->forge->addForeignKey('id_user_recipient','users','id_user');
        $this->forge->addForeignKey('id_user_sender','users','id_user');
        $this->forge->addForeignKey('id_instant_messenger','instant_messenger','id_instant_messenger');
        $this->forge->createTable('message');
	}

	public function down()
	{
		$this->forge->dropTable('message');
	}
}
