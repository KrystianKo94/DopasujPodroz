<?php

namespace App\Commands;

use App\Models\Advertisement;
use App\Models\AdvertisementUserBlocked;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class UpdateAdvertisement extends BaseCommand
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
    protected $name = 'update:advertisement';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Aktualizuje statusy ogłoszeń, które są aktywne a nie powinny być aktywne';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'update:advertisement';

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
        $advertisementModel = new Advertisement();
        $advertisements=$advertisementModel->getAdvertisementExpired();
        $totalSteps = count($advertisements);
        $currStep   = 1;
        $advertisementBlocked = new AdvertisementUserBlocked();
        $idsAdvertisement= $advertisementBlocked->getBlockedIdsAdvertisement();
        $totalSteps = $totalSteps + count($idsAdvertisement);
        foreach ($advertisements as $advertisement) {
            CLI::showProgress($currStep++, $totalSteps);
            $advertisement->setState('CLOSE');
            $advertisementModel->update($advertisement->__get('id_advertisement'),$advertisement);
        }
        $advertisements=$advertisementModel->getAdvertisementsById($idsAdvertisement);
        foreach ($advertisements as $advertisement) {
            CLI::showProgress($currStep++, $totalSteps);
            $advertisement->setState('CLOSE');
            $advertisementModel->update($advertisement->__get('id_advertisement'),$advertisement);
        }
    }
}
