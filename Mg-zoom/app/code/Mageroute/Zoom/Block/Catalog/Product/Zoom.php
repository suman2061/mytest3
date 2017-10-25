<?php
/**
 * @author Mageroute Team
 * @package Mageroute_Zoom
 */
namespace Mageroute\Zoom\Block\Catalog\Product;

class Zoom extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Mageroute\Zoom\Helper\Data
     */
    protected $_helper;

    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Mageroute\Zoom\Helper\Data $helper,
        \Magento\Framework\ObjectManagerInterface $objectManager
    ) {
        parent::__construct($context, $data);

        $this->_helper
            = $helper;
        $this->_objectManager = $objectManager;
    }

    public function getBlockLabel(){
        return $this->_helper->getBlockLabel();
    }

    public function getTextAlign(){
        return $this->_helper->getTextAlign();
    }

    protected function _toHtml()
    {
       if ($this->_helper->getEnable()){
            return parent::_toHtml();
       }
        else {
            return '';
        }
    }

    public function getCollection()
    {
        $model = $this->_objectManager->create('Mageroute\Zoom\Model\Zoom');
        $collection = $model->getCollection();

        return $collection;
    }

}
