# Addresses

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tipoff/addresses.svg?style=flat-square)](https://packagist.org/packages/tipoff/addresses)
![Tests](https://github.com/tipoff/addresses/workflows/Tests/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/tipoff/addresses.svg?style=flat-square)](https://packagist.org/packages/tipoff/addresses)

This is where your description should go.

## Installation

You can install the package via composer:

```bash
composer require tipoff/addresses
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Tipoff\Addresses\AddressesServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Tipoff\Addresses\AddressesServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$Addresses = new Tipoff\Addresses();
echo $Addresses->echoPhrase('Hello, Tipoff!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Tipoff](https://github.com/tipoff)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
