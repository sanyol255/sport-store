<?php
/**
 * Model with currency data for converter
 *
 * @author      Oleksandr Kovalchuk <oleksandr.kovalchuk@smile-ukraine.com>
 * @copyright   2021 Smile
 */
declare(strict_types=1);

namespace SportStore\CurrencyConverter\Model;

/**
 * Class CurrencyData with exchange rate for dollar(USD), euro(EUR) and pound(GBP) to 1 bitcoin(BTC)
 */
class CurrencyData
{
    /** @var float */
    private float $dollar = 49680.93;

    /** @var float */
    private float $euro = 41879.03;

    /** @var float */
    private float $pound = 35997.22;

    /**
     * Exchange rate for dollar
     *
     * @return float
     */
    public function dollarExchangeRate() : float
    {
        return $this->dollar;
    }

    /**
     * Exchange rate for euro
     *
     * @return float
     */
    public function euroExchangeRate() : float
    {
        return $this->euro;
    }

    /**
     * Exchange rate for pound
     *
     * @return float
     */
    public function poundExchangeRate() : float
    {
        return $this->pound;
    }
}
