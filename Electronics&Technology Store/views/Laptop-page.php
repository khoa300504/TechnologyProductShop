<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style2.css?v=1.2">
</head>

<body>
    <div class="item-container">
        <?php
        $limit = 16;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $start = ($page - 1) * $limit;
        include '../model/product_db.php';
        $item_total = getProductByCategory(1);
        $products = getProductHaveLimit(1, $start, $limit);
        $total_page = ceil(count($item_total) / $limit);
        foreach ($products as $product) {
            $imgs = getProductImgByProductId($product['product_id']);
        ?>
            <div class="img-card border text-center" id="item-js">
                <div class="item-img">
                    <img class="img-fluid" src="<?php echo $imgs['src'] . $imgs['alt']; ?>" alt="<?php ?>">
                    <p class="fw-medium cursourDisable name-item"><?php echo $product['name'] ?></p>
                </div>
                <div class="item-compare">
                    <?php
                    $input_string = $product['description'];

                    $parts = explode('/', $input_string);
                    $Chip = $parts[0];
                    $Ram = $parts[1];
                    $Rom = $parts[2];
                    $Screen = $parts[3];
                    $Rr = $parts[4];
                    $Gpu = $parts[5];
                    ?>
                    <span class="bg-body-secondary rounded cursourDisable"><?php echo "Ram: " . $Ram; ?></span>
                    <span class="bg-body-secondary rounded cursourDisable"><?php echo "Rom: " . $Rom; ?></span>
                </div>
                <div class="item-price">
                    <?php
                    $price = number_format($product['price'], 0, ',', '.') . '₫';
                    ?>
                    <strong class="text-danger cursourDisable"><?php echo $price ?></strong>
                </div>
                <div class="item-info">
                    <p class="item-chip cursourDisable">♦Chip: <?php echo $Chip ?></p>
                    <p class="item-screen cursourDisable">♦Gpu: <?php echo $Gpu ?></p>
                </div>
                <form action="../product/add_cart_items.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $product['product_id'] ?>">
                    <button id="m" type="submit" class="cart-btn type1 mx-3"></button>
                </form>
                <form action="../views/Product-detail.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $product['product_id'] ?>">
                    <button type="submit" class="detail-btn1">
                        <span class="detail-btn2">Chi tiết</span>
                    </button>
                </form>
            </div>
        <?php } ?>
    </div>
    <div class="page-number text-center">
        <?php
        for ($i = 1; $i <= $total_page; $i++) { ?>
            <a class="text-decoration-none text-dark mx-2" href="<?php echo "Laptop-page.php?page= " . $i ?>"><?php echo $i ?></a>
        <?php
        }
        ?>
        <a href="#">ontop</a>
    </div>
    <!-- <div class="buyNowModel">
        <div class="container-model">

        </div>
    </div> -->
    <!-- <div class="buy-now" id="buy-item">
        <div class="container-item">
            <strong>Xác nhận mua hàng</strong>
            <div class="row">
                <strong>Thông tin đơn hàng</strong>
            </div>
            <div class="row">
                <div class="col-md-4">Tên sản phẩm</div>
                <div class="col-md-8">Macbook air 15inch m2 2023</div>
            </div>
            <div class="row">
                <div class="col-md-4">Giá bán</div>
                <div class="col-md-8">56.000.000₫</div></div>
            </div>
            <div class="row">
                <div class="col-md-4">Tên sản phẩm</div>
                <div class="col-md-8">Giá bán</div>
            </div>
        </div>
    </div> -->
</body>

</html>
<?php
include 'footer1.php'
?>