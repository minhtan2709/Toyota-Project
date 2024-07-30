<?php
session_start();

include("connect.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Lấy dữ liệu từ form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $location = $_POST['location'];

    // Kiểm tra dữ liệu
    if (!empty($username) && !empty($email) && !is_numeric($username)) {
        // Lưu vào database
        $userid = random_num(20);
        $query = "INSERT INTO test (username, email,location, date) VALUES ('$username', '$email','$location', '$date')";

        if ($con->query($query) === TRUE) {
            // Chuyển hướng đến trang test
            echo "<script>
                alert('Bạn đã gửi thành công');
                window.location.href ='test.php';
            </script>";
        } else {
            echo "Error: " . $query . "<br>" . $con->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/test.css">
    <!--  -->
    <link rel="icon" href="/Hinh/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/CSS/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Đăng ký lái thử</title>
</head>
<body>
    <!-- <header>
        <ul>
            <li><a href="index.php"><img src="/Hinh/logoweb.jpg" alt="logo"></a></li>
            <li><a href="index.php" class="active">Sản Phẩm </a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="about.php">Công Nghệ</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="promotion.php">Khuyến Mãi</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="car.php">Sản Phẩm</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="test.php">Trải Nghiệm</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li id="contact"><a href="contact.php">Liên Hệ</a></li>
        </ul>
        <div class="search-box">
                <div class="row">
                    <input type="text" id="input-box" placeholder="Bạn muốn tìm gì?" autocomplete="off"> 
                <button><i class="iconSearch"><ion-icon name="search-outline"></ion-icon></i></button>
                </div>
            </div>
    </header> -->
    <!--  -->
    <div class="container" id="container">
    <div class="login-container">
        <h2>Đăng Ký Lái Thử</h2>
        <form id="myForm" method="post" autocomplete="off">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <i class="fa-solid fa-envelope"></i>

            <label for="username">Tên Đăng Ký:</label>
            <input type="text" id="username" name="username" required>
            <i class="fa-solid fa-user"></i>

            <label for="date">Ngày thử nghiệm</label>
            <input type="date" name="date" id="date" required>

            <label for="location">Chi Nhánh</label>
            <select class="form" id="location" name="location">
                <option value="0">Chọn Chi Nhánh</option>
                <option value="Hà Nội">Hà Nội</option>
                <option value="Lâm Đồng">Lâm Đồng</option>
                <option value="Tây Ninh">Tây Ninh</option>
                <option value="An Giang">An Giang</option>
                <option value="Huế">Huế</option>
                <option value="Ninh Bình">Ninh Bình</option>
                <option value="Kon Tum">Kon Tum</option>
                <option value="Bắc Giang">Bắc Giang</option>
                <option value="Cà Mau">Cà Mau</option>
                <option value="Hồ Chí Minh">Hồ Chí Minh</option>
            </select>

            <div class="log">
                <button type="submit">Đăng Ký</button>
            </div>
        </form>
    </div>  
</div>
    <!--  -->
    <!-- <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href="https://www.facebook.com/joongki.song.92167"><i class="fa-brands fa-facebook"></i></a>
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
    </footer> -->

</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>