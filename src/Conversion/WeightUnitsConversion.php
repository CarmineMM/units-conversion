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
            'known'  => ['mg', 'milligram', 'milligrams', 'miligramo', 'miligramos'],
        ],
        'cg' => [
            'name'   => 'Centigram',
            'value'  => 10, // mg: 10
            'symbol' => 'cg',
            'known'  => ['cg', 'centigram', 'centigrams', 'centigramo', 'centigramos'],
        ],
        'dg' => [
            'name'   => 'Decigram',
            'value'  => 100, // mg: 100
            'symbol' => 'dg',
            'known'  => ['dg', 'decigram', 'decigrams', 'decigramo', 'decigramos'],
        ],
        'g' => [
            'name'   => 'Gram',
            'value'  => 1_000, // mg: 1,000
            'symbol' => 'g',
            'known'  => ['g', 'gram', 'grams', 'gramo', 'gramos'],
        ],
        'dag' => [
            'name'   => 'Decagram',
            'value'  => 10_000, // mg: 10,000
            'symbol' => 'dag',
            'known'  => ['dag', 'decagram', 'decagrams', 'decagramo', 'decagramos'],
        ],
        'hg' => [
            'name'   => 'Hectogram',
            'value'  => 100_000, // mg: 100,000
            'symbol' => 'hg',
            'known'  => ['hg', 'hectogram', 'hectograms', 'hectogramo', 'hectogramos'],
        ],
        'kg' => [
            'name'   => 'Kilogram',
            'value'  => 1_000_000, // mg: 1,000,000
            'symbol' => 'kg',
            'known'  => ['kg', 'kilogram', 'kilograms', 'kilogramo', 'kilogramos'],
        ],
        'oz' => [
            'name'   => 'Ounce',
            'value'  => 28_349.5, // mg: 28,349.5
            'symbol' => 'oz',
            'known'  => ['oz', 'ounce', 'ounces', 'onza', 'onzas'],
        ],
        'lb' => [
            'name'   => 'Pound',
            'value'  => 453_592.37, // mg: 453,592.37
            'symbol' => 'lb',
            'known'  => ['lb', 'pound', 'pounds', 'libra', 'libras'],
        ],
        'stone' => [
            'name'   => 'Stone',
            'value'  => 6_350_293.1, // mg: 6,350,293.1
            'symbol' => 'stone',
            'known'  => ['stone', 'stones', 'piedra', 'piedras'],
        ],
        'short_ton' => [
            'name'   => 'Short Ton',
            'value'  => 907_184_740, // mg: 907,184,740
            'symbol' => 'short_ton',
            'known'  => ['short ton', 'short tons', 'us ton', 'us tons', 'tonelada corta', 'toneladas cortas'],
        ],
        'ton' => [
            'name'   => 'Metric Ton',
            'value'  => 1_000_000_000, // mg: 1,000,000,000
            'symbol' => 'ton',
            'known'  => ['t', 'ton', 'tons', 'tonne', 'tonnes', 'tonelada', 'toneladas', 'metric ton', 'metric tons', 'tonelada métrica', 'toneladas métricas'],
        ],
        'long_ton' => [
            'name'   => 'Long Ton',
            'value'  => 1_016_046_908.8, // mg: 1,016,046,908.8
            'symbol' => 'long_ton',
            'known'  => ['long ton', 'long tons', 'uk ton', 'uk tons', 'tonelada larga', 'toneladas largas', 'tonelada inglesa'],
        ],
    ];
}
