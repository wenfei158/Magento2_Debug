<?php

namespace Magento2\Debug\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * Sets the content of the response
     */
    public function execute()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $defaultItem = $objectManager->create('Magento\Checkout\CustomerData\DefaultItem');
        $zoroItem = $objectManager->create('IsobarCommerce\ZoroCheckout\CustomerData\ZoroItem');
        $configurableItem = $objectManager->create('Magento\ConfigurableProduct\CustomerData\ConfigurableItem');        
        var_dump(get_class($defaultItem));
        var_dump(get_class($zoroItem));
        var_dump(is_subclass_of($configurableItem, "ZoroItem"));
        var_dump(get_parent_class($configurableItem));        
    }
}