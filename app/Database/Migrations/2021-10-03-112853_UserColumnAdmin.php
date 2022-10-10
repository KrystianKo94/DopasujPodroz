<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserColumnAdmin extends Migration
{
	public function up()
	{
        $fields = [
            'type_of_account' => [
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => 'U',
                'comment' => 'U - zwykły user A - administartor'
            ],
        ];
        $this->forge->addColumn('users',$fields);
	}

	public function down()
	{
		$this->forge->dropColumn('users','type_of_account');
	}
}
