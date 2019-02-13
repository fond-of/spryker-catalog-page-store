<?php

namespace FondOfSpryker\Yves\CatalogPageStore;

use Spryker\Yves\Kernel\Container;
use SprykerShop\Yves\CatalogPage\Dependency\Client\CatalogPageToCatalogClientBridge;
use SprykerShop\Yves\CatalogPage\Dependency\Client\CatalogPageToCategoryStorageClientBridge;
use SprykerShop\Yves\CatalogPage\Dependency\Client\CatalogPageToLocaleClientBridge;
use SprykerShop\Yves\CatalogPage\Dependency\Client\CatalogPageToProductCategoryFilterClientBridge;
use SprykerShop\Yves\CatalogPage\Dependency\Client\CatalogPageToProductCategoryFilterStorageClientBridge;
use SprykerShop\Yves\CatalogPage\Dependency\Client\CatalogPageToSearchClientBridge;
use SprykerShop\Yves\CatalogPage\CatalogPageDependencyProvider as SprykerShopCatalogPageDependencyProvider;

class CatalogPageDependencyProvider extends SprykerShopCatalogPageDependencyProvider
{
    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    protected function addCategoryStorageClient(Container $container)
    {
        $container[static::CLIENT_CATEGORY_STORAGE] = function (Container $container) {
            return new CatalogPageStoreToCategoryStoreStorageClientBridge($container->getLocator()->categoryStoreStorage()->client());
        };

        return $container;
    }
}
