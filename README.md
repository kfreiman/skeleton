This is a skeleton to create packages implementing [PSR-15](https://github.com/http-interop/http-middleware) using composer:

```sh
composer create-project --stability=dev middlewares/boilerplate my-middleware
```

If you want to create a `ServerMiddlewareInterface`, use the `dev-server` version:

```sh
composer create-project --stability=dev middlewares/boilerplate my-middleware dev-server
```

Note: After creating the project, Composer will ask to remove the existing VCS history (the .git directory). You should type `y` (it's the default option, anyway).

---

# middlewares/boilerplate

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-scrutinizer]][link-scrutinizer]
[![Total Downloads][ico-downloads]][link-downloads]
[![SensioLabs Insight][ico-sensiolabs]][link-sensiolabs]

Description of the middleware

## Requirements

* PHP >= 5.6
* A [PSR-7](https://packagist.org/providers/psr/http-message-implementation) http mesage implementation ([Diactoros](https://github.com/zendframework/zend-diactoros), [Guzzle](https://github.com/guzzle/psr7), [Slim](https://github.com/slimphp/Slim), etc...)
* A [PSR-15](https://github.com/http-interop/http-middleware) middleware dispatcher ([Middleman](https://github.com/mindplay-dk/middleman), etc...)

## Installation

This package is installable and autoloadable via Composer as [middlewares/boilerplate](https://packagist.org/packages/middlewares/boilerplate).

```sh
composer require middlewares/boilerplate
```

## Example

```php
$dispatcher = new Dispatcher([
	(new Middlewares\Boilerplate())
		->option1()
		->option2($value)
]);

$response = $dispatcher->dispatch(new Request());
```

## Options

#### `option1()`

Option description

#### `option2($arg)`

Option description

---

Please see [CHANGELOG](CHANGELOG.md) for more information about recent changes and [CONTRIBUTING](CONTRIBUTING.md) for contributing details.

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/middlewares/boilerplate.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/middlewares/boilerplate/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/g/middlewares/boilerplate.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/middlewares/boilerplate.svg?style=flat-square
[ico-sensiolabs]: https://img.shields.io/sensiolabs/i/36786f5a-2a15-4399-8817-8f24fcd8c0b4.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/middlewares/boilerplate
[link-travis]: https://travis-ci.org/middlewares/boilerplate
[link-scrutinizer]: https://scrutinizer-ci.com/g/middlewares/boilerplate
[link-downloads]: https://packagist.org/packages/middlewares/boilerplate
[link-sensiolabs]: https://insight.sensiolabs.com/projects/36786f5a-2a15-4399-8817-8f24fcd8c0b4
