<?php

use ipc\carskills\adapters\GlassRoofLidApi;
use ipc\carskills\adapters\ParkedApi;
use ipc\carskills\CloseTheLidCarSkill;

require __DIR__ . '/autoload.php';

$vendorApi = new \StefansCarVendor\FamilyCarSeries\CarVendorApi();

$carIsParkedApi = new ParkedApi($vendorApi);
$lidApi = new GlassRoofLidApi($vendorApi);
$skill = new CloseTheLidCarSkill($lidApi, $carIsParkedApi);
$skill->run();
