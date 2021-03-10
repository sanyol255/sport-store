<?php
/**
 * Index action for about page
 *
 * @author      Oleksandr Kovalchuk <oleksandr.kovalchuk@smile-ukraine.com
 * @copyright   2021 Smile
 */
declare(strict_types=1);

namespace SportStore\CurrencyConverter\Controller\Converter;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Result\Page;

/**
 * Class for rendering converter page
 */
class Index implements HttpGetActionInterface
{
    /** @var PageFactory */
    protected PageFactory $pageFactory;

    /**
     * Index constructor
     *
     * @param PageFactory $pageFactory
     */
    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    /**
     * Rendering currency converter page
     *
     * @return Page
     */
    public function execute() : Page
    {
        return $this->pageFactory->create();
    }
}
