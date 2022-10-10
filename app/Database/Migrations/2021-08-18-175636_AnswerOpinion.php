<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AnswerOpinion extends Migration
{
	public function up()
	{
        $this->forge->addField([
                'id_answer' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE,
                    'comment' => 'ID odpowidzi'
                ],
                'id_opinion' => [
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'comment' => 'ID opini'
                ],
                'answer' => [
                    'type' => 'Text',
                    'null' => false,
                    'comment' => 'odpowiedź do opinni'
                ],
                'date_answer' => [
                    'type' => 'timestamp',
                    'null' => false,
                    'comment' => 'Data odpowiedzi'
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
        $this->forge->addPrimaryKey('id_answer',true);
        $this->forge->addForeignKey('id_opinion','opinion','id_opinion');
        $this->forge->createTable('answer_opinion');
	}

	public function down()
	{
		$this->forge->dropTable('answer_opinion');
	}
}
