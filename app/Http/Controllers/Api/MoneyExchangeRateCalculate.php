<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Zulkawsar\CurrencyExchangeRateApi\CurrencyExchangeRateApi;

class MoneyExchangeRateCalculate extends Controller
{

    public function index(CurrencyExchange $request) : mixed
    {
        $validated  = $request->validated();
        if ($validated->fails() ) {
            return response()->json(['status' => 422, 'error' => 'Please check the param data']);
        }
        return response()->json([
            'status' => 200,
            'rate' => (new CurrencyExchangeRateApi)->calculate('DKK', 0)
        ]);
    }
}
