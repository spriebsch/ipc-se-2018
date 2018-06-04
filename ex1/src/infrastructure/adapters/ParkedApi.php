<?php declare(strict_types=1);

namespace ipc\carskills\adapters;

use ipc\carskills\CarIsParkedApi;
use StefansCarVendor\FamilyCarSeries\CarVendorApi;

class ParkedApi implements CarIsParkedApi
{
    /**
     * @var CarVendorApi
     */
    private $vendorApi;

    public function __construct(CarVendorApi $vendorApi)
    {
        $this->vendorApi = $vendorApi;
    }

    public function isParked(): bool
    {
        $speed = $this->vendorApi->getSpeed();

        return $speed === 0;
    }
}
