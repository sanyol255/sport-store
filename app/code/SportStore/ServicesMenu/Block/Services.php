<?php
/**
 * Block for services menu page with link to available services
 *
 * @author    Oleksandr Kovalchuk <oleksandr.kovalchuk@smile-ukraine.com>
 * @copyright 2021 Smile
 */
declare(strict_types=1);

namespace SportStore\ServicesMenu\Block;

use Magento\Framework\View\Element\Template;

/**
 * Class Services for displaying links with additional services apps for sport store
 */
class Services extends Template
{
    /**
     * Links for services
     */
    const CURRENCY_CONVERTER = 'currency-converter/converter';

    /**
     * Method for returning link to currency converter page
     *
     * @return string
     */
    public function getCurrencyConverterUrl() : string
    {
        return $this->getUrl(self::CURRENCY_CONVERTER);
    }
}
