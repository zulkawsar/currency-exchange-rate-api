<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Zulkawsar\CurrencyExchangeRateApi\CurrencyExchangeRateApi;

class MoneyExchangeRateCalculate extends Controller
{
    protected $api;

    public function index()
    {
        
        $amount = (new CurrencyExchangeRateApi)->calculate('DKK', 0);
        return response()->json([
            'status' => 200,
            'rate' => $amount
        ]);
    }
}
