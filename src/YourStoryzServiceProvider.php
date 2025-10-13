<?php

namespace YourStoryz\YourStoryz;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use YourStoryz\YourStoryz\Commands\YourStoryzCommand;

class YourStoryzServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-yourstoryz')
            ->hasConfigFile();
    }
}
