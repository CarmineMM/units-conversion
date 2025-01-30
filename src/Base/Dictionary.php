<?php

namespace CarmineMM\UnitsConversion\Base;

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
                'bit' => [
                    'short' => ['Bit', 'Bits'],
                    'long' => ['Bit', 'Bits'],
                ],
                'byte' => [
                    'short' => ['Byte', 'Bytes'],
                    'long' => ['Byte', 'Bytes'],
                ],
                'kilobyte' => [
                    'short' => ['Kilobyte', 'Kilobytes'],
                    'long' => ['Kilobyte', 'Kilobytes'],
                ],
                'megabyte' => [
                    'short' => ['Megabyte', 'Megabytes'],
                    'long' => ['Megabyte', 'Megabytes'],
                ],
                'gigabyte' => [
                    'short' => ['Gigabyte', 'Gigabytes'],
                    'long' => ['Gigabyte', 'Gigabytes'],
                ],
                'terabyte' => [
                    'short' => ['Terabyte', 'Terabytes'],
                    'long' => ['Terabyte', 'Terabytes'],
                ]
            ],
        ];

        $es = [
            'DigitalUnitsConversion' => $en['DigitalUnitsConversion'],
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

        $this->symbolInstance = $this->symbols($this->locale)[$this->symbolKey];
    }

    /**
     * Obtiene el key del diccionario
     *
     * @return array
     */
    public function getKey(): array
    {
        return [];
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
}
