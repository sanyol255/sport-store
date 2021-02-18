<?php
/**
 * Index action for about page
 *
 * @author      Oleksandr Kovalchuk <oleksandr.kovalchuk@smile-ukraine.com
 * @copyright   2021 Smile
 */
declare(strict_types=1);

namespace SportStore\AboutPage\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class for rendering about page
 */
class Index implements HttpGetActionInterface
{
    /** @var PageFactory */
    protected PageFactory $pageFactory;

    /**
     * Constructor for index action of about page
     *
     * @param PageFactory $pageFactory
     */
    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    /**
     * Method for rendering about page
     *
     * @return Page
     */
    public function execute() : Page
    {
        $page = $this->pageFactory->create();
        return $page;
    }
}
