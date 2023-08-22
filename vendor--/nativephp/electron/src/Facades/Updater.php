<?php

namespace Native\Electron\Facades;

use Illuminate\Support\Facades\Facade;

class Updater extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'nativephp.updater';
    }
}
