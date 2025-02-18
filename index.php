<?php

require './vendor/autoload.php';

use CarmineMM\UnitsConversion\Base\Dictionary;
use CarmineMM\UnitsConversion\Conversion\DigitalUnitsConversion;
use CarmineMM\UnitsConversion\Conversion\LengthUnitsConversion;
use CarmineMM\UnitsConversion\Conversion\TemperatureUnitsConversion;
use CarmineMM\UnitsConversion\Conversion\TimeConversion;
use CarmineMM\UnitsConversion\Conversion\WeightUnitsConversion;

$TemperatureUnits = TemperatureUnitsConversion::make(12345);

var_dump(
    LengthUnitsConversion::make('13 millas')->display('kilómetros'),
);
