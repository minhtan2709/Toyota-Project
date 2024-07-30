
<?php
    session_start();
    
    include("connect.php");
    include("functions.php");
    $userdata = check_login($con);


?>
<?php
$current_id = isset($_GET['id']) ? $_GET['id'] : 1;
       $sql = "SELECT id FROM product ORDER BY id";
       $query = mysqli_query($con, $sql);
       $product_ids = [];
       while ($row = mysqli_fetch_assoc($query)) {
           $product_ids[] = $row['id'];
       }
       
       $current_index = array_search($current_id, $product_ids);
       

       $next_id = isset($product_ids[$current_index + 1]) ? $product_ids[$current_index + 1] : $product_ids[0]; 
       $prev_id = isset($product_ids[$current_index - 1]) ? $product_ids[$current_index - 1] : end($product_ids);

       $sql = "SELECT * FROM product WHERE id = $current_id";
       $query = mysqli_query($con, $sql);
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
    <title>Car</title>
    <link rel="stylesheet" href="/CSS/car.css">
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

<div class="container">
        <div class="card">
            <h2> Hệ thống quản lý Toyota</h2>
            <img src="/Hinh/<?php echo $rows['image'] ?>" >
            <h4>Tên Sản Phẩm: <?php echo $rows['product_name'] ?></h4>
            <h4>Đơn giá: <?php echo number_format($rows['price'] *1000,3, '.', '.') . ' VND'; ?></h4>
            <a href="detail.php?id=<?php echo $rows['id']; ?>"><i class="fa-solid fa-file"></i></a>
            <a href="add_product.php"><i class="fa-solid fa-plus"></i></a>
            <a href="edit_product.php?id=<?php echo $rows['id']; ?>"><i class="fa-solid fa-file-pen"></i></a>
            <a href="delete_product.php?id=<?php echo $rows['id']; ?>"><i class="fa-solid fa-trash"></i></a>
            <div class="arrow">

                <a href="car.php?id=<?php echo $prev_id; ?>"><i class="ti-arrow-left"></i></a>
                <a  href="car.php?id=<?php echo $next_id; ?>"><i class="ti-arrow-right" ></i></a>
               
            </div>
            

        </div>
        

    </div>
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