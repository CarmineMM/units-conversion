<?php

namespace CarmineMM\UnitsConversion\Base;

use Ausi\SlugGenerator\SlugGenerator;
use Exception;

/**
 * Word dictionary to translate and use in display methods
 * 
 * @author Carmine Maggio <carminemaggiom@gmail.com>
 * @package UnitsConversion
 * @version 1.0.0
 */
class Dictionary
{
    /**
     * Default locale
     *
     * @var string
     */
    public string $locale = 'en';

    /**
     * Current dictionary in use
     *
     * @var array
     */
    public array $symbolInstance = [];

    /**
     * List symbols in the dictionary.
     * Primer value, singular, second value, plural.
     *
     * @return array
     */
    public function symbols(string $locale): array
    {
        $en = [
            'DigitalUnitsConversion' => [
                'bits' => [
                    'short' => ['Bit', 'Bits'],
                    'long' => ['Bit', 'Bits'],
                ],
                'bytes' => [
                    'short' => ['Byte', 'Bytes'],
                    'long' => ['Byte', 'Bytes'],
                ],
                'KB' => [
                    'short' => ['KB', 'KB'],
                    'long' => ['Kilobyte', 'Kilobytes'],
                ],
                'MB' => [
                    'short' => ['MB', 'MB'],
                    'long' => ['Megabyte', 'Megabytes'],
                ],
                'GB' => [
                    'short' => ['GB', 'GB'],
                    'long' => ['Gigabyte', 'Gigabytes'],
                ],
                'TB' => [
                    'short' => ['TB', 'TB'],
                    'long' => ['Terabyte', 'Terabytes'],
                ],
                'PB' => [
                    'short' => ['PB', 'PB'],
                    'long' => ['Petabyte', 'Petabytes'],
                ],
            ],
            'TimeConversion' => [
                'ms' => [
                    'short' => ['ms', 'ms'],
                    'long' => ['Millisecond', 'Milliseconds'],
                ],
                's' => [
                    'short' => ['s', 's'],
                    'long' => ['Second', 'Seconds'],
                ],
                'min' => [
                    'short' => ['min', 'min'],
                    'long' => ['Minute', 'Minutes'],
                ],
                'h' => [
                    'short' => ['h', 'h'],
                    'long' => ['Hour', 'Hours'],
                ],
                'd' => [
                    'short' => ['d', 'd'],
                    'long' => ['Day', 'Days'],
                ],
                'w' => [
                    'short' => ['W', 'W'],
                    'long' => ['Week', 'Weeks'],
                ],
                'm' => [
                    'short' => ['M', 'M'],
                    'long' => ['Month', 'Months'],
                ],
                'y' => [
                    'short' => ['Y', 'Y'],
                    'long' => ['Year', 'Years'],
                ],
                'decade' => [
                    'short' => ['dec', 'decades'],
                    'long' => ['Decade', 'Decades'],
                ],
                'century' => [
                    'short' => ['century', 'centuries'],
                    'long' => ['Century', 'Centuries'],
                ],
            ],
            'WeightUnitsConversion' => [
                'mg' => [
                    'short' => ['mg', 'mg'],
                    'long' => ['Milligram', 'Milligrams'],
                ],
                'cg' => [
                    'short' => ['cg', 'cg'],
                    'long' => ['Centigram', 'Centigrams'],
                ],
                'dg' => [
                    'short' => ['dg', 'dg'],
                    'long' => ['Decigram', 'Decigrams'],
                ],
                'g' => [
                    'short' => ['g', 'g'],
                    'long' => ['Gram', 'Grams'],
                ],
                'dag' => [
                    'short' => ['dag', 'dag'],
                    'long' => ['Decagram', 'Decagrams'],
                ],
                'hg' => [
                    'short' => ['hg', 'hg'],
                    'long' => ['Hectogram', 'Hectograms'],
                ],
                'kg' => [
                    'short' => ['kg', 'kg'],
                    'long' => ['Kilogram', 'Kilograms'],
                ],
                'oz' => [
                    'short' => ['oz', 'oz'],
                    'long' => ['Ounce', 'Ounces'],
                ],
                'lb' => [
                    'short' => ['lb', 'lb'],
                    'long' => ['Pound', 'Pounds'],
                ],
                'stone' => [
                    'short' => ['st', 'st'],
                    'long' => ['Stone', 'Stones'],
                ],
                'short_ton' => [
                    'short' => ['sht', 'sht'],
                    'long' => ['Short Ton', 'Short Tons'],
                ],
                'ton' => [
                    'short' => ['t', 't'],
                    'long' => ['Ton', 'Tons'],
                ],
                'long_ton' => [
                    'short' => ['lot', 'lot'],
                    'long' => ['Long Ton', 'Long Tons'],
                ],
            ],
            'TemperatureUnitsConversion' => [
                '°C' => [
                    'short' => ['°C', '°C'],
                    'long' => ['Celsius', 'Celsius'],
                ],
                '°F' => [
                    'short' => ['°F', '°F'],
                    'long' => ['Fahrenheit', 'Fahrenheit'],
                ],
                '°K' => [
                    'short' => ['°K', '°K'],
                    'long' => ['Kelvin', 'Kelvin'],
                ],
                '°R' => [
                    'short' => ['°R', '°R'],
                    'long' => ['Rankine', 'Rankine'],
                ]
            ],
            'LengthUnitsConversion' => [
                'μm' => [
                    'short' => ['μm', 'μm'],
                    'long' => ['Micrometer', 'Micrometers'],
                ],
            ],
        ];

        $es = [
            'DigitalUnitsConversion' => $en['DigitalUnitsConversion'],
            'TimeConversion' => [
                'ms' => [
                    'short' => ['ms', 'ms'],
                    'long' => ['Milisegundo', 'Milisegundos'],
                ],
                's' => [
                    'short' => ['s', 's'],
                    'long' => ['Segundo', 'Segundos'],
                ],
                'min' => [
                    'short' => ['min', 'min'],
                    'long' => ['Minuto', 'Minutos'],
                ],
                'h' => [
                    'short' => ['h', 'h'],
                    'long' => ['Hora', 'Horas'],
                ],
                'd' => [
                    'short' => ['D', 'D'],
                    'long' => ['Día', 'Días'],
                ],
                'w' => [
                    'short' => ['S', 'S'],
                    'long' => ['Semana', 'Semanas'],
                ],
                'm' => [
                    'short' => ['M', 'M'],
                    'long' => ['Mes', 'Meses'],
                ],
                'y' => [
                    'short' => ['A', 'A'],
                    'long' => ['Año', 'Años'],
                ],
                'decade' => [
                    'short' => ['dec', 'décadas'],
                    'long' => ['Década', 'Décadas'],
                ],
                'century' => [
                    'short' => ['SL', 'SLS'],
                    'long' => ['Siglo', 'Siglos'],
                ],
            ],
            'WeightUnitsConversion' => [
                'mg' => [
                    'short' => ['mg', 'mg'],
                    'long' => ['Miligramo', 'Miligramos'],
                ],
                'cg' => [
                    'short' => ['cg', 'cg'],
                    'long' => ['Centigramo', 'Centigramos'],
                ],
                'dg' => [
                    'short' => ['dg', 'dg'],
                    'long' => ['Decigramo', 'Decigramos'],
                ],
                'g' => [
                    'short' => ['g', 'g'],
                    'long' => ['Gramo', 'Gramos'],
                ],
                'dag' => [
                    'short' => ['dag', 'dag'],
                    'long' => ['Decagramo', 'Decagramos'],
                ],
                'hg' => [
                    'short' => ['hg', 'hg'],
                    'long' => ['Hectogramo', 'Hectogramos'],
                ],
                'kg' => [
                    'short' => ['kg', 'kg'],
                    'long' => ['Kilogramo', 'Kilogramos'],
                ],
                'oz' => [
                    'short' => ['oz', 'oz'],
                    'long' => ['Onza', 'Onzas'],
                ],
                'lb' => [
                    'short' => ['lb', 'lb'],
                    'long' => ['Libra', 'Libras'],
                ],
                'stone' => [
                    'short' => ['st', 'st'],
                    'long' => ['Piedra', 'Piedras'],
                ],
                'short_ton' => [
                    'short' => ['sht', 'sht'],
                    'long' => ['Tonelada Corta', 'Toneladas Cortas'],
                ],
                'ton' => [
                    'short' => ['t', 't'],
                    'long' => ['Tonelada', 'Toneladas'],
                ],
                'long_ton' => [
                    'short' => ['lot', 'lot'],
                    'long' => ['Tonelada Larga', 'Toneladas Largas'],
                ],
            ],
            'TemperatureUnitsConversion' => [
                '°C' => [
                    'short' => ['°C', '°C'],
                    'long' => ['Grado Celsius', 'Grados Celsius'],
                ],
                '°F' => [
                    'short' => ['°F', '°F'],
                    'long' => ['Grado Fahrenheit', 'Grados Fahrenheit'],
                ],
                '°K' => [
                    'short' => ['°K', '°K'],
                    'long' => ['Grado Kelvin', 'Grados Kelvin'],
                ],
                '°R' => [
                    'short' => ['°R', '°R'],
                    'long' => ['Grado Rankine', 'Grados Rankine'],
                ],
            ],
        ];

        return match ($locale) {
            'es' => $es,
            default => $en
        };
    }

    /**
     * Current instance
     *
     * @var Dictionary|null
     */
    public static ?Dictionary $instance = null;

    /**
     * Symbols keys (class name)
     *
     * @var string
     */
    public string $symbolKey;

    /**
     * Get Instance
     *
     * @return Dictionary
     */
    public static function getInstance(): Dictionary
    {
        if (!self::$instance) {
            self::$instance = new Dictionary();
        }

        return self::$instance;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->discoverLocale();
        $this->symbolInstance = $this->symbols($this->locale);
    }

    /**
     * Set Symbol key
     *
     * @param string $symbolKey
     * @return void
     */
    public function setSymbolKey(string $symbolKey): void
    {
        $this->symbolKey = $symbolKey;

        $this->symbolInstance = $this->symbols($this->locale)[$this->symbolKey] ??
            // If you are seeing an error here, it means that the unit of measure
            // is not found in the dictionary, to make a display in the current language
            // Try to configure the language of the library in 'In' not to fail.
            throw new Exception("Symbol key not found", 500);
    }

    /**
     * Obtiene el key del diccionario
     *
     * @return array
     */
    public function getKey(string $key, string $symbolMode, bool $plural = false, string $default = ''): string
    {
        return $this->symbolInstance[$key][$symbolMode][$plural ? 1 : 0] ?? $default;
    }

    /**
     * Establish current language
     *
     * @return static
     */
    public function setLocale(string $locale): static
    {
        self::$instance->locale = $locale;

        $this->symbolInstance = $this->symbols($this->locale)[$this->symbolKey];

        return $this;
    }

    /**
     * Try to discover language by configuring,
     * Based on Laravel, CodeIgniter, or system configuration.
     *
     * @return void
     */
    public function discoverLocale(): void
    {
        // Verifica por laravel
        if (function_exists('config') && config('app.locale')) {
            $this->locale = config('app.locale');
            return;
        }

        // Verifica por CodeIgniter
        // if (function_exists('CI') && CI::$APP) {
        //     return $this->lang = CI::$APP->config->item('language');
        // }

        // Verifica por el sistema
        $acceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'en';
        $languages = explode(',', $acceptLanguage);

        // Extrae el primer idioma, que es el preferido
        $this->locale = strtolower(substr($languages[0], 0, 2));
    }

    /**
     * Parse to slug.
     *
     * @param string $string
     * @return string
     */
    public static function slug(string $string): string
    {
        return (new SlugGenerator)->generate($string);
    }
}
