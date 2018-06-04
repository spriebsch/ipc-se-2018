<?php declare(strict_types=1);

namespace StefansCarVendor\FamilyCarSeries;

class CarVendorApi
{
    public function closeLid()
    {
        var_dump('closing the lid');
    }

    public function openLid()
    {
    }

    public function getSpeed(): int
    {
        return random_int(0, 1);
    }
}
