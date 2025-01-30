<?php

namespace CarmineMM\UnitsConversion\Base;

/**
 * Base conversion (compatible with other types of mathematical conversions)
 *
 * @author Carmine Maggio <carminemaggiom@gmail.com>
 * @package UnitsConversion
 * @version 1.1.0
 */
class BaseConversion
{
    /**
     * Value established in the lowest conversion value,
     * This must be in the minimum representation,
     * Because it does not accept decimals.
     * 
     * @var float
     */
    protected float $originalValue = 0;

    /**
     * Current value at the lowest value,
     * Similar the 'originalValue'.
     * ($this->originalValue)
     * 
     * @var float
     */
    protected float $currentValue = 0;

    /**
     * List of conversion elements.
     * 
     * @var array
     */
    protected array $lists = [];

    /**
     *First key on the list,
     * It is the element of lower denomination.
     *
     * @var string
     */
    private string $firstKey = '';

    /**
     * Construct
     *
     * @param string|integer $number
     * @param string $unit
     */
    public function __construct(string|int|float $number = 0, string $unit = '')
    {
        if ($number === 0) return;

        $this->firstKey = array_keys($this->lists)[0];

        [$number, $unit] = $this->discoverUnit($number, $unit);

        $this->currentValue = $this->originalValue = static::convert($number, $unit, $this->firstKey);
    }

    /**
     * Current value
     *
     * @return float
     */
    public function getCurrent(): float
    {
        return $this->currentValue;
    }

    /**
     * Discover the unit of measure of a number or a string.
     *
     * @param string|integer $number
     * @param string $unit
     * @return array [number, unit]
     */
    protected function discoverUnit(string|int|float $number, string $unit = ''): array
    {
        if ($unit === '' && !is_string($number)) {
            $number = floatval($number);
        }

        if (is_numeric($number) && $unit !== '') {
            return [$number, $this->getKeyUnit(strtolower($unit))];
        }

        if (is_string($number) && $unit === '') {
            [$number, $unit] = explode(' ', $number);

            return [floatval($number), $this->getKeyUnit($unit)];
        }

        return [$number, $this->firstKey];
    }

    /**
     * Get the Key of the unit of measure.
     *
     * @param string $unit
     * @return string
     */
    protected function getKeyUnit(string $unit): string
    {
        $unit = strtolower($unit);

        if (isset($this->lists[$unit])) {
            return $unit;
        }

        foreach ($this->lists as $key => $value) {
            if (in_array($unit, $value['known'])) {
                return $key;
            }
        }

        return $this->firstKey;
    }

    /**
     * Convert the value to another type of unit
     *
     * @param string $unit
     * @return float
     */
    public function to(string $unit): float
    {
        $value = 0;

        foreach ($this->lists as $key => $theUnit) {
            if ($unit === $key) {
                $value = $theUnit['value'];
                break;
            }

            if (in_array($unit, $theUnit['known'])) {
                $value = $theUnit['value'];
                break;
            }
        }

        if ($value === 0) {
            // If you see this error, it means that you have entered a unit
            // That is not defined in the list, which can be
            // A writing error or a foul in the bookstore.
            throw new \Exception('Unit not found', 500);
        }

        return $this->currentValue / $value;
    }

    /**
     * Units available for conversion
     *
     * @return array
     */
    public function getAvailableUnits(): array
    {
        return $this->lists;
    }

    /**
     * Convert a specific unit, but it must be one of the listing.
     * If it is not one of the lists, the method can give error,
     * Like the final result.
     *
     * @return integer
     */
    public static function convert(int|float $number, string $unit, string $unitTo): float
    {
        $self = new static;

        $unit = $self->getAvailableUnits()[$unit];
        $unitTo = $self->getAvailableUnits()[$unitTo];

        return ($number * $unit['value']) / $unitTo['value'];
    }

    /**
     * Reset current value
     *
     * @return static
     */
    public function reset(): static
    {
        $this->currentValue = $this->originalValue;

        return $this;
    }

    /**
     * Make units conversion
     *
     * @param integer $number
     * @param string $unit
     * @return static
     */
    public static function make(string|int|float $number = 0, string $unit = ''): static
    {
        return new static($number, $unit);
    }

    /**
     * Origin Value at the lowest value
     *
     * @return integer
     */
    public function origin(): int
    {
        return $this->originalValue;
    }

    /**
     * Shows the value in a specific unit,
     * In a string, eg: (20 kB, 20 MB, 20 GB, etc).
     *
     * @param string $unit
     * @return string
     */
    public function display(string $unit, $decimals = 2): string
    {
        $unitKey = $this->getKeyUnit($unit);

        if ($unitKey === '') {
            throw new \Exception('Unit not found', 500);
        }

        return round($this->to($unitKey), $decimals, PHP_ROUND_HALF_UP) . ' ' . $this->lists[$unitKey]['symbol'];
    }

    /**
     * Add a value to the current unit.
     *
     * @param string|integer $number
     * @param string $unit
     * @return BaseConversion
     */
    public function add(string|int $number, string $unit = ''): BaseConversion
    {
        [$number, $unit] = $this->discoverUnit($number, $unit);

        $this->currentValue += static::convert($number, $unit, $this->firstKey);

        return $this;
    }

    /**
     * A value remains to the current unit
     *
     * @param string|integer $number
     * @param string $unit
     * @return BaseConversion
     */
    public function less(string|int $number, string $unit = ''): BaseConversion
    {
        [$number, $unit] = $this->discoverUnit($number, $unit);

        $this->currentValue -= static::convert($number, $unit, $this->firstKey);

        return $this;
    }


    /**
     * Compare if the current value is less than the past value
     *
     * @param string|integer $number
     * @param string $unit
     * @return boolean
     */
    public function isGreaterThan(string|int $number, string $unit = ''): bool
    {
        [$number, $unit] = $this->discoverUnit($number, $unit);

        return $this->currentValue > static::convert($number, $unit, $this->firstKey);
    }

    /**
     * Compare if the current value is less than the past value
     *
     * @param string|integer $number
     * @param string $unit
     * @return boolean
     */
    public function isLessThan(string|int $number, string $unit = ''): bool
    {
        [$number, $unit] = $this->discoverUnit($number, $unit);

        return $this->currentValue < static::convert($number, $unit, $this->firstKey);
    }

    /**
     * Compare if the current value is equal to or less than the past value
     *
     * @param string|integer $number
     * @param string $unit
     * @return boolean
     */
    public function isSameOrLess(string|int $number, string $unit = ''): bool
    {
        [$number, $unit] = $this->discoverUnit($number, $unit);

        return $this->currentValue <= static::convert($number, $unit, 'bit');
    }

    /**
     * Compare whether the current value is equal to or greater than the past value
     *
     * @param string|integer $number
     * @param string $unit
     * @return boolean
     */
    public function isSameOrGreater(string|int $number, string $unit = ''): bool
    {
        [$number, $unit] = $this->discoverUnit($number, $unit);

        return $this->currentValue >= static::convert($number, $unit, $this->firstKey);
    }

    /**
     * Compare equal values.
     *
     * @param string|integer $number
     * @param string $unit
     * @return boolean
     */
    public function same(string|int $number, string $unit = ''): bool
    {
        [$number, $unit] = $this->discoverUnit($number, $unit);

        $is = static::convert($number, $unit, $this->firstKey);

        return $this->currentValue === $is;
    }

    /**
     * Shows the value in string, converted intelligently,
     * In other words always show an easy reading number.
     */
    public function show(int $decimals = 2): string
    {
        foreach (array_reverse($this->lists, true) as $key => $unit) {
            if ($this->originalValue > $unit['value']) {
                return $this->display($key, $decimals);
            }
        }

        return $this->display($this->firstKey, $decimals);
    }

    /**
     * Intelligent conversion to values ​​according to the amount of bits.
     */
    public function smartConversion(): string
    {
        return $this->show();
    }

    /**
     * Create new instance, with the original amount,
     * and the unit of measure in bits.
     *
     * @return static
     */
    public function originTo(): static
    {
        return new static($this->originalValue, $this->firstKey);
    }
}
