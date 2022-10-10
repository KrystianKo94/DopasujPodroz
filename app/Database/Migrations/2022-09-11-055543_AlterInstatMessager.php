<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterInstatMessager extends Migration
{
    public function up()
    {
        $fields = [
            'is_remove_driver' => [
                'type' => 'BIT',
                'constraint' => 1,
                'default' => 0,
                'comment' => 'Usunięte przez kierowce'
            ],
            'is_remove_user' => [
                'type' => 'BIT',
                'constraint' => 1,
                'default' => 0,
                'comment' => 'Usunięte przez odbiorcę'
            ],
            'id_advertisement'=> [
                'type'=> 'INT',
                'constraint'=> 20,
                'comment'=> 'id_ogloszenie',
                'NULL' => false,
                'UNSIGNED' => true
            ],
        ];
        $this->forge->addColumn('instant_messenger', $fields);
        $alterSQL= "ALTER TABLE " .$this->db->getPrefix()."instant_messenger ADD CONSTRAINT ".$this->db->getPrefix()."instant_messenger_id_advertisement_foreign FOREIGN KEY(id_advertisement) REFERENCES ".$this->db->getPrefix()."advertisement(id_advertisement) ";
        $this->db->simpleQuery($alterSQL);
    }

    public function down()
    {
        $this->forge->dropForeignKey('instant_messenger','instant_messenger_id_advertisement_foreign');
        $this->forge->dropColumn('instant_messenger', 'is_remove_driver');
        $this->forge->dropColumn('instant_messenger', 'is_remove_user');
        $this->forge->dropColumn('instant_messenger', 'id_advertisement');
    }
}
