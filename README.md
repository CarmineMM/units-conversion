# Conversion of units

Use conversion of digital units such as GB or MB, Celsius, Fahrenheit, Kilograms, Ounces, or time conversions like years or months to weeks.

## Requirements

-   `PHP >= 8.1`
-   MIT License. **_Feel free to use this project_**. **_Leave a star :star: or support the project!_**

[![paypal](https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/paypalme/carminemaggio)

## Installation

```bash
composer require carminemm/units-conversion
```

## Classes available in the bookstore

There are multiple classes that you can use to make multiple conversions, the available ones are shown.

```php
// Conversion of digital units, MB, KB, GB, TB, etc ...
CarmineMM\UnitsConversion\Conversion\DigitalUnitsConversion::class;

// Time conversions days, months, weeks, etc ...
CarmineMM\UnitsConversion\Conversion\TimeConversion::class;

// Weight conversions, ounces, pounds, kilograms, tons, etc ...
CarmineMM\UnitsConversion\Conversion\WeightUnitsConversion::class;

// Conversion de temperature, Celsius, Fahrenheit, Kelvin, Rankine
CarmineMM\UnitsConversion\Conversion\TemperatureUnitsConversion::class;

// Conversion of kilometers, miles, feet, inches, centimeters, etc ...
CarmineMM\UnitsConversion\Conversion\LengthUnitsConversion::class;
```

All these classes inherit the same configurations and methods shown below:

## Use

### Units conversion

The basic use of this library is to represent the units passed by parameter and to be able to show them (understandable for users) or convert them, as well as perform operations with them.

```php
use CarmineMM\UnitsConversion\Conversion\DigitalUnitsConversion;
use CarmineMM\UnitsConversion\Conversion\TimeConversion;
use CarmineMM\UnitsConversion\Conversion\WeightUnitsConversion;
use CarmineMM\UnitsConversion\Conversion\TemperatureUnitsConversion;

$digitalUnits = DigitalUnitsConversion::make(12345); // 12.345 bits
$timeUnits = TimeConversion::make(12345); // 12.345 Seconds
$weightUnits = WeightUnitsConversion::make(12345); // 12.345 Milligram
$TemperatureUnits = TemperatureUnitsConversion::make(12345); // 12.345 Celsius

$digitalUnits->to('KB'); // Convert to KB: 1.506
$timeUnits->to('minutes'); // Convert to minutes: 0.2057
$weightUnits->to('hectograms'); // Convert to Hectograms: 0.12345
$TemperatureUnits->toFahrenheit(); // Convert to Fahrenheit: 22253
```

### Show in readable user

You can show the conversions into a more accurate and readable conversion or convert it and show it, delimiting the decimals if necessary.
In addition, the bookstore can try to discover the unit of measure dynamically, or passing it by parameter.

```php
use CarmineMM\UnitsConversion\Conversion\DigitalUnitsConversion;
use CarmineMM\UnitsConversion\Conversion\TimeConversion;

$digitalUnits = new DigitalUnitsConversion(12345, 'kb'); // 12.345 Kilobytes
$timeUnits = new TimeConversion('12345 seconds'); // 12.345 Seconds

$digitalUnits->display('bytes') // 12641280 bytes
$timeUnits->show(); // 3.43 hours
```

### Do you want to know which conversions available?

```php
use CarmineMM\UnitsConversion\Conversion\DigitalUnitsConversion;
use CarmineMM\UnitsConversion\Conversion\TimeConversion;

(new TimeConversion)->getAvailableUnits();         // Available units
(new DigitalUnitsConversion)->getAvailableUnits(); // Available units
```

### Methods available for conversion (returns int or float)

The bookstore tries to discover since what unit you want to convert or the destiny of the conversion.

```php
// Fast conversion without instance
//It only admits exact units to conversion, listed in 'getAvailableUnits()'
DigitalUnitsConversion::convert(number: 12323, unit: 'KB', unitTo: 'byte');

// The 'to' method can discover unity although it can be written in different ways
$units->to('GB'); // Turn Gigabyte
$units->to('gb'); // Turn Gigabyte
$units->to('gigabyte'); // Turn Gigabyte
$units->to('gigabytes'); // Turn Gigabyte
$units->to('Gigabytes'); // Turn Gigabyte
```

### Methods available for conversion and display

Like the previous one, the bookstore tries to discover where to convert and to convert.
The difference is that this show the name of the conversion.

```php
$temperatureUnits->display('°C');
$digitalUnits->display('KB');
$digitalUnits->display('kilobyte');
$digitalUnits->display('Kilobytes');

$digitalUnits->show(decimals: 3); // Discover the closest unit for conversion and show
$digitalUnits->smartConversion(); // Discover the closest unit for conversion and show
```

### Mathematical conversions

You can perform mathematical operations using the bookstore, and add, subtract or compare different conversion units, for example, add 300 megabytes to 2 gigabytes.
Or compare whether 2300 seconds is greater than 130 minutes.

### Factory methods for digital units conversion

The `DigitalUnitsConversion` class provides static factory methods to create instances from specific digital units:

```php
use CarmineMM\UnitsConversion\Conversion\DigitalUnitsConversion;

// Create instances from different digital units
$units = DigitalUnitsConversion::fromBits(1024); // 1024 bits
$units = DigitalUnitsConversion::fromBytes(1024); // 1024 bytes
$units = DigitalUnitsConversion::fromKilobytes(1); // 1 KB
$units = DigitalUnitsConversion::fromMegabytes(1); // 1 MB
$units = DigitalUnitsConversion::fromGigabytes(1); // 1 GB
$units = DigitalUnitsConversion::fromTerabytes(1); // 1 TB
$units = DigitalUnitsConversion::fromPetabytes(1); // 1 PB
```

These methods provide a more explicit way to create instances from specific digital units, making the code more readable and self-documenting.

### Direct conversion methods

In addition to the generic `to()` method, the `DigitalUnitsConversion` class provides specific methods for direct conversion to each digital unit:

```php
use CarmineMM\UnitsConversion\Conversion\DigitalUnitsConversion;

$units = DigitalUnitsConversion::make(1024, 'KB'); // 1024 KB

// Direct conversion methods
$bits = $units->toBits(); // Convert to bits
$bytes = $units->toBytes(); // Convert to bytes
$kb = $units->toKilobytes(); // Convert to kilobytes
$mb = $units->toMegabytes(); // Convert to megabytes
$gb = $units->toGigabytes(); // Convert to gigabytes
$tb = $units->toTerabytes(); // Convert to terabytes
$pb = $units->toPetabytes(); // Convert to petabytes
```

These methods provide a more explicit way to convert between units, making the code more readable and self-documenting.

#### Adding and subtracting units

```php
use CarmineMM\UnitsConversion\Conversion\DigitalUnitsConversion;

$units = DigitalUnitsConversion::make('2 GB');

$units->add(230, 'MB'); //Add 230 MB to the '2 GB'
$units->add(1098931); // Add 1,098,931 bits to '2 GB'

$units->less('1.3 GB'); // Restar 1.3 GB a los '2 GB'

//The units are stored in the current
$units->getCurrent();

// Or show the remaining after the sums and subtractions
$units->smartConversion();
```

#### Compare from units

Buying units can be easy thanks to discover units.

```php
use CarmineMM\UnitsConversion\Conversion\DigitalUnitsConversion;

$units = DigitalUnitsConversion::make('5 GB');

// Compare if the current value is greater than the past by parameter
if ( $units->isGreaterThan(6144, 'MB') ) {
    //...
}

// Less than ...
if ( $units->isLessThan(4000, 'MB') ) {
    //...
}

// Like the smallest
if ( $units->isSameOrLess(4.69, 'GB') ) {
    //...
}
// Equal or greater
if ( $units->isSameOrGreater(5.2, 'GB') ) {
    //...
}

// Exactly the same
if ( $units->same(5, 'GB') ) {
    //...
}
```

## Restore the units

Sometimes when you have an instance and you have done operations with it, it may be necessary to restart, or restore the value, to the original.

```php
use CarmineMM\UnitsConversion\Conversion\DigitalUnitsConversion;

$units = DigitalUnitsConversion::make('5 GB');

$units->less('1 GB');
$units->less('2 GB');

$units->reset(); // Reset to 5 GB
```

Or you can also double the instance to have a new for other conversions.

```php
use CarmineMM\UnitsConversion\Conversion\DigitalUnitsConversion;

$units = DigitalUnitsConversion::make('5 GB');

$units->less('1 GB');
$units->less('2 GB');

$newUnit = $units->originTo();
```
