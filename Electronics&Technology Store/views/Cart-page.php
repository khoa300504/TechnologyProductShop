<?php
include 'header.php';
require_once('../model/product_db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/cart.css?v=1.1">
    <link rel="stylesheet" href="../themify-icons/themify-icons.css">
    <title>Document</title>
</head>

<body>
    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                        <div>
                            <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                        </div>
                    </div>

                    <?php $cartItems = getProductInCart();
                    $total = 0;
                    foreach ($cartItems as $cartItem) {
                        $img = getProductImgByProductId($cartItem['product_id']);
                        $product = getProductByProductId($cartItem['product_id']);
                        $product_price = $product['price'] * $cartItem['quantity'];
                        $price = number_format($product_price, 0, ',', '.') . '₫';
                        $total += $product_price;
                    ?>

                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="<?php echo $img['src'] . $img['alt']; ?>" class="img-fluid rounded-3" alt="name">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2"><?php echo $product['name'] ?></p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>

                                        <input id="form1" min="0" name="quantity" value="<?php echo $cartItem['quantity']; ?>" type="number" class="form-control form-control-sm" />

                                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="col-md-1 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0"><?php echo $price ?></h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                    </div>
                                    <div class="col-md-1">
                                        <form action="../product/delete_product.php" method="POST">
                                            <input type="hidden" value="<?php echo $cartItem['cart_item_id'] ?>" name="cart_item_id">
                                            <button class="btn-del" type="submit">
                                                <i class="ti-trash icon fs-4"></i>
                                                    <path transform="translate(-2.5 -1.25)" d="M15,18.75H5A1.251,1.251,0,0,1,3.75,17.5V5H2.5V3.75h15V5H16.25V17.5A1.251,1.251,0,0,1,15,18.75ZM5,5V17.5H15V5Zm7.5,10H11.25V7.5H12.5V15ZM8.75,15H7.5V7.5H8.75V15ZM12.5,2.5h-5V1.25h5V2.5Z" id="Fill"></path>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php }
                    $total = number_format($total, 0, ',', '.') . '₫';
                    ?>

                    <div class="total-price card mb-4">
                        <label for="" class="mx-5 my-3 mb-3">Tổng tiền thanh toán: <strong class="float-end text-danger" style="padding-right: 50px;"><?php echo $total ?></strong></label>
                    </div>

                    <div class="card rounded-3 text-center">
                        <button type="button" class="btn btn-warning btn-block btn-lg">Thanh toán</button>
                    </div>

                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php
include 'footer1.php'
?>