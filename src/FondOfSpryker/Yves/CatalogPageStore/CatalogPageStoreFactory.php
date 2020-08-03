<?php

namespace FondOfSpryker\Yves\CatalogPageStore;

use SprykerShop\Yves\CatalogPage\CatalogPageDependencyProvider as SprykerCatalogPageDependencyProvider;
use SprykerShop\Yves\CatalogPage\CatalogPageFactory as SprykerShopCatalogPageFactory;
use SprykerShop\Yves\CatalogPage\Dependency\Client\CatalogPageToCategoryStorageClientInterface;

class CatalogPageStoreFactory extends SprykerShopCatalogPageFactory
{
    /**
     * @return \SprykerShop\Yves\CatalogPage\Dependency\Client\CatalogPageToCategoryStorageClientInterface
     */
    public function getCategoryStorageClient(): CatalogPageToCategoryStorageClientInterface
    {
        return $this->getProvidedDependency(SprykerCatalogPageDependencyProvider::CLIENT_CATEGORY_STORAGE);
    }
}
