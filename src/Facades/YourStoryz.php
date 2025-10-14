<?php

namespace YourStoryz\LaravelYourStoryz\Facades;

use Illuminate\Support\Facades\Facade;

class YourStoryz extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Yourstoryz\PhpSdk\YourStoryz::class;
    }
}
