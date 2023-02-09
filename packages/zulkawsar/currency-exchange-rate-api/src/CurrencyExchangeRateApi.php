<?php

namespace Zulkawsar\CurrencyExchangeRateApi;
use Illuminate\Support\Facades\Response;
use GuzzleHttp\Exception\GuzzleException;
use Mtownsend\XmlToArray\XmlToArray;
use Illuminate\Support\Facades\File;
use GuzzleHttp\Client;

/**
 * 
 */
class CurrencyExchangeRateApi
{
	protected $baseCurrency = "EUR";
	protected $baseAmount = 1;

	public function calculate(string $currency, float $amount = 0.00) : float
	{

		$apiResponse = $this->currencyApi();
		if ($apiResponse) {
			$convertArray = $this->xmlToArray($apiResponse);

			if ($convertArray) {
				$currencyRate = $this->convertCurrency($convertArray['Cube']['Cube']['Cube'], $currency);
				return round( $currencyRate * $amount, 2);
			}
		}
		return false;
	}

	/*	
		@param 
		@return xml response
	*/
	public function currencyApi() : string
	{
		$client = new Client([
			"base_uri" => "https://www.ecb.europa.eu"
		]);

		try{
			$response = $client->request('GET',"/stats/eurofxref/eurofxref-daily.xml");
			return $response->getBody()->getContents();

		} catch(GuzzleException $e) {
			return $e->getMessage();
		}

	}

	/*
	@param xml
	@return array 
	*/
	protected function xmlToArray($xml=null) 
	{
		if ($xml) {
			return XmlToArray::convert($xml, true);
		}
		return throw new Exception("Can not convert to xml", 1);
	}

	/*
	@param array
	@return float rate 
	*/

	protected function convertCurrency(array $content, string $findCurrency) : float
	{
		foreach ($content as $key => $value) {
			if ($value['@attributes']['currency'] == $findCurrency) {
				return (float) $value['@attributes']['rate'];
			}
		}
		return throw new Exception(response, 1);

	}
}