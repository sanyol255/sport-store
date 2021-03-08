<?php
/**
 * Block class for currency converter
 *
 * @author    Oleksandr Kovalchuk <oleksandr.kovalchuk@smile-ukraine.com>
 * @copyright 2021 Smile
 */
declare(strict_types=1);

namespace SportStore\CurrencyConverter\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Class Converter
 */
class Converter extends Template
{
    public function __construct(Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }
}
