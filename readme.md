# Wp Asset

A WordPress asset management library that provides utilities for handling CSS, JavaScript, and other assets in WordPress projects.

## Features

- Asset versioning
- Dependency management
- Minification support
- Cache busting
- Easy integration with WordPress hooks

## Installation

To install this package, you can use Composer:

```bash
composer require your-vendor/wp-asset
```

Or add it directly to your `composer.json`:

```json
{
    "require": {
        "your-vendor/wp-asset": "^1.0"
    }
}
```

## Usage

Include the asset management in your WordPress project:

```php
use YourVendor\WpAsset\AppAsset;

// Initialize and register your assets
$asset = new AppAsset();
$asset->register();
```

## Development

To run tests:

```bash
composer test
```

## License

This project is licensed under the MIT License - see the [LICENSE](license.txt) file for details.
