<?php

namespace CarmineMM\UnitsConversion\Conversion;

use CarmineMM\UnitsConversion\Base\BaseConversion;

/**
 * Time conversion
 *
 * @author Carmine Maggio <carminemaggiom@gmail.com>
 * @package UnitsConversion
 * @version 1.0.0
 */
class TimeConversion extends BaseConversion
{
    /**
     * List of known times
     *
     * @var array
     */
    protected array $lists = [
        'ms' => [
            'value' => 1,
            'name' => 'millisecond',
            'known'  => ['millisecond', 'milliseconds'],
            'symbol' => 'ms',
        ],
        's' => [
            'value' => 1_000,
            'name' => 'second',
            'known'  => ['second', 'seconds'],
            'symbol' => 's',
        ],
        'min' => [
            'value' => 60_000,
            'name' => 'minute',
            'known'  => ['minute', 'minutes'],
            'symbol' => 'm',
        ],
        'h' => [
            'value' => 3_600_000,
            'name' => 'hour',
            'known'  => ['hour', 'hours'],
            'symbol' => 'h',
        ],
        'd' => [
            'value' => 86_400_000,
            'name' => 'day',
            'known'  => ['day', 'days'],
            'symbol' => 'd',
        ],
        'w' => [
            'value' => 604_800_000,
            'name' => 'week',
            'known'  => ['week', 'weeks'],
            'symbol' => 'w',
        ],
        'm' => [
            'value' => 2_629_744_000,
            'name' => 'month',
            'known'  => ['month', 'months'],
            'symbol' => 'mth',
        ],
        'y' => [
            'value' => 31_557_600_000,
            'name' => 'year',
            'known'  => ['year', 'years'],
            'symbol' => 'y',
        ],
    ];
}
