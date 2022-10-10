<?php

namespace App\Helpers;

class StaticQuery
{
    public static $SQL_ADVERCITEMENT = "SELECT
	(if (adr.street is null, CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(adr.place,''),' '),adr.number_apartment),' '),', '),adr.zip_code),' '),adr.place),CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(' ul. ',adr.street),' '),adr.number_apartment),' '),adr.place),', '),adr.zip_code),' '),adr.place))) address_to,
	(if (adr2.street is null, CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(adr2.place,''),' '),adr2.number_apartment),' '),', '),adr2.zip_code),' '),adr2.place),CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(' ul. ',adr2.street),' '),adr2.number_apartment),' '),adr2.place),', '),adr2.zip_code),' '),adr2.place))) address_from,
	adv.id_advertisement,
	adv.seats_amount,
	adv.trip_cost,
	adv.luggage_size,
	adv.state,
	adv.is_active,
	adv.to_date,
	adv.go_date,
	adv.id_address_to,
	adv.id_address_from,
	veh.id_vehicle,
	CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(CONCAT(veh.brand ,' '),veh.model),' '),veh.`type`),' '),veh.power),' km, rok produkcji'),veh.year_of_production)  AS car
From
	%prefix%advertisement adv join
	%prefix%addresses_to adrt on adrt.id_address_to = adv.id_address_to JOIN
	%prefix%addresses_from adrf on adrf.id_address_from = adv.id_address_from JOIN
	%prefix%addresses adr on adr.id_address = adrt.id_address JOIN
	%prefix%addresses adr2 on adr2.id_address = adrf.id_address JOIN
	%prefix%vehicle veh on veh.id_vehicle=adv.id_vehicle
	where adv.id_driver  = ?" ;

    public static $SQL_ADVERT_BY_LOCATION = "
    SELECT 
tmp.id_advertisement
from(
SELECT DISTINCT 
	ladv.id_advertisement,
	calculateDistance(%lat%,%lon%,ladt.lat,ladt.lon) distance_to,
	calculateDistance(%lat%,%lon%,ladf.lat,ladf.lon) distance_form
FROM
	%prefix%advertisement ladv join
	%prefix%addresses_to lat on lat.id_address_to = ladv.id_address_to  JOIN 
	%prefix%addresses_from laf on laf.id_address_from = ladv.id_address_from  JOIN 
	%prefix%addresses ladt on ladt.id_address  = lat.id_address JOIN 
	%prefix%addresses ladf on ladf.id_address = laf.id_address
    where ladv.is_active =0 )
tmp
WHERE 
tmp.distance_to < %distance%";


}