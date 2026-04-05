<?php

use YourStoryz\LaravelYourStoryz\Facades\YourStoryz;
use YourStoryz\LaravelYourStoryz\YourStoryzServiceProvider;
use YourStoryz\PhpSdk\YourStoryz as YourStoryzSdk;

it('registers the service provider', function () {
    expect(app()->getProviders(YourStoryzServiceProvider::class))
        ->not->toBeEmpty();
});

it('resolves the YourStoryz SDK as a singleton', function () {
    $instance1 = app(YourStoryzSdk::class);
    $instance2 = app(YourStoryzSdk::class);

    expect($instance1)->toBeInstanceOf(YourStoryzSdk::class)
        ->and($instance1)->toBe($instance2);
});

it('resolves the YourStoryz SDK via the facade', function () {
    expect(YourStoryz::getFacadeRoot())->toBeInstanceOf(YourStoryzSdk::class);
});

it('uses config values for api token and base url', function () {
    config([
        'yourstoryz.api_token' => 'test-token',
        'yourstoryz.base_url' => 'https://example.com',
    ]);

    app()->forgetInstance(YourStoryzSdk::class);

    $instance = app(YourStoryzSdk::class);

    expect($instance)->toBeInstanceOf(YourStoryzSdk::class);
});

it('publishes the config file', function () {
    $configPath = config_path('yourstoryz.php');

    expect(config('yourstoryz.api_token'))->toBeString()
        ->and(config('yourstoryz.base_url'))->toBeString();
});
