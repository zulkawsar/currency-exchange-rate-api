<?php

namespace Zulkawsar\CurrencyExchangeRateApi;

use Illuminate\Support\ServiceProvider;
use Zulkawsar\CurrencyExchangeRateApi\CER;

class CurrencyExchangeServiceProvider extends ServiceProvider
{

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton(CurrencyExchangeRateApi::class, function(){
			return new CurrencyExchangeRateApi();
		});
		$this->app->singleton('cer', function(){
			return new CER();
		});
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
	    //
	}


}