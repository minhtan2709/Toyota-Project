
<?php
    session_start();
    
    include("connect.php");
    include("functions.php");
    $userdata = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Promotion</title>
  <link rel="stylesheet" href="/CSS/promotion.css">
  <link rel="stylesheet" href="/CSS/style.css">
  <link rel="icon" href="/Hinh/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
        <ul>
        <li><a href="index.php"><img src="/Hinh/logoweb.jpg" alt="logo"></a></li>
            <li><a href="index.php" class="active">Trang Chủ</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="about.php">Công Nghệ</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="promotion.php">Khuyến Mãi</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="car.php">Sản Phẩm</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="test.php">Trải Nghiệm</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li id="contact"><a href="contact.php" style="margin-top: 8px; margin-right: 10px;">Liên Hệ</a></li>
        </ul>
    </header>
  <div class="container">
    <div class="slide">
        <div class="item" style="background-image: url(/Hinh/khuyenmai1.jpg)">
        <div class="content">
          <!-- <div class="name">Khuyenmai1</div>
          <div class="des">thanh pho ho chi minh ho chi minh thanh pho</div> -->
          <a href="index.php"><button>Mua Xe</button></a>
        </div>
        </div>
        <div class="item" style="background-image: url(/Hinh/khuyenmai2.png)">
        <div class="content">
          <!-- <div class="name">Khuyenmai1</div>
          <div class="des">thanh pho ho chi minh ho chi minh thanh pho</div> -->
          <a href="index.php"><button>Mua Xe</button></a>
        </div>
        </div>
        <div class="item" style="background-image: url(/Hinh/khuyenmai3.png)">
        <div class="content">
          <!-- <div class="name">Khuyenmai1</div>
          <div class="des">thanh pho ho chi minh ho chi minh thanh pho</div> -->
          <a href="index.php"><button>Mua Xe</button></a>
        </div>
        </div>
        <div class="item" style="background-image: url(/Hinh/khuyenmai4.png)">
        <div class="content">
          <!-- <div class="name">Khuyenmai1</div>
          <div class="des">thanh pho ho chi minh ho chi minh thanh pho</div> -->
          <a href="index.php"><button>Mua Xe</button></a>
        </div>
        </div>
        <div class="item" style="background-image: url(/Hinh/khuyenmai5.png)">
        <div class="content">
          <!-- <div class="name">Khuyenmai1</div>
          <div class="des">thanh pho ho chi minh ho chi minh thanh pho</div> -->
          <a href="index.php"><button>Mua Xe</button></a>
        </div>
        </div>
    </div>
    <div class="button">
      <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
      <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
  </div>
  <script src="/promotion.js"></script>
  <footer style="margin-top: 700px;">
        <div class="footerContainer">
            <div class="socialIcons">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
                <a href=""><i class="fa-brands fa-google-plus"></i></a>
            </div>
            <div class="footerNav">
                <ul>
                <li><a href="">Trang Chủ</a></li>
                    <li><a href="">Tin Tức</a></li>
                    <li><a href="">Chúng Tôi</a></li>
                    <li><a href="">Liên Hệ</a></li>
                    <li><a href="">Phản Hồi</a></li>
                </ul>
            </div>
            
        </div>
        <div class="footerBottom">
        <p>Số GCNĐKDN: 2500150335<br>
                Cấp lần đầu: Ngày 26/03/2007<br>
                Đăng ký thay đổi lần thứ 19: Ngày 02/02/2023<br>
                Cơ quan cấp: Sở kế hoạch và đầu tư tỉnh Vĩnh Phúc
                Địa chỉ: Phường Phúc Thắng, Thành phố Phúc Yên, Tỉnh Vĩnh Phúc, Việt Nam<br>
        </p>
        </div>
    </footer>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
