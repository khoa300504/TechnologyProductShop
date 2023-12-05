<?php
include '../model/database.php';

function addProduct($p_name, $p_price, $p_type, $p_des)
{
    $price = (float)$p_price;
    $type = (int)$p_type;
    global $db;
    $query = 'SELECT product_id FROM product WHERE name = :p_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':p_name', $p_name);
    $statement->execute();
    if ($statement->rowCount() > 0) {
        return false;
    } else {
        $query2 = 'INSERT INTO product (name, price, category_id, description) VALUES (:p_name, :p_price, :p_type, :p_des)';
        $statement = $db->prepare($query2);
        $statement->bindValue(':p_name', $p_name);
        $statement->bindValue(':p_price', $price);
        $statement->bindValue(':p_type', $type);
        $statement->bindValue(':p_des', $p_des);
        $statement->execute();
        $product_id = $db->lastInsertId();
        return $product_id;
        $statement->closeCursor();
    }
}

function uploadImgs($imgs, $product_id)
{
    global $db;
    if ($imgs['imgs']['error'][0] == "") {
        return 'Kích thước ảnh quá lớn (<100Mb)';
    }
    $folder = '../uploads/';
    $names = $imgs['imgs']['name'];
    $tmp_names = $imgs['imgs']['tmp_name'];
    $file_array = array_combine($tmp_names, $names);

    foreach ($file_array as $tmp_folder => $img_name) {
        move_uploaded_file($tmp_folder, $folder . $img_name);
        $query = 'INSERT INTO product_img (src, alt, product_id) VALUES (:src, :alt, :product_id)';
        $statement = $db->prepare($query);
        $statement->bindValue(':src', $folder);
        $statement->bindValue(':alt', $img_name);
        $statement->bindValue(':product_id', $product_id);
        $statement->execute();
    }
    $statement->closeCursor();
    return 'success';
}

function getProductHaveLimit($category_id, $start, $limit)
{
    global $db;
    $query = 'SELECT * FROM product WHERE category_id = :category_id LIMIT ' . $start . ',' . $limit;
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    // $statement->bindValue(':start', $start);
    // $statement->bindValue(':limit', $limit);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}

function getProductByProductId($product_id)
{
    global $db;
    $query = 'SELECT * FROM product WHERE product_id = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function getProductByCategory($category_id)
{
    global $db;
    $query = 'SELECT * FROM product WHERE category_id = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}

function getProductImgByProductId($product_id)
{
    global $db;
    $query = 'SELECT * FROM product_img WHERE product_id = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $productImgs = $statement->fetch();
    $statement->closeCursor();
    return $productImgs;
}

function getProductImgsByProductId($product_id)
{
    global $db;
    $query = 'SELECT * FROM product_img WHERE product_id = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $productImgs = $statement->fetchAll();
    $statement->closeCursor();
    return $productImgs;
}

function addProductToCart($product_id)
{
    session_start();
    global $db;
    $query = 'SELECT cart_id FROM cart WHERE user_id = :user_id AND status = 1';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $_SESSION['user']['user_id']);
    $statement->execute();
    $cartId = $statement->fetch();
    $cart_id = $cartId[0];
    //kiem tra hang ton tai chua
    $query2 = 'SELECT cart_item_id, quantity FROM cartItems WHERE cart_id = :cart_id AND product_id = :product_id';
    $statement = $db->prepare($query2);
    $statement->bindValue(':cart_id', $_SESSION['user']['user_id']);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    if ($statement->rowCount() > 0) {
        $product_change = $statement->fetch(PDO::FETCH_ASSOC);
        $quantity = $product_change['quantity'] + 1;
        $query3 = 'UPDATE cartitems SET quantity = ' . $quantity . ' WHERE cart_item_id = :cart_item_id';
        $statement = $db->prepare($query3);
        $statement->bindValue(':cart_item_id', $product_change['cart_item_id']);
        $statement->execute();
        return 'increase';
    } else {
        $query4 = 'INSERT INTO cartitems (cart_id, product_id, quantity) VALUES (:cart_id, :product_id, 1)';
        $statement = $db->prepare($query4);
        $statement->bindValue(':cart_id', $cart_id);
        $statement->bindValue(':product_id', $product_id);
        $statement->execute();
        $cart_item_id = $db->lastInsertId();
        $statement->closeCursor();
        return $cart_item_id;
    }
}

function getProductInCart()
{
    global $db;
    $query = 'SELECT cart_id FROM cart WHERE user_id = :user_id AND status = 1';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $_SESSION['user']['user_id']);
    $statement->execute();
    $cartId = $statement->fetch();
    $cart_id = $cartId[0];
    $query2 = 'SELECT * FROM cartItems WHERE cart_id = :cart_id';
    $statement = $db->prepare($query2);
    $statement->bindValue(':cart_id', $cart_id);
    $statement->execute();
    $product = $statement->fetchAll();
    $statement->closeCursor();
    return $product;
}

function deleteProductInCart($cart_item_id)
{
    global $db;
    $query = 'DELETE FROM cartItems WHERE cart_item_id = :cart_item_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':cart_item_id', $cart_item_id);
    $statement->execute();
    $delRow = $statement->rowCount();
    $statement->closeCursor();
    if ($delRow > 0)
        return 1;
    else
        return 0;
}
