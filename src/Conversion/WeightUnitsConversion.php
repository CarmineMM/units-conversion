<?php

namespace CarmineMM\UnitsConversion\Conversion;

use CarmineMM\UnitsConversion\Base\BaseConversion;

/**
 * Weight conversion
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
            'known'  => ['short-ton', 'short-tons', 'us-ton', 'us-tons', 'tonelada-corta', 'toneladas-cortas'],
        ],
        'ton' => [
            'name'   => 'Metric Ton',
            'value'  => 1_000_000_000, // mg: 1,000,000,000
            'symbol' => 'ton',
            'known'  => ['t', 'ton', 'tons', 'tonne', 'tonnes', 'tonelada', 'toneladas', 'metric-ton', 'metric-tons', 'tonelada-metrica', 'toneladas-metricas'],
        ],
        'long_ton' => [
            'name'   => 'Long Ton',
            'value'  => 1_016_046_908.8, // mg: 1,016,046,908.8
            'symbol' => 'long_ton',
            'known'  => ['long-ton', 'long-tons', 'uk-ton', 'uk-tons', 'tonelada-larga', 'toneladas-largas', 'tonelada-inglesa'],
        ],
    ];

    /**
     * From milligrams
     *
     * @param float $value
     * @return self
     */
    public function fromMilligrams(float $value): self
    {
        return new self($value, 'mg');
    }

    /**
     * From centigrams
     *
     * @param float $value
     * @return self
     */
    public function fromCentigrams(float $value): self
    {
        return new self($value, 'cg');
    }

    /**
     * From decigrams
     *
     * @param float $value
     * @return self
     */
    public function fromDecigrams(float $value): self
    {
        return new self($value, 'dg');
    }

    /**
     * From grams
     *
     * @param float $value
     * @return self
     */
    public function fromGrams(float $value): self
    {
        return new self($value, 'g');
    }

    /**
     * From decagrams
     *
     * @param float $value
     * @return self
     */
    public function fromDecagrams(float $value): self
    {
        return new self($value, 'dag');
    }

    /**
     * From hectograms
     *
     * @param float $value
     * @return self
     */
    public function fromHectograms(float $value): self
    {
        return new self($value, 'hg');
    }

    /**
     * From kilograms
     *
     * @param float $value
     * @return self
     */
    public function fromKilograms(float $value): self
    {
        return new self($value, 'kg');
    }

    /**
     * From ounces
     *
     * @param float $value
     * @return self
     */
    public function fromOunces(float $value): self
    {
        return new self($value, 'oz');
    }

    /**
     * From pounds
     *
     * @param float $value
     * @return self
     */
    public function fromPounds(float $value): self
    {
        return new self($value, 'lb');
    }

    /**
     * From stones
     *
     * @param float $value
     * @return self
     */
    public function fromStones(float $value): self
    {
        return new self($value, 'stone');
    }

    /**
     * From short tons
     *
     * @param float $value
     * @return self
     */
    public function fromShortTons(float $value): self
    {
        return new self($value, 'short_ton');
    }

    /**
     * From metric tons
     *
     * @param float $value
     * @return self
     */
    public function fromMetricTons(float $value): self
    {
        return new self($value, 'ton');
    }

    /**
     * From long tons
     *
     * @param float $value
     * @return self
     */
    public function fromLongTons(float $value): self
    {
        return new self($value, 'long_ton');
    }

    /**
     * Convert the value to milligrams
     *
     * @return float
     */
    public function toMilligrams(): float
    {
        return $this->to('mg');
    }


    /**
     * Convert the value to centigrams
     *
     * @return float
     */
    public function toCentigrams(): float
    {
        return $this->to('cg');
    }

    /**
     * Convert the value to decigrams
     *
     * @return float
     */
    public function toDecigrams(): float
    {
        return $this->to('dg');
    }

    /**
     * Convert the value to grams
     *
     * @return float
     */
    public function toGrams(): float
    {
        return $this->to('g');
    }

    /**
     * Convert the value to decagrams
     *
     * @return float
     */
    public function toDecagrams(): float
    {
        return $this->to('dag');
    }

    /**
     * Convert the value to hectograms
     *
     * @return float
     */
    public function toHectograms(): float
    {
        return $this->to('hg');
    }

    /**
     * Convert the value to kilograms
     *
     * @return float
     */
    public function toKilograms(): float
    {
        return $this->to('kg');
    }

    /**
     * Convert the value to ounces
     *
     * @return float
     */
    public function toOunces(): float
    {
        return $this->to('oz');
    }

    /**
     * Convert the value to pounds
     *
     * @return float
     */
    public function toPounds(): float
    {
        return $this->to('lb');
    }

    /**
     * Convert the value to stones
     *
     * @return float
     */
    public function toStones(): float
    {
        return $this->to('stone');
    }

    /**
     * Convert the value to short tons
     *
     * @return float
     */
    public function toShortTons(): float
    {
        return $this->to('short_ton');
    }

    /**
     * Convert the value to metric tons
     *
     * @return float
     */
    public function toMetricTons(): float
    {
        return $this->to('ton');
    }

    /**
     * Convert the value to long tons
     *
     * @return float
     */
    public function toLongTons(): float
    {
        return $this->to('long_ton');
    }
}
