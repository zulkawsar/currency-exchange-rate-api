<?php

namespace Zulkawsar\CurrencyExchangeRateApi\Facades;

use Illuminate\Support\Facades\Facade;

class CER extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cer';
    }
}