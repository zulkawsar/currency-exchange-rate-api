[![Build Status](https://github.com/zulkawsar/currency-exchange-rate-api)

# Description
Currency Exchange

| currency-exchange-rate-api version      | Laravel version   |
| ---                                     | ---               |
| dev                                     | ^9.0              |


## Download
```
composer require zulkawsar/currency-exchange-rate-api
```
## Use
| Currency String (https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml)
| Amount float 
| Base currency EUR

Create a object and pass the $currency and $amount
(new CurrencyExchangeRateApi)->calculate($currency, $amount)
