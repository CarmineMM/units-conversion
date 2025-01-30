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
class WeightUnitsConversion extends BaseConversion
{
    /**
     * Known units
     */
    protected array $lists = [
        'mg' => [
            'name'   => 'Milligram',
            'value'  => 1,
            'symbol' => 'mg',
            'known'  => ['mg', 'milligram', 'milligrams'],
        ],
        'cg' => [
            'name'   => 'Centigram',
            'value'  => 10, // mg: 10
            'symbol' => 'cg',
            'known'  => ['cg', 'centigram', 'centigrams'],
        ],
        'dg' => [
            'name'   => 'Decigram',
            'value'  => 100, // mg: 100
            'symbol' => 'dg',
            'known'  => ['dg', 'decigram', 'decigrams'],
        ],
        'g' => [
            'name'   => 'Gram',
            'value'  => 1_000, // mg: 1,000
            'symbol' => 'g',
            'known'  => ['g', 'gram', 'grams'],
        ],
        'dag' => [
            'name'   => 'Decagram',
            'value'  => 10_000, // mg: 10,000
            'symbol' => 'dag',
            'known'  => ['dag', 'decagram', 'decagrams'],
        ],
        'hg' => [
            'name'   => 'Hectogram',
            'value'  => 100_000, // mg: 100,000
            'symbol' => 'hg',
            'known'  => ['hg', 'hectogram', 'hectograms'],
        ],
        'kg' => [
            'name'   => 'Kilogram',
            'value'  => 1_000_000, // mg: 1,000,000
            'symbol' => 'kg',
            'known'  => ['kg', 'kilogram', 'kilograms'],
        ],
        'oz' => [
            'name'   => 'Ounce',
            'value'  => 28_349.5, // mg: 28,349.5
            'symbol' => 'oz',
            'known'  => ['oz', 'ounce', 'ounces'],
        ],
        'lb' => [
            'name'   => 'Pound',
            'value'  => 453_592.37, // mg: 453,592.37
            'symbol' => 'lb',
            'known'  => ['lb', 'pound', 'pounds'],
        ],
        'ton' => [
            'name'   => 'Metric Ton',
            'value'  => 1_000_000_000, // mg: 1,000,000,000
            'symbol' => 'ton',
            'known'  => ['ton', 'tons', 'tonne', 'tonnes'],
        ],
        'short_ton' => [
            'name'   => 'Short Ton',
            'value'  => 907_184_740, // mg: 907,184,740
            'symbol' => 'short ton',
            'known'  => ['short ton', 'short tons', 'us ton', 'us tons'],
        ],
        'long_ton' => [
            'name'   => 'Long Ton',
            'value'  => 1_016_046_908.8, // mg: 1,016,046,908.8
            'symbol' => 'long ton',
            'known'  => ['long ton', 'long tons', 'uk ton', 'uk tons'],
        ],
    ];
}
