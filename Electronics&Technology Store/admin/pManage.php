<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/add-product.css">
    <link rel="stylesheet" href="../themify-icons/themify-icons.css">
</head>

<body>
    <div class="main bg-secondary-subtle">
        <div class="row text-center align-items-center mx-3 my-1">
            <div class="col-md-1 my-2 rounded bg-primary py-3" id="nav-bar">
                <a href="index.php"><img src="../image/logo/admin.png" alt="" class="img-fluid px-1 py-3"></a>
                <a href="#"><img src="../image/logo/pManage.png" alt="" class="img-fluid px-1 py-3"></a>
                <a href=""><img src="../image/logo/uManage.png" alt="" class="img-fluid px-1 py-3"></a>
                <a href=""><img src="../image/logo/oManage.png" alt="" class="img-fluid px-1 py-3"></a>
                <a href=""><img src="../image/logo/dManage.png" alt="" class="img-fluid px-1 py-3"></a>
                <a href="" class="text-light text-decoration-none">Back to shop</a>
            </div>
            <div class="col-md-11">
                <span class="float-end lh-lg">Nguyễn Tuấn Khoa</span>
                <a href="" class="text-dark text-decoration-none fs-5"><i class="ti-bell float-end px-3 py-2 mx-2"></i><span></span></a>
            </div>
        </div>
        <div class="add-product bg-light rounded">
            <h5 class="fw-medium" style="padding-left: 20px; padding-top: 10px;">Product Information</h5>
            <form action="../product/add_product.php" method="post" class="text-center py-3" enctype="multipart/form-data">
                <div class="row">
                    <input type="text" class="rounded border-info-subtle add-group" id="name" name="add-name" placeholder="Tên sản phẩm" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="rounded border-info-subtle add-group" id="price" name="add-price" placeholder="Giá bán" required>
                    </div>
                    <div class="col-md-6">
                        <label id="type-label" for="">Loại sản phẩm</label>
                        <select id="type-select" class="rounded border-info-subtle" name="add-type" onchange="updatePlaceholder()">
                            <option value="1">Laptop</option>
                            <option value="2">Điện Thoại</option>
                            <option value="3">Phụ kiện</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <input type="text" class="rounded border-info-subtle add-group" id="descrip" name="add-des" placeholder="Form: Chip/Ram/Rom/Screen/Refresh rate/GPU" required>
                </div>
                <div class="row">
                    <label for="formFileMultiple" class="form-label label-file ">✷Tải lên ảnh mô tả</label>
                    <input class="form-control border-info-subtle" type="file" name="imgs[]" id="formFileMultiple" multiple required>
                </div>
                <div class="row">
                    <input type="submit" class="border-info-subtle rounded" name="submit" id="submit-add" value="Thêm sản phẩm">
                    <?php
                    if (isset($_GET['reponse'])) {
                        if ($_GET['reponse'] == 'success') {
                    ?>
                            <p class="success align-self-center text-danger" style="padding-right: 62px;">Tải lên thành công</p>
                        <?php
                        } else {
                        ?>
                            <p class="error align-self-center text-danger" style="padding-right: 62px;"><?php echo $reponse ?></p>
                    <?php
                        }
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
  function updatePlaceholder() {
    var selectValue = document.getElementById("type-select").value;

    if (selectValue == "1") {
        document.getElementById('descrip').placeholder = 'Form: Chip/Ram/Rom/Screen/Refresh rate/GPU';
    } else if (selectValue == "2") {
        document.getElementById('descrip').placeholder = 'Form: Chip/Ram/Rom/Screen/Refresh rate/Batery';
    } else {
        document.getElementById('descrip').placeholder = 'Your descriptions';
    }
}
</script>
</body>

</html>