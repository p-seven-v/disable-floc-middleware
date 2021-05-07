# Disable Google's FLoC with PSR-15 middleware

[![Latest Version on Packagist](https://img.shields.io/packagist/v/p7v/disable-floc-middleware.svg?style=flat)](https://packagist.org/packages/p7v/disable-floc-middleware)

This package will automatically disable [Google's FLoC](https://plausible.io/blog/google-floc).

## Installation

You can install the package via composer:

```bash
composer require p7v/disable-floc-middleware
```

## Usage

Package provides with single `P7v\DisableFloc\DisableFlocMiddleware` class. It is [PSR-15][psr15] middleware, thus can be used for any [PSR-15][psr15] handler. Just include it in chain of your middlewares.

[psr15]: https://www.php-fig.org/psr/psr-15/

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Alex Plekhanov](https://github.com/alexsoft)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
