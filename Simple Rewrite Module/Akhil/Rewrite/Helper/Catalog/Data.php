<?php
namespace Akhil\Rewrite\Helper\Catalog;
/**
 * Akhil Gupta
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL)
 * This is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/OSL-3.0  Open Software License (OSL)
 *
 * DISCLAIMER**
 *
 * @category   MAGENTO2 Simple REWRITE MODULE
 * @package    MAGENTO2 Simple REWRITE MODULE
 * @url       https://www.youtube.com/user/thisisakhilgupta/
 * @author    Akhil Gupta
 */
class Data extends \Magento\Catalog\Helper\Data
{
    public function getProduct()
    {
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Akhil\Customlog\Logger\Customlogger');
        $logger->info('Helper Rewrite Test');

        return $this->_coreRegistry->registry('current_product');
    }
}
?>
