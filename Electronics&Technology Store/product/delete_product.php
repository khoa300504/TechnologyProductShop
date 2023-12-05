<?php
require_once('../model/product_db.php');
$cart_item_id = filter_input(INPUT_POST, 'cart_item_id');
$result = deleteProductInCart($cart_item_id);
if ($result == 1)
    header('Location: ../views/Cart-page.php');
else
    echo 'sai cmm luon cho m chua';
