<?php
//SprykerUpgradeToDo is this still needed?

namespace FondOfSpryker\Yves\CatalogPageStore;

use FondOfSpryker\Yves\CatalogPageStore\Dependency\Client\CatalogPageStoreToCategoryStoreStorageClientBridge;
use Spryker\Yves\Kernel\Container;
use SprykerShop\Yves\CatalogPage\CatalogPageDependencyProvider as SprykerShopCatalogPageDependencyProvider;

class CatalogPageStoreDependencyProvider extends SprykerShopCatalogPageDependencyProvider
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
