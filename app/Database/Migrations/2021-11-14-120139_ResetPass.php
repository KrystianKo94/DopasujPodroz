<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ResetPass extends Migration
{
	public function up()
	{
	$this->forge->addField([
		'id_password'=>[
			'type'=>'INT',
			'constraint'=>20,
			'unique'=>TRUE,
			'auto_increment'=>TRUE,
			'comment'=>'Id_resetowania_hasla'
		],
		'id_user'=>[
		'type'=>'INT',
		'constraint'=>20,
		'null'=>FALSE,
		'unsigned'=>TRUE,
		'comment'=> 'Id_uzytkownika'
		],
		'token'=>[
		'type'=>'varchar',
		'constraint'=>200,
		'comment'=> 'Token_resetujacy',
		],
		'is_used'=>[
			'type'=>'bit',
			'constraint'=>1,
			'comment'=>'Czy kod zostal uzyty 0-nie, 1-tak',

		],
		'date_expiration' => [
			'type' => 'timestamp',
			'comment' => 'Data ważności tokenu',
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
		$this->forge->addKey('id_password', true);
		$this->forge->addForeignKey('id_user','users','id_user');
		$this->forge->createTable('reset_pass');

	}

	public function down()
	{
		$this->forge->dropForeignKey('reset_pass','reset_pass_id_user_foreign');
		$this->forge->dropTable('reset_pass');
	}
}
