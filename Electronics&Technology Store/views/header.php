<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/header.css">
</head>

<body>
  <div class="menu bg-body-tertiary sticky-top">
    <div class="container">
      <div class="row">
        <div class="col-md-2 align-self-center" id="col1st">
          <img src="../image/logo/main-logo.png" class="w-100" alt="">
        </div>
        <div class="col-md-10 align-self-center" id="col2nd">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand fs-5 mx-5 px-1 menu-items" href="../index.php">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link inline menu-items fs-5 mx-5 px-1" aria-current="page" href="Laptop-page.php">Laptop</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link inline menu-items fs-5 mx-5 px-1" href="#">Điện thoại</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link inline menu-items fs-5 mx-5 px-1" href="#">Phụ kiện</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link inline dropdown-toggle no-hover fs-5 mx-5 px-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Tài khoản
                    </a>
                    <ul class="dropdown-menu">
                    <?php session_start(); if(isset($_SESSION['user']['username'])){ ?>
                      <li><a class="dropdown-item" href="#"><?php echo $_SESSION['user']['username'];?></a></li>
                      <li><a class="dropdown-item" href="Cart-page.php">Giỏ hàng</a></li>
                      <li><a class="dropdown-item" href="../User/logout.php">Đăng xuất</a></li>
                      <?php }
                      else 
                      {
                        echo '<li><a class="dropdown-item" href="../index.php">Đăng nhập</a></li>';
                      } ?>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>