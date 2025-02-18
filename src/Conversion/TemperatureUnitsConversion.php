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
            'symbol' => '°K',
            'known' => ['k', 'kelvin', '°k'],
        ],
        'rankine' => [
            'name' => 'Rankine',
            'value' => 1, // Relative value for calculations
            'symbol' => '°R',
            'known' => ['r', 'rankine', '°r'],
        ],
    ];

    /**
     * Construct
     *
     * @param string|integer $number
     * @param string $unit
     */
    public function __construct(string|int|float $number = 0, string $unit = '')
    {
        $this->discoverDictionary();

        $this->firstKey = array_keys($this->lists)[0];

        [$number, $unit] = $this->discoverUnit($number, $unit);

        $this->currentValue = $number;

        $this->currentValue = $this->originalValue = $this->toCelsius($unit);
    }

    /**
     * Convert
     *
     * @param integer|float $number
     * @param string $unit
     * @param string $unitTo
     * @return float
     */
    public static function convert(int|float $number, string $unit, string $unitTo): float
    {
        return (new static($number, $unit))->to($unitTo);
    }

    /**
     * Convert to Celsius units,
     * This method does not have a discover of units.
     *
     * @return float
     */
    public function toCelsius(string $from = 'celsius'): float
    {
        return match ($from ?? $this->firstKey) {
            'fahrenheit' => ($this->currentValue - 32) * 5 / 9,
            'kelvin' => $this->currentValue - 273.15,
            'rankine' => ($this->currentValue - 491.67) * 5 / 9,
            default => $this->currentValue,
        };
    }

    /**
     * Convert to Fahrenheit
     *
     * @param string $from
     * @return float
     */
    public function toFahrenheit(string $from = 'celsius'): float
    {
        return match ($from ?? $this->firstKey) {
            'celsius' => $this->currentValue * 9 / 5 + 32,
            'kelvin' => ($this->currentValue - 273.15) * 9 / 5 + 32,
            'rankine' => ($this->currentValue - 491.67) * 9 / 5 + 32,
            default => $this->currentValue,
        };
    }

    /**
     * Convert to Kelvin
     *
     * @param string $from
     * @return float
     */
    public function toKelvin(string $from = 'celsius'): float
    {
        return match ($from ?? $this->firstKey) {
            'celsius' => $this->currentValue + 273.15,
            'fahrenheit' => ($this->currentValue - 32) * 5 / 9 + 273.15,
            'rankine' => ($this->currentValue - 491.67) * 5 / 9 + 273.15,
            default => $this->currentValue,
        };
    }

    /**
     * Convert to Rankine
     *
     * @param string $from
     * @return float
     */
    public function toRankine(string $from = 'celsius'): float
    {
        return match ($from ?? $this->firstKey) {
            'celsius' => $this->currentValue * 9 / 5 + 491.67,
            'fahrenheit' => $this->currentValue + 491.67,
            'kelvin' => $this->currentValue * 9 / 5 + 491.67,
            default => $this->currentValue,
        };
    }

    /**
     * To convert in Temperature Units Conversion
     *
     * @param string $unit Auto Discover units
     * @return float
     */
    public function to(string $unit): float
    {
        $unit = strtolower($unit);
        $unitKey = '';

        if (isset($this->lists[$unit])) {
            $unitKey = $unit;
        }

        if ($unitKey === '') {
            foreach ($this->lists as $key => $theUnit) {
                if (in_array($unit, $theUnit['known'])) {
                    $unitKey = $key;
                    break;
                }
            }
        }

        if ($unitKey === '') {
            // If you see this error, it means that you have entered a unit
            // That is not defined in the list, which can be
            // A writing error or a foul in the bookstore.
            throw new \Exception('Unit not found', 500);
        }

        return match ($unitKey) {
            'celsius' => $this->toCelsius(),
            'fahrenheit' => $this->toFahrenheit(),
            'kelvin' => $this->toKelvin(),
            'rankine' => $this->toRankine(),
            default => $this->currentValue,
        };
    }
}
