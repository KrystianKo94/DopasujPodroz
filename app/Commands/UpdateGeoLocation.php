<?php

namespace App\Commands;

use App\Entities\AdressEntity;
use App\Models\AdressesModel;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use Config\Services;

class UpdateGeoLocation extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'CodeIgniter';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'update:address';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Aktualizuje dane geo lokalizacyjne ';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'update:address [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
       $addresses = new AdressesModel();
       $addressesEntity = new AdressEntity();
       $addressesEntity = $addresses->findAll();
        $currStep   = 1;
        $totalSteps = count( $addressesEntity);
       $geoLocation = array();
       CLI::wrap('Aktualizowanie danych geo-lokalizacyjnych');
       foreach($addressesEntity as $addressEntity){
                CLI::showProgress($currStep++, $totalSteps);
                $geoLocation = Services::getGeoLocationFromAddresses($addressEntity->getAddressFull());
                $addresses->updateLatLon($addressEntity->getIdAdress(),$geoLocation['lat'],$geoLocation['lon']);
        }
    }
}
