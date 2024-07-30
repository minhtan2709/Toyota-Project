<?php
session_start();

include("connect.php");
include("functions.php");

$userdata = check_login($con);

if (isset($_GET["productid"])) {
    $productid = $_GET["productid"];
} else {
    // Nếu không có productid trong URL, chuyển hướng hoặc hiển thị thông báo lỗi
    die("Không tìm thấy productid");
}

// Lấy userid từ phiên làm việc
$userid = $userdata['userid'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $content = $_POST['content'];

    if (!empty($username) && !empty($content) && !is_numeric($username)) {
        $query = "INSERT INTO feedback ( userid,  productid, email, content) VALUES ('$userid', '$productid','$email', '$content' )";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<script>
                alert('Bạn đã gửi thành công');
                window.location.href ='detail.php?id=$productid';
            </script>";
            exit;
            
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
    } else {
        echo "Hãy nhập thông tin hợp lệ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phản hồi</title>
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/form.css">
    <link rel="icon" href="/Hinh/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/CSS/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
<div class="container" id ="container">
    <div id="outer2">
        <div class="contact">
            <h2 style="color:#000; margin-top:30px"> Phản hồi về sản phẩm </h2>
            <div class="content-contact">
                <form id="content-contact" method="post">
                    <input type="hidden" id="productid" name="productid" value="<?php echo $productid; ?>">
                    <input type="hidden" id="userid" name="userid" value="<?php echo $userid; ?>">
                    <input type="text" id="username" name="username" placeholder="Họ Tên(*):" required>
                    <input type="email" id="email" name="email" placeholder="Nhập email(*):" required>
                    <input type="number" id="phone_number" name="phonenum" placeholder="Điện thoại(*):" required>
                    <input type="text" id="content" name="content" placeholder="Nội dung(*):" required>
                    <button type="submit" style="border-radius: 15px 0px 15px 0px">Gửi</button>
                </form>
            </div>
        </div>
    </div>
</div>
<footer style="margin-top:100px;">
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
                <li><a href="">Home</a></li>
                <li><a href="">News</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Our Team</a></li>
            </ul>
        </div>
    </div>
    <div class="footerBottom">
        <p>©2024 Toyota Motor Sales, U.S.A., Inc. All information applies to U.S. vehicles only.<br>
            The use of Olympic Marks, Terminology and Imagery is authorized by the U.S. Olympic & Paralympic Committee pursuant to Title 36 U.S. Code Section 220506.</p>
    </div>
</footer>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
