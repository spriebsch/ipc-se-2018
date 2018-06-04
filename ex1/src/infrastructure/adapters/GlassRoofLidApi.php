<?php declare(strict_types=1);

namespace ipc\carskills\adapters;

use ipc\carskills\LazyDeveloperException;
use ipc\carskills\LidApi;
use StefansCarVendor\FamilyCarSeries\CarVendorApi;

class GlassRoofLidApi implements LidApi
{
    /**
     * @var CarVendorApi
     */
    private $vendorApi;

    public function __construct(CarVendorApi $vendorApi)
    {
        $this->vendorApi = $vendorApi;
    }

    public function close(): void
    {
        $this->vendorApi->closeLid();
    }

    public function open(): void
    {
        throw new LazyDeveloperException;
    }
}
