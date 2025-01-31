<?php

require './vendor/autoload.php';

use CarmineMM\UnitsConversion\Conversion\DigitalUnitsConversion;
use CarmineMM\UnitsConversion\Conversion\TemperatureUnitsConversion;
use CarmineMM\UnitsConversion\Conversion\WeightUnitsConversion;

$TemperatureUnits = TemperatureUnitsConversion::make(12345);

var_dump(
    $TemperatureUnits->toFahrenheit()
);
