<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFunctionCalculationDistance extends Migration
{
    public function up()
    {
        $command = "CREATE FUNCTION calculateDistance( st_lat decimal(60,38), st_lon decimal(60,38),end_lat decimal(60,38), end_lon decimal(60,38))
RETURNS decimal(60,38)
BEGIN
	DECLARE distance decimal(60,38);
	DECLARE d_lon decimal(60,38);
	DECLARE d_lat decimal(60,38);
	SET st_lat = (st_lat * (PI() / 180));
	SET st_lon = st_lon * (PI() / 180);
	SET end_lat = end_lat * (PI() / 180);
	SET end_lon = end_lon * (PI() / 180);
	set d_lon = end_lon - st_lon;
	SET d_lat = end_lat - st_lat; 
	SET distance = (POW(SIN(d_lat/2),2)) + (cos(st_lat)* cos(end_lat) * (pow(sin(d_lon/2),2))); 
	return ((2 * asin(sqrt(distance)))* 6371);
END;";
        $this->db->simpleQuery($command);
    }

    public function down()
    {
        $this->db->simpleQuery("DROP FUNCTION calculateDistance;");
    }
}
