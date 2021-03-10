<?php
/**
 * Block class for exchange rate
 *
 * @author    Oleksandr Kovalchuk <oleksandr.kovalchuk@smile-ukraine.com>
 * @copyright 2021 Smile
 */
declare(strict_types=1);

namespace SportStore\CurrencyConverter\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use SportStore\CurrencyConverter\Model\CurrencyData;

/**
 * Class ExchangeRate for getting data with currency information from model
 */
class ExchangeRate extends Template
{
    /** @var CurrencyData */
    private CurrencyData $currencyData;

    /**
     * ExchangeRate constructor
     *
     * @param Context $context
     * @param CurrencyData $currencyData
     * @param array $data
     */
    public function __construct(Context $context, CurrencyData $currencyData, array $data = [])
    {
        parent::__construct($context, $data);
        $this->currencyData = $currencyData;
    }

    /**
     * @return CurrencyData
     */
    public function getCurrency() : CurrencyData
    {
        return $this->currencyData;
    }
}
