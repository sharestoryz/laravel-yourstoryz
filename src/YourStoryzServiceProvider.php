<?php

namespace YourStoryz\YourStoryz;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use YourStoryz\YourStoryz\Commands\YourStoryzCommand;

class YourStoryzServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-yourstoryz')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_yourstoryz_table')
            ->hasCommand(YourStoryzCommand::class);
    }
}
