# Integrate YourStoryz API into a Laravel app

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sharestoryz/laravel-yourstoryz.svg?style=flat-square)](https://packagist.org/packages/sharestoryz/laravel-yourstoryz)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/sharestoryz/laravel-yourstoryz/run-tests.yml?branch=0.x&label=tests&style=flat-square)](https://github.com/sharestoryz/laravel-yourstoryz/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/sharestoryz/laravel-yourstoryz/fix-php-code-style-issues.yml?branch=0.x&label=code%20style&style=flat-square)](https://github.com/sharestoryz/laravel-yourstoryz/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sharestoryz/laravel-yourstoryz.svg?style=flat-square)](https://packagist.org/packages/sharestoryz/laravel-yourstoryz)

A Laravel package that provides a convenient wrapper around the [YourStoryz PHP SDK](https://github.com/sharestoryz/yourstoryz-php-sdk). It handles authentication and service registration out of the box, so you can start interacting with the YourStoryz API right away.

```php
use YourStoryz\LaravelYourStoryz\Facades\YourStoryz;

$companies = YourStoryz::companies()->all();
$me = YourStoryz::users()->me();
```

## Installation

You can install the package via composer:

```bash
composer require sharestoryz/laravel-yourstoryz
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-yourstoryz-config"
```

This is the contents of the published config file:

```php
return [

    'api_token' => env('YOURSTORYZ_API_TOKEN', ''),

    'base_url' => env('YOURSTORYZ_API_URL', 'https://dashboard.yourstoryz.com'),

];
```

## Usage

```php
use YourStoryz\LaravelYourStoryz\Facades\YourStoryz;

// Companies
$companies = YourStoryz::companies()->all();
$company = YourStoryz::companies()->get($companyId);
$stories = YourStoryz::companies()->stories($companyId);
$videos = YourStoryz::companies()->publishedVideos($companyId);

// Departments
$departments = YourStoryz::departments()->all();
$department = YourStoryz::departments()->get($departmentId);

// Stories
$stories = YourStoryz::stories()->all();
$story = YourStoryz::stories()->get($storyId);

// Users
$me = YourStoryz::users()->me();
$userStories = YourStoryz::users()->stories($userId);

// Published Videos
$video = YourStoryz::publishedVideos()->get($videoId);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jan Henk Hazelaar](https://github.com/sharestoryz)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
