<?php

namespace CarmineMM\UnitsConversion\Conversion;

use CarmineMM\UnitsConversion\Base\BaseConversion;

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
}
