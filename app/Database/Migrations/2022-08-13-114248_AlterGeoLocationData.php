<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterGeoLocationData extends Migration
{
    public function up()
    {
        $fields = [
            'lat'=> [
                'type' => 'decimal',
                'constraint' => '60,38',
                'null' => true,
                'comment' => 'położenie geolokalizacyjne lat'
            ],
            'lon'=> [
                'type' => 'decimal',
                'constraint' => '60,38',
                'null' => true,
                'comment' => 'położenie geolokalizacyjne lon'
            ]
        ];
        $this->forge->addColumn('addresses', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('addresses', ['lat', 'lon']);
    }
}
