<?php
    require_once('../model/product_db.php');
    $product_id = filter_input(INPUT_POST,'product_id');
    $cart_item_id = addProductToCart($product_id);
    // if(isset($cart_item_id) && is_numeric($cart_item_id))
    // {
        header("location: ../views/Laptop-page.php");
    // }
?>