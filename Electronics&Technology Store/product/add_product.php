<?php
require_once('../model/database.php');
require_once('../model/product_db.php');

$reponse = "";
$p_name = filter_input(INPUT_POST, 'add-name');
$p_price = filter_input(INPUT_POST, 'add-price');
$p_type = filter_input(INPUT_POST, 'add-type');
$p_des = filter_input(INPUT_POST, 'add-des');

$reponse = addProduct($p_name, $p_price, $p_type, $p_des);

if (is_numeric($reponse)) {
    if (isset($_FILES['imgs'])) {
        $reponse = uploadImgs($_FILES, $reponse);
        header("location: ../admin/pManage.php?reponse=$reponse");
    }
}
else{
    $reponse = 'Sảm phẩm đã tồn tại';
    header("location: ../admin/pManage.php?reponse=$reponse");
}
?>

