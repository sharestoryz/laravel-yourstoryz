<?php

namespace YourStoryz\LaravelYourStoryz;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class YourStoryzServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-yourstoryz')
            ->hasConfigFile();
    }
}
