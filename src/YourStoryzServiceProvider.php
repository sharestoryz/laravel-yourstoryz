<?php

namespace YourStoryz\LaravelYourStoryz;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Yourstoryz\PhpSdk\YourStoryz;

class YourStoryzServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-yourstoryz')
            ->hasConfigFile();
    }

    public function packageBooted(): void
    {
        $this->app->singleton(OhDear::class, function () {
            $token = config('yourstoryz.api_token');

            return new YourStoryz($token);
        });

        $this->app->alias(YourStoryz::class, 'yourstoryz');
    }
}
