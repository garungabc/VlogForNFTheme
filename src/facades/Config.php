<?php

namespace Vicoders\Logs\Facades;

use Illuminate\Support\Facades\Facade;
use Vicoders\Logs\VicodersLog;

class Config extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Config';
    }
}
