<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Street extends Migration
{
	public function up()
	{
        $this->forge->addField([
                'id_street' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE,
                    'comment' => 'ID ulicy'
                ],
                'id_voivodeship' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID województwa'
                ],
                'id_district' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID powiatu'
                ],
                'id_community' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID gminy'
                ],
                'type' => [
                    'type' => 'INT',
                    'constraint' => 10,
                    'null' => false,
                    'comment' => 'Rodzaj gminy'
                ],
                'SYM' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'identyfikator miejscowości'
                ],
                'SYM_UL' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'identyfikator miejscowości'
                ],
                'feature' => [
                    'type' => 'INT',
                    'constraint' => 10,
                    'null' => false,
                    'comment' => 'Cecha gminy'
                ],
                'name1' => [
                    'type' => 'text',
                    'null' => false,
                    'comment' => 'Nazwa ulicy'
                ],
                'name2' => [
                    'type' => 'text',
                    'null' => false,
                    'comment' => 'Nazwa ulicy'
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
        $this->forge->addKey('id_street', true);
        $this->forge->addForeignKey('id_voivodeship','voivodeship','id_voivodeship');
        $this->forge->createTable('street');
	}

	public function down()
	{
        $this->forge->dropTable('street');
	}
}
