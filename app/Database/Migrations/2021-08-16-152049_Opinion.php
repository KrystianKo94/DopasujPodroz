<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Opinion extends Migration
{
	public function up()
	{
        $this->forge->addField([
                'id_opinion' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE,
                    'comment' => 'ID opini'
                ],
                'id_user' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID pasażera wystawiającego opinię'
                ],
                'id_driver' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'comment' => 'ID kierowcy'
                ],
                'id_reservation' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID rezerwacji'
                ],
                'grade_driver' => [
                    'type' => 'INT',
                    'constraint' => 3,
                    'unsigned' => TRUE,
                    'comment' => 'Ocena kierowcy'
                ],
                'grade_car' => [
                    'type' => 'INT',
                    'constraint' => 3,
                    'unsigned' => TRUE,
                    'comment' => 'Ocena pojazdu'
                ],
                'grade_travel' => [
                    'type' => 'INT',
                    'constraint' => 3,
                    'unsigned' => TRUE,
                    'comment' => 'Ocena podróży'
                ],
                'comment' => [
                    'type' => 'text',
                    'null' => true,
                    'comment' => 'Komantarz wystawiajacego recenzje'
                ],
                'can_show' => [
                    'type' => 'BIT',
                    'constraint' => 1,
                    'comment' => 'Czy pokzaywać ocenę'
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
        $this->forge->addKey('id_opinion',true);
        $this->forge->addForeignKey('id_user','users','id_user');
        $this->forge->addForeignKey('id_driver','profile_driver','id_driver');
        $this->forge->addForeignKey('id_reservation','reservation','id_reservation');
        $this->forge->createTable('opinion');
	}

	public function down()
	{
        $this->forge->dropTable('opinion');
	}
}
