<?php
/**
 * Services menu in top navigation bar
 *
 * @author      Oleksandr Kovalchuk <oleksandr.kovalchuk@smile-ukraine.com
 * @copyright   2021 Smile
 */
declare(strict_types=1);

namespace SportStore\ServicesMenu\Plugin;

use Magento\Framework\Data\Tree\NodeFactory;
use Magento\Framework\UrlInterface;
use Magento\Theme\Block\Html\Topmenu;

/**
 * Class ServicesMenu for displaying custom menu in top navigation bar
 */
class ServicesMenu
{
    /** @var NodeFactory */
    protected NodeFactory $nodeFactory;

    /** @var UrlInterface */
    protected UrlInterface $urlBuilder;

    /**
     * ServicesMenu constructor.
     *
     * @param NodeFactory $nodeFactory
     * @param UrlInterface $urlBuilder
     */
    public function __construct(NodeFactory $nodeFactory, UrlInterface $urlBuilder)
    {
        $this->nodeFactory = $nodeFactory;
        $this->urlBuilder = $urlBuilder;
    }

    /**
     * @param Topmenu $subject
     */
    public function beforeGetHtml(Topmenu $subject)
    {
        $menuNode = $this->nodeFactory->create(
            [
              'data' =>$this->getNodeAsArray('Services', 'services-menu'),
              'idField' => 'menuId',
              'tree' => $subject->getMenu()->getTree()
            ]
        );

        $menuNode->addChild(
            $this->nodeFactory->create(
                [
                    'data' => $this->getNodeAsArray('Currency Converter', 'currency-converter/converter'),
                    'isField' => 'menuId',
                    'tree' => $subject->getMenu()->getTree()
                ]
            )
        );

        $subject->getMenu()->addChild($menuNode);
    }

    protected function getNodeAsArray($name, $menuId) : array
    {
        $url = $this->urlBuilder->getUrl($menuId);
        return [
            'name' => __($name),
            'menuId' => $menuId,
            'url' => $url,
            'has_active' => false,
            'is_active' => false
        ];
    }
}
