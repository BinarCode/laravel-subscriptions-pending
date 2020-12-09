# Lightweight package to add payment plan subscriptions.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/binarcode/laravel-subscriptions.svg?style=flat-square)](https://packagist.org/packages/binarcode/laravel-subscriptions)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/binarcode/laravel-subscriptions/run-tests?label=tests)](https://github.com/binarcode/laravel-subscriptions/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/binarcode/laravel-subscriptions.svg?style=flat-square)](https://packagist.org/packages/binarcode/laravel-subscriptions)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require binarcode/laravel-subscriptions
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="BinarCode\LaravelSubscription\LaravelSubscriptionServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="BinarCode\LaravelSubscription\LaravelSubscriptionServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$laravel-subscriptions = new BinarCode\LaravelSubscription();
echo $laravel-subscriptions->echoPhrase('Hello, BinarCode!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Eduard Lupacescu](https://github.com/binaryk)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
