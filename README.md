# Lightbox for Filament

[![Latest Version on Packagist](https://img.shields.io/packagist/v/njxqlus/filament-lightbox.svg?style=flat-square)](https://packagist.org/packages/njxqlus/filament-lightbox)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/njxqlus/filament-lightbox/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/njxqlus/filament-lightbox/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/njxqlus/filament-lightbox.svg?style=flat-square)](https://packagist.org/packages/njxqlus/filament-lightbox)

<img alt="banner" class="filament-hidden" src="https://github.com/njxqlus/filament-lightbox/blob/main/.github/banner.jpg?raw=true">

Lightbox components for Filament.

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

### LightboxImageEntry

This entry extend default `ImageEntry` and wrap it to lightbox. To use it you need to pass an url to `href()` method.

```php
use Njxqlus\Filament\Components\Infolists\LightboxImageEntry;

LightboxImageEntry::make('foo')
    ->href('https://biati-digital.github.io/glightbox/demo/img/large/gm2.jpg')
```

Also, you can pass an url to `image()` method that's accept a `Closure`.

```php
use Njxqlus\Filament\Components\Infolists\LightboxImageEntry;

LightboxImageEntry::make('foo')
    ->image('https://biati-digital.github.io/glightbox/demo/img/small/gm2.jpg')
    ->href('https://biati-digital.github.io/glightbox/demo/img/large/gm2.jpg')
```

By default, all lightbox images on page are on the same gallery. It's mean that you can use arrow to move between them. 
If you want to divide galleries use a `gallery()` method.

```php
use Njxqlus\Filament\Components\Infolists\LightboxImageEntry;

LightboxImageEntry::make('foo')          
    ->href('https://biati-digital.github.io/glightbox/demo/img/large/gm2.jpg')   
    ->gallery('qux-gallery')

LightboxImageEntry::make('bar')
    ->href('https://biati-digital.github.io/glightbox/demo/img/large/gm8.jpg')
    ->gallery('qux-gallery')

LightboxImageEntry::make('baz')
    ->href('https://biati-digital.github.io/glightbox/demo/img/large/gm9.jpg')
    ->gallery('fred-gallery'),
```

Because this entry extends [ImageEntry](https://filamentphp.com/docs/3.x/infolists/entries/image) all methods should be work (except of `url()`).

```php
use Njxqlus\Filament\Components\Infolists\LightboxImageEntry;

LightboxImageEntry::make('foo')
    ->href('https://biati-digital.github.io/glightbox/demo/img/large/gm2.jpg')   
    ->circular()
    ->label('Bar'),
```

### Lightbox Component

This component allows you to pass any other entries to schema that's open lightbox.

```php
use Njxqlus\Filament\Components\Infolists\Lightbox;

Lightbox::make()
    ->schema([
        TextEntry::make('foo')
    ])
    ->href('https://biati-digital.github.io/glightbox/demo/img/large/gm2.jpg')
```

### GLightBox

This package uses [GLightBox](https://github.com/biati-digital/glightbox) under the hood. Most of it`s options provided as
chain methods. There are some of them in the example below.

```php
use Njxqlus\Filament\Components\Infolists\LightboxImageEntry;

LightboxImageEntry::make('foo')
    ->href('https://biati-digital.github.io/glightbox/demo/img/large/gm2.jpg')   
    ->description(new HtmlString('<strong>Lightbox</strong>'))
    ->loop()
    ->widthOption('906px')
    ->heightOption('500px')
    ->closeButton(false)
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
