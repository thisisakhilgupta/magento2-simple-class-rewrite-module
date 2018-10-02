<?php
namespace Akhil\Rewrite\Block\Checkout;
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
class Cart extends \Magento\Checkout\Block\Cart
{
    public function getCheckoutUrl()
    {
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Akhil\Customlog\Logger\Customlogger');
        $logger->info('Checkout Block rewrite test...........................');

        return $this->getUrl('checkout', ['_secure' => true]);
    }

                }
