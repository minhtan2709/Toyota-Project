
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
<?php 
    $search_result = null;
    if (isset($_POST["search"])) {
        $s = $_POST['txtsearch'];
        if ($s != "") {
            $sql = "SELECT * FROM product WHERE product_name LIKE '%$s%'";
            $search_query = mysqli_query($con, $sql);
            if (mysqli_num_rows($search_query) > 0) {
                $search_result = mysqli_fetch_array($search_query);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toyota Việt Nam</title>
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
            <li><a href="index.php" class="active">Trang Chủ</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="about.php">Công Nghệ</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="promotion.php">Khuyến Mãi</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="car.php">Sản Phẩm</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li><a href="test.php">Trải Nghiệm</a><ion-icon name="chevron-down-outline"></ion-icon></li>
            <li id="contact" ><a href="contact.php" style="margin-top: 8px; margin-right: 10px;">Liên Hệ</a></li>
        </ul>
        <div class="search-box">
            <form method="POST" action="">
                <div class="row">
                    <input type="text" name="txtsearch" id="input-box" placeholder="Bạn muốn tìm gì?" autocomplete="off">
                    <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>

   
    </header>
    <div class="list">
<?php
if ($search_result) {
?>
    <div class="card-info">
        <h2 style="text-align: center">
            <a href="detail.php?id=<?php echo $search_result['id']; ?>">
                <?php echo $search_result["product_name"]; ?>
            </a>
        </h2>
        <a href="detail.php?id=<?php echo $search_result['id']; ?>">
            <img src="/Hinh/<?php echo $search_result['image']; ?>" width="100px" height="100px">
        </a>
        <h3><?php echo number_format($search_result['price']*1000 , 3, '.', '.') . ' VND'; ?></h3>
        <a href="bill.php?id=<?php echo $search_result['id']; ?>">
            <i class="ti-shopping-cart"></i>
        </a>
    </div>
<?php
} else {
    $sql = "SELECT * FROM product";
    $query = mysqli_query($con, $sql);
    while ($rows = mysqli_fetch_array($query)) {
?>
    <div class="card-info">
        <h2 style="text-align: center">
            <a href="detail.php?id=<?php echo $rows['id']; ?>">
                <?php echo $rows["product_name"]; ?>
            </a>
        </h2>
        <a href="detail.php?id=<?php echo $rows['id']; ?>"><img src="/Hinh/<?php echo $rows['image']; ?>" width="100px" height="100px"></a>
        <h3><?php echo number_format($rows['price']*1000 , 3, '.', '.') . ' VND'; ?></h3>
        <a href="bill.php?id=<?php echo $rows['id']; ?>">
            <i class="ti-shopping-cart"></i>
        </a>
    </div>
<?php
    }
}
?>
</div>

   
    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href="https://www.facebook.com/hoangdevSE"><i class="fa-brands fa-facebook"></i></a>
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