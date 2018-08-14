<?php

namespace Corals\Modules\Payment\Facades;

use Illuminate\Support\Facades\Facade;

class Webhooks extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Webhooks';
    }
}