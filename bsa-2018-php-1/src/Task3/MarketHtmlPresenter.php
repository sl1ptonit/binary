<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        $currencies = $market->getCurrencies();

        $imgs = '';
        foreach ($currencies as $data ) {
            $imgs .= $data->getName() . ': ' . $data->getDailyPrice() .  '<img src="' . $data->getLogoUrl() .  '"> ';
        }

        return $imgs;
    }
}