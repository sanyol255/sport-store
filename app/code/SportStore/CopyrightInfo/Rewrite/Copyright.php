<?php
/**
 * Rewriting footer copyright info
 *
 * @author    Oleksandr Kovalchuk <oleksandr.kovalchuk@smile-ukraine.com>
 * @copyright 2021 Smile
 */
declare(strict_types=1);

namespace SportStore\CopyrightInfo\Rewrite;

use Magento\Framework\Phrase;
use Magento\Theme\Block\Html\Footer;

/**
 * Class Copyright for displaying copyright info in the footer
 */
class Copyright extends Footer
{
    /**
     * Preparing copyright text for footer
     *
     * @return Phrase
     */
    public function getCopyright() : Phrase
    {
        return __('%1, %2 - %3', $this->getCompanyName(), $this->getFoundationDate(), date('M, d, Y'));
    }
}
