<?php

namespace Zulkawsar\CurrencyExchangeRateApi;

use Illuminate\Support\ServiceProvider;

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