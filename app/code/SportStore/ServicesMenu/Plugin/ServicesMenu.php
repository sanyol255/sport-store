<?php
/**
 * Services menu in top navigation bar
 *
 * @author      Oleksandr Kovalchuk <oleksandr.kovalchuk@smile-ukraine.com
 * @copyright   2021 Smile
 */
declare(strict_types=1);

namespace SportStore\CurrencyConverter\Plugin;

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
              'idField' => 'id',
              'tree' => $subject->getMenu()->getTree()
          ]
        );

        $menuNode->addChild(
            $this->nodeFactory->create(
                [
                    'data' => $this->getNodeAsArray('Currency Converter', 'currency-converter/converter'),
                    'isField' => 'id',
                    'tree' => $subject->getMenu()->getTree()
                ]
            )
        );

        $subject->getMenu()->addChild($menuNode);
    }

    protected function getNodeAsArray($name, $id) : array
    {
        $url = $this->urlBuilder->getUrl($id);
        return [
            'name' => __($name),
            'id' => $id,
            'url' => $url,
            'has_active' => false,
            'is_active' => false
        ];
    }
}
