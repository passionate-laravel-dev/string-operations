# String Operations in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/string-reverse.svg?style=flat-square)](https://packagist.org/packages/spatie/string-reverse)
[![Tests](https://img.shields.io/github/actions/workflow/status/spatie/string-reverse/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/spatie/string-reverse/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/string-reverse.svg?style=flat-square)](https://packagist.org/packages/spatie/string-reverse)

This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require passionator/string-operations
```

## Usage

```php
use Passionator\StringOperations\StringClass;

$string = StringClass::string("Test")->reverse();
echo $string;

$string = StringClass::string("Test")->append(" is successful!");
echo $string;
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Passionmuse2303](https://github.com/passionate-laravel-dev)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
