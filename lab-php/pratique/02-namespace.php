<?php
declare(strict_types=1);

namespace LabPoo\Catalog {
    final class Product
    {
        public function __construct(public string $name)
        {
        }
    }
}

namespace LabPoo\Inventory {
    final class Product
    {
        public function __construct(public string $sku)
        {
        }
    }
}

namespace {
    use LabPoo\Catalog\Product as CatalogProduct;
    use LabPoo\Inventory\Product as InventoryProduct;

    $catalogProduct = new CatalogProduct('Clavier');
    $inventoryProduct = new InventoryProduct('KB-001');

    echo 'Produit du catalogue : ' . $catalogProduct->name . "\n";
    echo 'Référence du stock : ' . $inventoryProduct->sku . "\n";
}