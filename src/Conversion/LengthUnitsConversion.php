<?php

namespace CarmineMM\UnitsConversion\Conversion;

use CarmineMM\UnitsConversion\Base\BaseConversion;

/**
 * Length units conversion
 * 
 * @author Carmine Maggio <carminemaggiom@gmail.com>
 * @package UnitsConversion
 * @version 1.0.0
 */
class LengthUnitsConversion extends BaseConversion
{
    /**
     * Known units
     */
    protected array $lists = [
        'μm' => [
            'name' => 'Micrometers',
            'value' => 1,
            'symbol' => 'μm',
            'known'  => ['micrometers', 'micrometer', 'micrometro', 'micrometros'],
        ],
        'mm' => [
            'name' => 'Millimeters',
            'value' => 1_000,
            'symbol' => 'mm',
            'known'  => ['millimeters', 'millimeter', 'milimetro', 'milimetros'],
        ],
        'cm' => [
            'name' => 'Centimeters',
            'value' => 10_000,
            'symbol' => 'cm',
            'known'  => ['centimeters', 'centimeter', 'centimetro', 'centimetros'],
        ],
        'in' => [
            'name' => 'Inches',
            'value' => 25_400,
            'symbol' => 'in',
            'known'  => ['inches', 'inch', 'pulgada', 'pulgadas'],
        ],
        'dm' => [
            'name' => 'Decimeters',
            'value' => 100_000,
            'symbol' => 'dm',
            'known'  => ['decimeters', 'decimeter', 'decimetro', 'decimetros'],
        ],
        'ft' => [
            'name' => 'Feet',
            'value' => 304_800,
            'symbol' => 'ft',
            'known'  => ['feet', 'foot', 'pie', 'pies'],
        ],
        'yd' => [
            'name' => 'Yards',
            'value' => 914_400,
            'symbol' => 'yd',
            'known'  => ['yards', 'yard', 'yarda', 'yardas'],
        ],
        'm' => [
            'name' => 'Meters',
            'value' => 1_000_000,
            'symbol' => 'm',
            'known'  => ['meters', 'meter', 'metro', 'metros'],
        ],
        'dkm' => [
            'name' => 'Decameters',
            'value' => 10_000_000,
            'symbol' => 'dkm',
            'known'  => ['decameters', 'decameter', 'decametro', 'decametros'],
        ],
        'hm' => [
            'name' => 'Hectometers',
            'value' => 100_000_000,
            'symbol' => 'hm',
            'known'  => ['hectometers', 'hectometer', 'hectometro', 'hectometros'],
        ],
        'km' => [
            'name' => 'Kilometers',
            'value' => 1_000_000_000,
            'symbol' => 'km',
            'known'  => ['kilometers', 'kilometer', 'kilometro', 'kilometros'],
        ],
        'mi' => [
            'name' => 'Miles',
            'value' => 1_609_344_000,
            'symbol' => 'mi',
            'known'  => ['miles', 'mile', 'milla', 'millas'],
        ],
        'nmi' => [
            'name' => 'Nautical Miles',
            'value' => 1_852_000_000,
            'symbol' => 'nmi',
            'known'  => ['nautical-miles', 'nautical-mile', 'milla-nautica', 'millas-nauticas'],
        ],
    ];

    /**
     * Create a new LengthUnitsConversion instance from micrometers
     * 
     * @param float $value
     * @return self
     */
    public static function fromMicrometers(float $value): self
    {
        return new self($value, 'μm');
    }

    /**
     * Create a new LengthUnitsConversion instance from millimeters
     * 
     * @param float $value
     * @return self
     */
    public static function fromMillimeters(float $value): self
    {
        return new self($value, 'mm');
    }

    /**
     * Create a new LengthUnitsConversion instance from centimeters
     * 
     * @param float $value
     * @return self
     */
    public static function fromCentimeters(float $value): self
    {
        return new self($value, 'cm');
    }

    /**
     * Create a new LengthUnitsConversion instance from inches
     * 
     * @param float $value
     * @return self
     */
    public static function fromInches(float $value): self
    {
        return new self($value, 'in');
    }

    /**
     * Create a new LengthUnitsConversion instance from decimeters
     * 
     * @param float $value
     * @return self
     */
    public static function fromDecimeters(float $value): self
    {
        return new self($value, 'dm');
    }

    /**
     * Create a new LengthUnitsConversion instance from feet
     * 
     * @param float $value
     * @return self
     */
    public static function fromFeet(float $value): self
    {
        return new self($value, 'ft');
    }

    /**
     * Create a new LengthUnitsConversion instance from yards
     * 
     * @param float $value
     * @return self
     */
    public static function fromYards(float $value): self
    {
        return new self($value, 'yd');
    }

    /**
     * Create a new LengthUnitsConversion instance from meters
     * 
     * @param float $value
     * @return self
     */
    public static function fromMeters(float $value): self
    {
        return new self($value, 'm');
    }

    /**
     * Create a new LengthUnitsConversion instance from decameters
     * 
     * @param float $value
     * @return self
     */
    public static function fromDecameters(float $value): self
    {
        return new self($value, 'dkm');
    }

    /**
     * Create a new LengthUnitsConversion instance from hectometers
     * 
     * @param float $value
     * @return self
     */
    public static function fromHectometers(float $value): self
    {
        return new self($value, 'hm');
    }

    /**
     * Create a new LengthUnitsConversion instance from kilometers
     * 
     * @param float $value
     * @return self
     */
    public static function fromKilometers(float $value): self
    {
        return new self($value, 'km');
    }

    /**
     * Create a new LengthUnitsConversion instance from miles
     * 
     * @param float $value
     * @return self
     */
    public static function fromMiles(float $value): self
    {
        return new self($value, 'mi');
    }

    /**
     * Create a new LengthUnitsConversion instance from nautical miles
     * 
     * @param float $value
     * @return self
     */
    public static function fromNauticalMiles(float $value): self
    {
        return new self($value, 'nmi');
    }

    /**
     * Convert to micrometers
     * 
     * @return float
     */
    public function toMicrometers(): float
    {
        return $this->to('μm');
    }


    /**
     * Convert to millimeters
     * 
     * @return float
     */
    public function toMillimeters(): float
    {
        return $this->to('mm');
    }

    /**
     * Convert to centimeters
     * 
     * @return float
     */
    public function toCentimeters(): float
    {
        return $this->to('cm');
    }

    /**
     * Convert to meters
     * 
     * @return float
     */
    public function toMeters(): float
    {
        return $this->to('m');
    }

    /**
     * Convert to kilometers
     * 
     * @return float
     */
    public function toKilometers(): float
    {
        return $this->to('km');
    }

    /**
     * Convert to inches
     * 
     * @return float
     */
    public function toInches(): float
    {
        return $this->to('in');
    }

    /**
     * Convert to feet
     * 
     * @return float
     */
    public function toFeet(): float
    {
        return $this->to('ft');
    }

    /**
     * Convert to yards
     * 
     * @return float
     */
    public function toYards(): float
    {
        return $this->to('yd');
    }

    /**
     * Convert to decimeters
     * 
     * @return float
     */
    public function toDecimeters(): float
    {
        return $this->to('dm');
    }

    /**
     * Convert to decameters
     * 
     * @return float
     */
    public function toDecameters(): float
    {
        return $this->to('dkm');
    }

    /**
     * Convert to hectometers
     * 
     * @return float
     */
    public function toHectometers(): float
    {
        return $this->to('hm');
    }

    /**
     * Convert to miles
     * 
     * @return float
     */
    public function toMiles(): float
    {
        return $this->to('mi');
    }

    /**
     * Convert to nautical miles
     * 
     * @return float
     */
    public function toNauticalMiles(): float
    {
        return $this->to('nmi');
    }
}
