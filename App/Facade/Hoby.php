<?php
namespace Hoby\Facade;

use Illuminate\Support\Facades\Facade;

class Hoby extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Hoby';
    }
}