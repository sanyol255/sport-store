<?php
/**
 * Block for link to About Sport Store page
 *
 * @author      Oleksandr Kovalchuk <oleksandr.kovalchuk@smile-ukraine.com
 * @copyright   2021 Smile
 */
declare(strict_types=1);

namespace SportStore\AboutPage\Block;

use Magento\Framework\Phrase;
use Magento\Framework\View\Element\Html\Link;

/**
 * Class for creating About Sport Store link in footer
 */
class AboutLink extends Link
{
    /* @var string */
    protected string $template = 'SportStore_AboutPage::about_link';

    /**
     * Url for About Sport Store page
     *
     * @return Phrase
     */
    public function getHref() : Phrase
    {
        return __('/about-page');
    }

    /**
     * Label for About Sport Store page
     *
     * @return Phrase
     */
    public function getLabel() : Phrase
    {
        return __('About Sport Store');
    }
}
