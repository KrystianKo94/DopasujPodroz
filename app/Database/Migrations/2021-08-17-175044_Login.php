<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Login extends Migration
{
	public function up()
	{
        $this->forge->addField([
                'id_login' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE,
                    'comment' => 'ID logowania'
                ],
                'id_user' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID użytkownika'
                ],
                'login_success' => [
                    'type' => 'BIT',
                    'constraint' => 1,
                    'comment' => 'Czy zalogował się poprawnie użytkownik'
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
        $this->forge->addKey('id_login',true);
        $this->forge->addForeignKey('id_user','users','id_user');
        $this->forge->createTable('login');
	}

	public function down()
	{
		$this->forge->dropTable('login');
	}
}
