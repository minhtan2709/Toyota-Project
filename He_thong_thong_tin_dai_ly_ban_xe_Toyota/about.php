
<?php
    session_start();
    
    include("connect.php");
    include("functions.php");
    $userdata = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/CSS/about.css" />
    <title>About Toyota Việt Nam</title>
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="icon" href="/Hinh/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/CSS/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
  <header>
        <ul>
        <li><a href="index.php"><img src="/Hinh/logoweb.jpg" alt="logo"></a></li>
            <li><a href="index.php" class="active">Trang Chủ </a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="about.php">Công Nghệ</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="promotion.php">Khuyến Mãi</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="car.php">Sản Phẩm</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="test.php">Trải Nghiệm</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li id="contact"><a href="contact.php"  style="margin-top: 8px; margin-right: 10px;">Liên Hệ</a></li>
        </ul>
    </header>
    <section>
      <div class="row">
        <h1></h1>
      </div>
      <div class="row" style="margin-top:0px">
        <div class="column">
          <div class="card">
            <div class="icon">
              <i class="fa-solid fa-list-check"></i>
            </div>
            <h3>Đa dạng sản phẩm</h3>
            <p>
              Cung cấp đa dạng nội dung các xe phù hợp  với lĩnh
              vực cuộc sống.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon">
              <i class="fa-solid fa-microchip"></i>
            </div>
            <h3>Công nghệ tiên tiến</h3>
            <p>
              Hiện thân của sự tinh tế và hiệu suất vượt trội, được chế tạo bằng chất liệu cao cấp.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon">
              <i class="fa-solid fa-user"></i>
            </div>
            <h3>Phù hợp với người dùng</h3>
            <p>
              Giao diện dễ dùng đơn giản để giúp người dùng có thể dễ sử dụng
            </p>
          </div>
        </div>
      </div>
    </section>
    <footer>
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
