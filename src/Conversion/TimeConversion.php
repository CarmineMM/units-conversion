<?php

namespace CarmineMM\Conversion;

use CarmineMM\Base\BaseConversion;

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
     * Listado de tiempos
     *
     * @var array
     */
    protected array $lists = [
        'ms' => [
            'value' => 1,
            'name' => 'milisecond',
            'known'  => ['milisecond', 'miliseconds'],
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

    /**
     * Muestra el valor en string, convertido de forma inteligente,
     * en otras palabras siempre mostrar un numero de fácil lectura
     */
    public function show(int $decimals = 2): string
    {
        return match (true) {
            $this->currentValue > $this->lists['y']['value'] => $this->display('y', $decimals),
            $this->currentValue > $this->lists['m']['value'] => $this->display('m', $decimals),
            $this->currentValue > $this->lists['w']['value'] => $this->display('w', $decimals),
            $this->currentValue > $this->lists['d']['value'] => $this->display('d', $decimals),
            $this->currentValue > $this->lists['h']['value'] => $this->display('h', $decimals),
            $this->currentValue > $this->lists['min']['value'] => $this->display('min', $decimals),
            $this->currentValue > $this->lists['s']['value'] => $this->display('s', $decimals),
            default => $this->display('ms', $decimals),
        };
    }
}
