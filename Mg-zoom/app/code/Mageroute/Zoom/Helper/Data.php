<?php
/**
 * @author Mageroute Team
 * @copyright Copyright (c) 2015 Mageroute (http://www.Mageroute.com)
 * @package Mageroute_Zoom
 */
namespace Mageroute\Zoom\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterfac
     */
    protected $_scopeConfig;

    CONST ENABLE      = 'Mageroute_zoom/general/enable';

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);

        $this->_scopeConfig = $scopeConfig;
    }
	
	public function getZoomConfig() {
		$outputHelper = $this->_scopeConfig;
		$config       = $outputHelper->getValue('Mageroute_zoom/general');
		
		return $config;
	}
    public function getEnable(){
        return $this->_scopeConfig->getValue(self::ENABLE);
    }

}

