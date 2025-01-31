<?php

namespace CarmineMM\UnitsConversion\Conversion;

use CarmineMM\UnitsConversion\Base\BaseConversion;

/**
 * Temperature conversion
 *
 * @author Carmine Maggio <carminemaggiom@gmail.com>
 * @package UnitsConversion
 * @version 1.0.0
 */
class TemperatureUnitsConversion extends BaseConversion
{
    /**
     * Known units
     */
    /**
     * Known units
     */
    protected array $lists = [
        'celsius' => [
            'name' => 'Celsius',
            'value' => 1, // Base unit, relative value for calculations
            'symbol' => '°C',
            'known' => ['c', 'celsius', 'centigrade', '°c'],
        ],
        'fahrenheit' => [
            'name' => 'Fahrenheit',
            'value' => 1, // Relative value for calculations
            'symbol' => '°F',
            'known' => ['f', 'fahrenheit', '°f'],
        ],
        'kelvin' => [
            'name' => 'Kelvin',
            'value' => 1, // Relative value for calculations
            'symbol' => 'K',
            'known' => ['k', 'kelvin', '°k'],
        ],
        'rankine' => [
            'name' => 'Rankine',
            'value' => 1, // Relative value for calculations
            'symbol' => '°R',
            'known' => ['r', 'rankine', '°r'],
        ],
    ];
}
