<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

/**
* Ethereum
*/
class Ethereum implements Currency
{
	private $price;
	private $logo = 'https://s2.coinmarketcap.com/static/img/coins/32x32/1027.png';

	public function __construct($price)
	{
		$this->price = $price;
	}

	public function getName() : string
	{
		return "Ethereum";
	}

	public function getDailyPrice() : float
	{
		return $this->price;
	}

	public function getLogoUrl() : string
	{
		return $this->logo;
	}
	
}

