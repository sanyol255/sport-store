<?php
/**
 * Block class for copyright page
 *
 * @author    Oleksandr Kovalchuk <oleksandr.kovalchuk@smile-ukraine.com>
 * @copyright 2021 Smile
 */
declare(strict_types=1);

namespace SportStore\CopyrightInfo\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\Phrase;

/**
 * Class CopyrightBlock for displaying copyright info in the footer
 */
class CopyrightBlock extends Template
{
    /**
     * CopyrightBlock constructor
     *
     * @param Context $context
     * @param array                                            $data
     */
    public function __construct(Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    /**
     * Preparing copyright text for footer
     *
     * @return \Magento\Framework\Phrase
     */
    public function getCopyright() : Phrase
    {
        return __('%1, %2 - %3', $this->getCompanyName(), $this->getFoundationDate(), date('M, d, Y'));
    }
}
