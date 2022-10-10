<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RestartPassword extends Migration
{
	public function up()
	{
        $this->forge->addField([
                'id_restart_password' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE,
                    'comment' => 'ID odpowidzi'
                ],
                'id_user' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID opini'
                ],
                'token' => [
                    'type' => 'varchar',
                    'constraint' => 100,
                    'null' => false,
                    'comment' => 'odpowiedź do opinni'
                ],
                'date_create' => [
                    'type' => 'timestamp',
                    'null' => false,
                    'comment' => 'Data utworzenia'
                ],
                'date_life_token' => [
                    'type' => 'datetime',
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
        $this->forge->addPrimaryKey('id_restart_password',true);
        $this->forge->addPrimaryKey('token',true);
        $this->forge->addForeignKey('id_user','users','id_user');
        $this->forge->createTable('restart_password');
	}

	public function down()
	{
		$this->forge->dropTable('restart_password');
	}
}
