<?php
    session_start();
    
    include("connect.php");


?>
<?php 
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
    $sql = "SELECT * FROM product WHERE id = $id";
    $query = mysqli_query($con,$sql);
    $rows = mysqli_fetch_array($query);
    
?>
<?php 
    if(isset($_FILES['image'])){
        $file = $_FILES['image'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'], 'Hinh/' . $file_name);
        
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toyota Việt Nam</title>
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/detail.css">
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

        <div class="carContainer">
        <div class="card">   
            <div class="name">
                <h2><?php echo $rows['product_name'] ?></h2>                  
            </div>
                <img src="/Hinh/<?php echo $rows['image'] ?> " width=300 height=400 >
                <div class="detail">
                    <h3 style="margin-top:-400px">Mô tả sản phẩm:</h3>
                    <p style="text-align: justify;"><?php echo $rows['detail']?></p>
                    <div class="icon">

                        <a href="bill.php?id=<?php echo $rows['id'] ?>"><i class="ti-shopping-cart"></i></a>
                        <a href="feedback.php?productid=<?php echo $rows['id']; ?>"><i class="fa-regular fa-comment"></i></a>
                    </div>
            
                </div>
                <div class="cost">Giá: <?php echo number_format($rows['price'] *1000,3, '.', '.') . ' VND'; ?></div>
         
                
        </div>
        </div>
        <footer style="margin-top: 720px;">
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