<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../themify-icons/themify-icons.css">
</head>

<body>
  <?php

  ?>
  <div class="header-top-bar bg-black bg-gradient">
    <div class="container text-center py-3">
      <div class="row align-items-center">
        <div class="col-md-3">
          <img class="img-fluid w-75" src="../image/logo/main-logo.png" alt="">
        </div>
        <div class="col-md-6 pt-3">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Tìm kiếm ở đây  .  .  .">
            <a class="btn btn-warning" href="#" role="button"><i class="ti-search"></i></a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="btn-group">
            <button type="button" class="btn btn-warning dropdown-toggle user-manager" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="ti-user text-light fs-3 px-2" id="user-js"></i>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Tài khoản</a></li>
              <li><a class="dropdown-item" href="Cart-page.php">Giỏ hàng</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../User/logout.php">Đăng xuất</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="white-line"></div>
  <div class="nav bg-black bg-gradient sticky-top">
    <div class="container text-center">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <button class="navbar-toggler bg-light text-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item px-5 current-page-link">
                <a class="nav-link fw-light fs-6 current-page-btn text-light" href="">Home</a>
              </li>
              <li class="nav-item px-5">
                <a class="nav-link fs-6 text-light" href="Laptop-page.php">Laptop</a>
              </li>
              <li class="nav-item px-5">
                <a class="nav-link fs-6 text-light" href="#">Điện thoại</a>
              </li>
              <li class="nav-item px-5">
                <a class="nav-link fs-6 text-light" href="#">Phụ kiện</a>
              </li>
              <li class="nav-item px-5">
                <a class="nav-link fs-6 text-light" href="#">Liên hệ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
  </div>
  </div>
  <div class="white-line"></div>
  <div class="main-content container-fluid">
    <div class="row">
      <div class="col-md-9 py-3 px-3" id="banner-shop">
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner rounded-4">
            <div class="carousel-item active">
              <img src="../image/Slider/slide1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../image/Slider/slide1.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-md-3 py-3" id="hidden-item-1">
        <div class="row">
          <div class="col-md-12 px-3">
            <img src="../image/banner/banner3.jpg" alt="Ảnh nhỏ 2" class="img-fluid rounded-4">
          </div>
        </div>
        <div class="row px-2 py-3">
          <p class="fw-medium text-danger">Khuyến mãi sốc</p>
          <div class="col-md-3">
            <a href=""><img class="img-fluid border p-1 rounded-1" src="../image/banner/discount.jpg" alt=""></a>
          </div>
          <div class="col-md-9">
            <a href="#" class="text-decoration-none text-dark">
              <p class="fw-semibold"><i class="ti-crown text-danger"></i> Dell xps 13 9320 chỉ từ <i class="text-danger">28.900.000đ</i></p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container rounded-4" id="discount-area">
      <div class="discount-info">
        <div class="discount-icon discount py-3"><i class="ti-announcement" style="font-size: 65px; padding-left: 20px; max-width: 10%;"></i>
        </div>
        <div class="discount-time discount py-3">
          <p class="fs-2 fw-medium m-0">GIỜ VÀNG DEAL SỐC</p>
          <div class="end-in">
            <p class="" style="color: #fff;">Kết thúc trong</p>
          </div>
          <div class="end-in">
            <span id="hours" style="background-color: #000; padding: 4px 6px;" class="text-light rounded">00</span>
            <p class="time-remain" style="color: white; font-size: 20px;">:</p>
            <span id="minutes" style="background-color: #000; padding: 4px 6px;" class="text-light rounded time-remain">00</span>
            <p class="time-remain" style="color: white; font-size: 20px;">:</p>
            <span id="seconds" style="background-color: #000; padding: 4px 6px;" class="text-light rounded time-remain">00</span>
          </div>
        </div>
      </div>
      <div class="discount-item">
        <div class="row text-center">
          <div class="col-md rounded bg-light mx-2 item-discount my-2">
            <a href="">
              <img class="img-fluid p-3 animation-item" src="../image/special-item/iphone15.webp" alt="">
              <p>Iphone 15</p>
              <strong class="text-danger fs-5">
                30.900.000₫
                <p class="text-secondary m-0 text-opacity-50 line-through fw-normal fs-6"><del>33.900.000đ</del> <span class="bg-danger-subtle text-danger mx-2 rounded">-6%</span></p>
              </strong>
              <div class="remain-item py-2">
                <img class="remain-fire" src="../image/special-item/fire.png" alt="">
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar overflow-visible text-dark px-4 bg-warning" style="width: 10%"><span style="font-size: 15px;">&emsp; &emsp;Còn 2/10 suất</span></div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md rounded bg-light mx-2 item-discount my-2">
            <a href="">
              <img class="img-fluid p-3 animation-item" src="../image/special-item/s23.webp" alt="">
              <p>Galaxy S23</p>
              <strong class="text-danger fs-5">
                13.900.000₫
                <p class="text-secondary m-0 text-opacity-50 line-through fw-normal fs-6"><del>33.900.000đ</del> <span class="bg-danger-subtle text-danger mx-2 rounded">-6%</span></p>
              </strong>
              <div class="remain-item py-2">
                <img class="remain-fire" src="../image/special-item/fire.png" alt="">
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar overflow-visible text-dark px-3 bg-warning" style="width: 10%"><span style="font-size: 15px;">&emsp;&emsp; &ensp;&ensp;Còn 3/20 suất</span></div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md rounded bg-light mx-2 item-discount my-2">
            <a href="">
              <img class="img-fluid p-3 animation-item" src="../image/special-item/iphone13.webp" alt="">
              <p>Iphone 13</p>
              <strong class="text-danger fs-5">
                16.000.000₫
                <p class="text-secondary m-0 text-opacity-50 line-through fw-normal fs-6"><del>33.900.000đ</del> <span class="bg-danger-subtle text-danger mx-2 rounded">-6%</span></p>
              </strong>
              <div class="remain-item py-2">
                <img class="remain-fire" src="../image/special-item/fire.png" alt="">
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar overflow-visible text-dark bg-warning" style="width: 10%; padding-right: 10%;"><span style="font-size: 15px;">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Còn 1/20 suất</span></div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md rounded bg-light mx-2 item-discount my-2">
            <a href="">
              <img class="img-fluid p-3 animation-item" src="../image/special-item/redmi12pro.webp" alt="">
              <p>Redmi 12 Pro</p>
              <strong class="text-danger fs-5">
                7.700.000₫
                <p class="text-secondary m-0 text-opacity-50 line-through fw-normal fs-6"><del>33.900.000đ</del> <span class="bg-danger-subtle text-danger mx-2 rounded">-6%</span></p>
              </strong>
              <div class="remain-item py-2">
                <img class="remain-fire" src="../image/special-item/fire.png" alt="">
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar overflow-visible text-dark px-5 bg-warning" style="width: 10%"><span style="font-size: 15px;">&ensp;&ensp;&ensp;Còn 13/30 suất</span></div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md rounded bg-light mx-2 item-discount my-2">
            <a href="">
              <img class="img-fluid p-3 animation-item" src="../image/special-item/fold5.webp" alt="">
              <p>ZFold 5</p>
              <strong class="text-danger fs-5">
                35.00.000₫
                <p class="text-secondary m-0 text-opacity-50 line-through fw-normal fs-6"><del>33.900.000đ</del> <span class="bg-danger-subtle text-danger mx-2 rounded">-6%</span></p>
              </strong>
              <div class="remain-item py-2">
                <img class="remain-fire" src="../image/special-item/fire.png" alt="">
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar overflow-visible text-dark bg-warning" style="width: 10%; padding-right: 90%;"><span style="font-size: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ensp;&ensp;Còn 18/20 suất</span></div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer" style="height: 10px;">
    <div class="container-fluid commit text-center bg-dark">
      <div class="row py-3">
        <div class="col-md-3">
          <img src="../image/logo/commit1.webp" alt="">
          <a class="text-decoration-none text-light" href="">
            Miễn Phí vận chuyển
            <b class="" style="font-size: 12px; display: block">Cho đơn hàng trên 500k</b>
          </a>
        </div>
        <div class="col-md-3">
          <img src="../image/logo/commit2.webp" alt="">
          <a class="text-decoration-none text-light" href="">
            Thanh toán an toàn
            <b class="" style="font-size: 12px; display: block">100% thanh toán bảo mật</b>
          </a>
        </div>
        <div class="col-md-3">
          <img src="../image/logo/commit3.webp" alt="">
          <a class="text-decoration-none text-light" href="">
            Hỗ trợ khách hàng 24/7
            <b class="" style="font-size: 12px; display: block">Liên hệ với chúng tôi ngay</b>
          </a>
        </div>
        <div class="col-md-3">
          <img src="../image/logo/commit4.webp" alt="">
          <a class="text-decoration-none text-light" href="">
            Miễn phí đổi trả
            <b class="" style="font-size: 12px; display: block">Nếu sản phẩm có lỗi</b>
          </a>
        </div>
      </div>
    </div>
    <?php  
      include 'footer1.php';
    ?>
  </div>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script>
    var hoursSpan = document.getElementById("hours");
    var minutesSpan = document.getElementById("minutes");
    var secondsSpan = document.getElementById("seconds");

    // Đặt thời gian ban đầu (ví dụ: 1 giờ, 30 phút và 45 giây)
    var hours = 2;
    var minutes = 0;
    var seconds = 0;

    // Tính tổng số giây
    var totalSeconds = hours * 3600 + minutes * 60 + seconds;

    // Cập nhật đồng hồ đếm ngược mỗi giây
    var countdownInterval = setInterval(function() {
      // Kiểm tra nếu thời gian đã hết
      if (totalSeconds <= 0) {
        clearInterval(countdownInterval);
        alert("Hết thời gian đếm ngược!");
      } else {
        // Tính toán giờ, phút và giây còn lại
        var remainingHours = Math.floor(totalSeconds / 3600);
        var remainingMinutes = Math.floor((totalSeconds % 3600) / 60);
        var remainingSeconds = totalSeconds % 60;

        // Cập nhật giá trị trên các thẻ span
        hoursSpan.textContent = String(remainingHours).padStart(2, '0');
        minutesSpan.textContent = String(remainingMinutes).padStart(2, '0');
        secondsSpan.textContent = String(remainingSeconds).padStart(2, '0');

        // Giảm tổng số giây đi 1 mỗi giây
        totalSeconds--;
      }
    }, 1000);
  </script>
  <script>
    const closebtn = document.getElementById("close-js");
    const notify = document.getElementById('notify-js');

    closebtn.addEventListener('click', closeNotify);

    function closeNotify() {
      notify.classList.add('close');
    }
  </script>
</body>

</html>