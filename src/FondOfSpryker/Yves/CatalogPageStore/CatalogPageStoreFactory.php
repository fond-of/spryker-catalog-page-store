<?php

namespace FondOfSpryker\Yves\CatalogPageStore;

use SprykerShop\Yves\CatalogPage\CatalogPageFactory as SprykerShopCatalogPageFactory;

class CatalogPageStoreFactory extends SprykerShopCatalogPageFactory
{
    /**
     * @return \SprykerShop\Yves\CatalogPage\Dependency\Client\CatalogPageToCategoryStorageClientInterface
     */
    public function getCategoryStorageClient(): CatalogPageToCategoryStorageClientInterface
    {
        return $this->getProvidedDependency(CatalogPageDependencyProvider::CLIENT_CATEGORY_STORAGE);
    }

}
