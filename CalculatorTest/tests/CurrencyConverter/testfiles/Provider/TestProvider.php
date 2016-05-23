<?php

class TestProvider extends \CalculatorTest\CurrencyConverter\Provider\Abstracts\AbstractProvider
{
    public function doGetExchangeRate()
    {
        return 1.21;
    }

    public function getSupportedCurrencies()
    {
        return array('GBP', 'EUR');
    }

    public function getName()
    {
        return 'TestProvider';
    }
}