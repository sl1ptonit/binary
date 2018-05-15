<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

/**
* Dogecoin
*/
class Dogecoin implements Currency
{
	private $price;
	private $logo = 'https://s2.coinmarketcap.com/static/img/coins/32x32/74.png';

	public function __construct($price)
	{
		$this->price = $price;
	}

	public function getName() : string
	{
		return "Dogecoin";
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

