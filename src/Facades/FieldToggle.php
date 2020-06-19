<?php

namespace Adaptcms\FieldToggle\Facades;

use Illuminate\Support\Facades\Facade;

class FieldToggle extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'FieldToggle';
    }
}
