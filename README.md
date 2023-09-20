# Lightbox for Filament

[![Latest Version on Packagist](https://img.shields.io/packagist/v/njxqlus/filament-lightbox.svg?style=flat-square)](https://packagist.org/packages/njxqlus/filament-lightbox)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/njxqlus/filament-lightbox/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/njxqlus/filament-lightbox/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/njxqlus/filament-lightbox.svg?style=flat-square)](https://packagist.org/packages/njxqlus/filament-lightbox)

<img alt="banner" class="filament-hidden" src="https://github.com/njxqlus/filament-lightbox/blob/main/.github/banner.jpg?raw=true">

Lightbox entry for Filament.

## Installation

You can install the package via composer:

```bash
composer require njxqlus/filament-lightbox
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-lightbox-views"
```

## Usage

To use `LightboxEntry` you need to pass something into schema and add a `href()`. There can be any component or components
inside schema. There is an example with `ImageEntry` below.

```php
use Njxqlus\Filament\Components\Infolists\LightboxEntry;

LightboxEntry::make()
    ->schema([
        ImageEntry::make('image')
            ->circular()
    ])
    ->href('https://biati-digital.github.io/glightbox/demo/img/large/gm2.jpg')
```

This component use [GLightBox](https://github.com/biati-digital/glightbox) under the hood. Most of it`s options provided as
chain methods. There are some of them in the example below.

```php
use Njxqlus\Filament\Components\Infolists\LightboxEntry;

LightboxEntry::make()
    ->schema([
        ImageEntry::make('image')
            ->circular()
    ])
    ->href('https://biati-digital.github.io/glightbox/demo/img/large/gm2.jpg')
    ->description(new HtmlString('<strong>Lightbox</strong>'))
    ->loop()
    ->widthOption('906px')
    ->heightOption('500px')
    ->effect('zoom')
```

You also can use `LightboxImageEntry` if you need lightbox for one image.

```php
use Njxqlus\Filament\Components\Infolists\LightboxImageEntry;

LightboxImageEntry::make('image')
    ->href('https://biati-digital.github.io/glightbox/demo/img/large/gm2.jpg')
```

You can also call an `image` method to pass custom URL for image.

```php
use Njxqlus\Filament\Components\Infolists\LightboxImageEntry;

LightboxImageEntry::make('image')
    ->url('https://biati-digital.github.io/glightbox/demo/img/small/gm2.jpg')
    ->href('https://biati-digital.github.io/glightbox/demo/img/large/gm2.jpg')
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

- [Mikael Ahabalyants](https://github.com/njxqlus)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
