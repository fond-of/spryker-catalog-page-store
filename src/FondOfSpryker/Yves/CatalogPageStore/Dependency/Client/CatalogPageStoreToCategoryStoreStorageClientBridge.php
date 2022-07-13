<?php

namespace FondOfSpryker\Yves\CatalogPageStore\Dependency\Client;

use Generated\Shared\Transfer\CategoryNodeStorageTransfer;
use SprykerShop\Yves\CatalogPage\Dependency\Client\CatalogPageToCategoryStorageClientBridge as SprykerShopCatalogPageToCategoryStorageClientBridge;

class CatalogPageStoreToCategoryStoreStorageClientBridge extends SprykerShopCatalogPageToCategoryStorageClientBridge implements CatalogPageStoreToCategoryStoreStorageClientInterface
{
    /**
     * @param int $idCategoryNode
     * @param string $localeName
     * @param string $storeName
     *
     * @return \Generated\Shared\Transfer\CategoryNodeStorageTransfer
     */
    public function getCategoryNodeById(int $idCategoryNode, string $localeName, string $storeName): CategoryNodeStorageTransfer
    {
        return $this->categoryStorageClient->getCategoryNodeById($idCategoryNode, $localeName, $storeName);
    }
}
