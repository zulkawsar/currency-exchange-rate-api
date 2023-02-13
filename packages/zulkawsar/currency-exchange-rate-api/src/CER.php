<?php

namespace Zulkawsar\CurrencyExchangeRateApi;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

/**
 * 
 */
class CER
{

	public function routes()
	{
		require __DIR__.'/../routes/cer.php';
	}

}