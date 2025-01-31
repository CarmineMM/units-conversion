<?php

namespace CarmineMM\UnitsConversion\Conversion;

use CarmineMM\UnitsConversion\Base\BaseConversion;

/**
 * Time conversion
 *
 * @author Carmine Maggio <carminemaggiom@gmail.com>
 * @package UnitsConversion
 * @version 1.1.0
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
            'known'  => ['ms', 'millisecond', 'milliseconds', 'milisegundo', 'milisegundos'],
            'symbol' => 'ms',
        ],
        's' => [
            'value' => 1_000,
            'name' => 'second',
            'known'  => ['second', 'seconds', 'segundo', 'segundos'],
            'symbol' => 's',
        ],
        'min' => [
            'value' => 60_000,
            'name' => 'minute',
            'known'  => ['minute', 'minutes', 'minuto', 'minutos'],
            'symbol' => 'm',
        ],
        'h' => [
            'value' => 3_600_000,
            'name' => 'hour',
            'known'  => ['hour', 'hours', 'hora', 'horas'],
            'symbol' => 'h',
        ],
        'd' => [
            'value' => 86_400_000,
            'name' => 'day',
            'known'  => ['day', 'days', 'dia', 'dias'],
            'symbol' => 'd',
        ],
        'w' => [
            'value' => 604_800_000,
            'name' => 'week',
            'known'  => ['week', 'weeks', 'semana', 'semanas'],
            'symbol' => 'w',
        ],
        'm' => [
            'value' => 2_629_744_000,
            'name' => 'month',
            'known'  => ['month', 'months', 'mes', 'meses'],
            'symbol' => 'm',
        ],
        'y' => [
            'value' => 31_557_600_000,
            'name' => 'year',
            'known'  => ['year', 'years', 'ano', 'anos'],
            'symbol' => 'y',
        ],
        'decade' => [
            'value' => 31_557_600_000,
            'name' => 'decade',
            'known'  => ['decade', 'decades', 'decada', 'decadas'],
            'symbol' => 'decade',
        ],
        'century' => [
            'value' => 3_155_760_000_000,
            'name' => 'century',
            'known'  => ['century', 'centuries', 'siglo', 'siglos'],
            'symbol' => 'century',
        ],
    ];
}
