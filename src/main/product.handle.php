<?php

function listProduct() {
    $sqlQuery = "SELECT * FROM products";
    $products = executeQuery($sqlQuery);
    // dd($products);
    return $products;
}

function findProduct($id)
{
    $sqlQuery = "SELECT * FROM products WHERE id=$id";
    $product = executeQuery($sqlQuery);
    // if (!$product) {
    //     header('location: '. BASE_URL . 'shop');
    // }
    return $product;
}