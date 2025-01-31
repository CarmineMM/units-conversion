<?php

require './vendor/autoload.php';

use CarmineMM\UnitsConversion\Base\Dictionary;
use CarmineMM\UnitsConversion\Conversion\DigitalUnitsConversion;
use CarmineMM\UnitsConversion\Conversion\TemperatureUnitsConversion;
use CarmineMM\UnitsConversion\Conversion\TimeConversion;
use CarmineMM\UnitsConversion\Conversion\WeightUnitsConversion;

var_dump(
    TimeConversion::make('1313 años')->setSymbolMode('long')->setLocale('es')->display('dias'),
);
