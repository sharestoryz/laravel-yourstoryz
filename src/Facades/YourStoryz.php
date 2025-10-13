<?php

namespace YourStoryz\YourStoryz\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \YourStoryz\YourStoryz\YourStoryz
 */
class YourStoryz extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \YourStoryz\YourStoryz\YourStoryz::class;
    }
}
