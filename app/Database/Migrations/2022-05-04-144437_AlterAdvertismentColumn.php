<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterAdvertismentColumn extends Migration
{
    public function up()
    {
        $fields = [
            'to_date'=> [
                'type'=> 'datetime',
                'null'=> false ,
                'comment'=> 'data_przyjazdu'
            ],
            'state'=> [
                'type'=> 'ENUM',
                'constraint' => ['IN_PROGRESS','ACTIVE','CLOSE'],
                'null'=> false ,
                'comment'=> 'Status wyjazdu',
                'default' => 'IN_PROGRESS'
            ]
        ];
        $this->forge->addColumn('advertisement', $fields);
    }

    public function down()
    {
        //
    }
}
