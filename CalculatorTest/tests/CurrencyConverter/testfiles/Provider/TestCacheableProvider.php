<?php

class TestCacheableProvider extends \CalculatorTest\CurrencyConverter\Provider\Abstracts\AbstractCacheableProvider
{
    public function __construct($exchangeRateGetter)
    {
        $this->exchangeRateGetter = $exchangeRateGetter;
    }

    public function doGetExchangeRate()
    {
        return $this->exchangeRateGetter->get();
    }

    public function getSupportedCurrencies()
    {
        return array('GBP', 'EUR');
    }

    public function getName()
    {
        return 'TestCacheableProvider';
    }
}