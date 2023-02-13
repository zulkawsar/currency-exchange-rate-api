<?php

namespace Zulkawsar\CurrencyExchangeRateApi\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Zulkawsar\CurrencyExchangeRateApi\CurrencyExchangeRateApi;

class MoneyExchangeRate extends Controller
{

    public function index(Request $request) : mixed
    {
        if ($request->has('currency') && $request->has('amount') ) {
            return response()->json([
                'status' => 200,
                'rate' => (new CurrencyExchangeRateApi)->calculate($request->currency, $request->amount)
            ]);
        }
        return response()->json(['status' => 422, 'error' => 'Please check the param data']);
    }
}