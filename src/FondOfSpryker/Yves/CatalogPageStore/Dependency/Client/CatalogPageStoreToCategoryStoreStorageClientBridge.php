<?php

namespace FondOfSpryker\Yves\CatalogPageStore\Dependency\Client;

use SprykerShop\Yves\CatalogPage\Dependency\Client\CatalogPageToCategoryStorageClientBridge as SprykerShopCatalogPageToCategoryStorageClientBridge;

class CatalogPageStoreToCategoryStoreStorageClientBridge extends SprykerShopCatalogPageToCategoryStorageClientBridge implements CatalogPageStoreToCategoryStoreStorageClientInterface
{
    /**
     * @param int $idCategoryStorageNode
     * @param string $localeName
     *
     * @return \Generated\Shared\Transfer\CategoryNodeStorageTransfer
     */
    public function getCategoryNodeById($idCategoryStorageNode, $localeName)
    {
        return $this->categoryClient->getCategoryNodeById($idCategoryStorageNode, $localeName);
    }
}
