<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Vehicle extends Migration
{
	public function up()
	{
        $this->forge->addField([
                'id_vehicle' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'auto_increment' => TRUE,
                    'comment' => 'ID pojazdu'
                ],
                'brand' => [
                    'type' => 'varchar',
                    'constraint' => 20,
                    'comment' => 'Marka pojazdu'
                ],
                'model' => [
                    'type' => 'VARCHAR',
                    'constraint' => 40,
                    'null' => true,
                    'comment' => 'model pojazdu'
                ],
                'type' => [
                    'type' => 'VARCHAR',
                    'constraint' => 40,
                    'null' => true,
                    'comment' => 'typ pojazdu'
                ],
                'capity' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    'comment' => 'Pojemność pojazdu'
                ],
                'power' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    'comment' => 'Moc pojazdu'
                ],
                'year_of_production' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    'comment' => 'Rok produkcji pojazdu'
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
                    'comment' => 'Aktualny'
                ],
                'id_driver' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unique'  => true,
                    'null' => false,
                    'comment' => 'ID kierowcy'
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
        $this->forge->addKey('id_vehicle',true);
        $this->forge->addForeignKey('id_driver','profile_driver','id_driver');
        $this->forge->createTable('vehicle');
	}

	public function down()
	{
        $this->forge->dropTable('vehicle');
	}
}
