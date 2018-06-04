<?php declare(strict_types=1);

namespace ipc\carskills;

class CloseTheLidCarSkill implements CarSkill
{
    /**
     * @var LidApi
     */
    private $lidApi;

    /**
     * @var CarIsParkedApi
     */
    private $carIsParkedApi;

    public function __construct(LidApi $lidApi, CarIsParkedApi $carIsParkedApi)
    {
        $this->lidApi = $lidApi;
        $this->carIsParkedApi = $carIsParkedApi;
    }

    public function run(): void
    {
        if ($this->carIsParkedApi->isParked()) {
            $this->lidApi->close();
        }

        // if the car is parked
        // if it is hot / the sun shines
    }
}
