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

    /**
     * Create an instance from a time in milliseconds
     *
     * @param float $value
     * @return static
     */
    public static function fromMilliseconds(float $value): static
    {
        return new static($value);
    }

    /**
     * Create an instance from a time in seconds
     *
     * @param float $value
     * @return static
     */
    public static function fromSeconds(float $value): static
    {
        return new static($value, 's');
    }

    /**
     * Create an instance from a time in minutes
     *
     * @param float $value
     * @return static
     */
    public static function fromMinutes(float $value): static
    {
        return new static($value, 'min');
    }

    /**
     * Create an instance from a time in hours
     *
     * @param float $value
     * @return static
     */
    public static function fromHours(float $value): static
    {
        return new static($value, 'h');
    }

    /**
     * Create an instance from a time in days
     *
     * @param float $value
     * @return static
     */
    public static function fromDays(float $value): static
    {
        return new static($value, 'd');
    }

    /**
     * Create an instance from a time in weeks
     *
     * @param float $value
     * @return static
     */
    public static function fromWeeks(float $value): static
    {
        return new static($value, 'w');
    }

    /**
     * Create an instance from a time in months
     *
     * @param float $value
     * @return static
     */
    public static function fromMonths(float $value): static
    {
        return new static($value, 'm');
    }

    /**
     * Create an instance from a time in years
     *
     * @param float $value
     * @return static
     */
    public static function fromYears(float $value): static
    {
        return new static($value, 'y');
    }

    /**
     * Create an instance from a time in decades
     *
     * @param float $value
     * @return static
     */
    public static function fromDecades(float $value): static
    {
        return new static($value, 'decade');
    }

    /**
     * Create an instance from a time in centuries
     *
     * @param float $value
     * @return static
     */
    public static function fromCenturies(float $value): static
    {
        return new static($value, 'century');
    }

    /**
     * Convert to milliseconds
     *
     * @return float
     */
    public function toMilliseconds(): float
    {
        return $this->to('ms');
    }

    /**
     * Convert to seconds
     *
     * @return float
     */
    public function toSeconds(): float
    {
        return $this->to('s');
    }

    /**
     * Convert to minutes
     *
     * @return float
     */
    public function toMinutes(): float
    {
        return $this->to('min');
    }

    /**
     * Convert to hours
     *
     * @return float
     */
    public function toHours(): float
    {
        return $this->to('h');
    }

    /**
     * Convert to days
     *
     * @return float
     */
    public function toDays(): float
    {
        return $this->to('d');
    }

    /**
     * Convert to weeks
     *
     * @return float
     */
    public function toWeeks(): float
    {
        return $this->to('w');
    }

    /**
     * Convert to months
     *
     * @return float
     */
    public function toMonths(): float
    {
        return $this->to('M');
    }

    /**
     * Convert to years
     *
     * @return float
     */
    public function toYears(): float
    {
        return $this->to('y');
    }

    /**
     * Convert to decades
     *
     * @return float
     */
    public function toDecades(): float
    {
        return $this->to('decades');
    }

    /**
     * Convert to centuries
     *
     * @return float
     */
    public function toCenturies(): float
    {
        return $this->to('centuries');
    }
}
