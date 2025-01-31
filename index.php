<?php

require './vendor/autoload.php';

use CarmineMM\UnitsConversion\Conversion\DigitalUnitsConversion;
use CarmineMM\UnitsConversion\Conversion\TemperatureUnitsConversion;
use CarmineMM\UnitsConversion\Conversion\WeightUnitsConversion;

var_dump(
    WeightUnitsConversion::convert(123, 'kg', 'onzas')
);
