<?php
/**
 * Index action for displaying services link
 *
 * @author      Oleksandr Kovalchuk <oleksandr.kovalchuk@smile-ukraine.com
 * @copyright   2021 Smile
 */
declare(strict_types=1);

namespace SportStore\ServicesMenu\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Result\Page;

/**
 * Class Index for rendering main services menu page
 */
class Index implements HttpGetActionInterface
{
    /** @var PageFactory */
    protected PageFactory $pageFactory;

    /**
     * Index constructor for ServicesMenu
     *
     * @param Context      $context
     * @param PageFactory  $pageFactory
     */
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    /**
     * Rendering services menu page
     *
     * @return Page
     */
    public function execute() : Page
    {
        return $this->pageFactory->create();
    }
}
