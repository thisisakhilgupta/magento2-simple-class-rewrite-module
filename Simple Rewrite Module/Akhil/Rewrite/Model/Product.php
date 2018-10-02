<?php
namespace Akhil\Rewrite\Model;
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
class Product extends \Magento\Catalog\Model\Product
{

    public function getName()
    {

//Here also we just writing something in log file :)

        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Akhil\Customlog\Logger\Customlogger');
        $logger->info('Model Rewrite Test');

        return $this->_getData(self::NAME);
    }


}
?>
