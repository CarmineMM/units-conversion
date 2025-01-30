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
    protected array $lists = [
        'C' => [
            'name'   => 'Celsius',
            'symbol' => '°C',
            'known'  => ['c', 'celsius', 'celsiuses', '°C'],
            'value' => 1,
        ],
        'F' => [
            'name'   => 'Fahrenheit',
            'value'  => 1,
            'symbol' => '°F',
            'known'  => ['f', 'fahrenheit', 'fahrenheits'],
        ],
        'K' => [
            'name'   => 'Kelvin',
            'value'  => 1,
            'symbol' => 'K',
            'known'  => ['k', 'kelvin', 'kelvins'],
        ],
    ];
}
