<?php
namespace Akhil\Rewrite\Block\Product\View;
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
class Gallery extends \Magento\Catalog\Block\Product\View\Gallery
{
    public function isMainImage($image)
    {

//We are just writing something in our custom log file. Just to check Rewrite core files is working :)

        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Akhil\Customlog\Logger\Customlogger');
        $logger->info('Gallery Block rewrite test ');

        $product = $this->getProduct();
        return $product->getImage() == $image->getFile();
    }


                }
