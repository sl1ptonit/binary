<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{

    private $currencyList = [];


    public function addCurrency(Currency $currency): void
    {
        $this->currencyList[] = $currency;
    }

    public function maxPrice(): float
    {
        $maxPrice = $this->currencyList[0]->getDailyPrice();
        foreach($this->currencyList as $currency) {
            if($currency->getDailyPrice() > $maxPrice) {
                $maxPrice = $currency->getDailyPrice();
            }
        }

        return $maxPrice;
    }

    public function getCurrencies(): array
    {
        return $this->currencyList;
    }
}