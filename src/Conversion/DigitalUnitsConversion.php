<?php

namespace CarmineMM\UnitsConversion\Conversion;

use CarmineMM\UnitsConversion\Base\BaseConversion;

/**
 * Digital Units Conversion
 *
 * @author Carmine Maggio <carminemaggiom@gmail.com>
 * @package UnitsConversion
 * @version 1.0.0
 */
class DigitalUnitsConversion extends BaseConversion
{
    /**
     * Known units
     */
    protected array $lists = [
        'bit' => [
            'name'   => 'Bit',
            'value'  => 1,
            'symbol' => 'bits',
            'known'  => ['bit', 'bits'],
        ],
        'byte' => [
            'name'   => 'Byte',
            'value'  => 8, // bit: 8
            'symbol' => 'bytes',
            'known'  => ['b', 'byte', 'bytes'],
        ],
        'KB' => [
            'name'   => 'Kilobyte',
            'value'  => 8_192, // 1 kilobyte = 1024 bytes = 8192 bits
            'symbol' => 'KB',
            'known'  => ['kb', 'kilobyte', 'kilobytes'],
        ],
        'MB' => [
            'name'   => 'Megabyte',
            'value'  => 8_388_608, // bit: 8.388.608
            'symbol' => 'MB',
            'known'  => ['mb', 'megabyte', 'megabytes'],
        ],
        'GB' => [
            'name'   => 'Gigabyte',
            'value'  => 8_589_934_592, // bit: 8.589.934.592
            'symbol' => 'GB',
            'known'  => ['gb', 'gigabyte', 'gigabytes'],
        ],
        'TB' => [
            'name'   => 'Terabyte',
            'value'  => 8_796_093_022_208, // bit: 8.796.093.022.208
            'symbol' => 'TB',
            'known'  => ['tb', 'terabyte', 'terabytes'],
        ],
        'PB' => [
            'name'   => 'Petabyte',
            'value'  => 9_007_199_254_740_992, // bit: --
            'symbol' => 'PB',
            'known'  => ['pb', 'petabyte', 'petabytes'],
        ],
    ];
}
