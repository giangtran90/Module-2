<?php
include_once "Models/Product.php";
include_once "Services/ProductManager.php";

use Services\ProductManager;
use Models\Product;

$product_1 = new Product();
$product_1->setName('Laptop');
$product_1->setPrice(1000);

$product_2 = new Product();
$product_2->setName('Mobile');
$product_2->setPrice(500);

$productManager = new ProductManager();
$productManager->add($product_1);
$productManager->add($product_2);

echo "<pre>";
print_r($productManager);
die();

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo "<b>Product:</b> " . $product->getName() . "<b>. Price:</b> " . $product->getPrice() . "<br/>";
    //$product
}

?>