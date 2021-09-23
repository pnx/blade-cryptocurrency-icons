# Blade Cryptocurrency Icons

<a href="https://github.com/pnx/blade-cryptocurrency-icons/actions?query=workflow%3ATests">
    <img src="https://github.com/pnx/blade-cryptocurrency-icons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/pnx/blade-cryptocurrency-icons">
    <img src="https://img.shields.io/packagist/v/pnx/blade-cryptocurrency-icons" alt="Latest Stable Version">
</a>

A package to easily make use of [cryptocurrency-icons](https://github.com/spothq/cryptocurrency-icons) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [cryptoicons.co](http://cryptoicons.co).

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

```bash
composer require pnx/blade-cryptocurrency-icons
```

## Blade Icons

Blade Cryptocurrency Icons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade Cryptocurrency Icons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-cryptocurrency-icons.php` config file:

```bash
php artisan vendor:publish --tag=blade-cryptocurrency-icons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-cryptoicons-btc/>
```

You can also pass classes to your icon components:

```blade
<x-cryptoicons-btc class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-cryptoicons-btc style="color: #555"/>
```

The solid icons can be referenced like this:

```blade
<x-cryptoicons-s-btc/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-cryptocurrency-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-cryptocurrency-icons/btc.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade Cryptocurrency Icons is developed and maintained by Henrik Hautakoski.

## License

Blade Cryptocurrency Icons is open-sourced software licensed under [the MIT license](LICENSE.md).
