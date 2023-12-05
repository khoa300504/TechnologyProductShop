<?php include 'header.php';
require_once('../model/product_db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/detail.css?v=1.3">
    <title>Document</title>
</head>

<body>
    <?php
    $product_id =  filter_input(INPUT_POST, 'product_id');
    $product = getProductByProductId($product_id);
    $price = number_format($product['price'], 0, ',', '.') . '₫';
    $imgs = getProductImgsByProductId($product_id);
    ?>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image" src="<?php echo $imgs[0]['src'] . $imgs[0]['alt']; ?>" width="250" /> </div>
                                <div class="thumbnail text-center">
                                    <?php foreach ($imgs as $img) {
                                    ?>
                                        <img onclick="change_image(this)" src="<?php echo $img['src'] . $img['alt']; ?>" width="70">
                            <?php } ?>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Laptop</span>
                                    <h5 class="text-uppercase"><?php echo $product['name'] ?></h5>
                                    <div class="price d-flex flex-row align-items-center"> <span class="act-price"><?php echo $price ?></span></div>
                                </div>
                                <p class="about text-uppercase"><?php echo $product['description'] ?></p>
                                <div class="sizes mt-5">
                                    <h6 class="">Ưu đãi</h6> <label class="radio"> <input type="radio" name="coupon" value="fs" checked> <span>Túi + chuột</span> </label> <label class="radio"> <input type="radio" name="coupon" value="m"> <span>Giảm 500.000đ</span> </label>
                                </div>
                                <!-- <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4">Thêm vào giỏ hàng</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div>
                             -->
                                <form action="" class="text-center" style="margin-top: 30px;">
                                    <input type="hidden" value="<?php echo $product_id ?>">
                                    <button class="button1" type="submit">Thêm vào giỏ hàng</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
    function change_image(image) {

        var container = document.getElementById("main-image");

        container.src = image.src;
    }



    document.addEventListener("DOMContentLoaded", function(event) {







    });
</script>

</html>
<?php include 'footer1.php'; ?>