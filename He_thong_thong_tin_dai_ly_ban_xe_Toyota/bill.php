<?php
session_start();
include("connect.php");
include("functions.php");
$userdata = check_login($con);

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Truy vấn để lấy sản phẩm
    $sql = "SELECT * FROM product WHERE id = $id";
    $query = mysqli_query($con, $sql);

    if ($query) {
        $rows = mysqli_fetch_array($query);

        if ($rows) {
            $productid = $rows['productid'];
            $product_name = $rows['product_name'];
            $price = $rows['price'];
            $image = $rows['image'];
            $date = $rows['date'];
            
            // Truy vấn để chèn vào bảng bill
            $qr = "INSERT INTO bill (productid, product_name, price, image) VALUES ('$productid', '$product_name', '$price', '$image')";

            if (mysqli_query($con, $qr)) {
                header("Location: bill.php");
                exit();
            } else {
                echo "Error: " . $qr . "<br>" . mysqli_error($con);
            }
        } else {
            echo "Không tìm thấy dữ liệu cho ID được cung cấp.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>


<?php 
if (isset($_FILES['image'])) {
    $file = $_FILES['image'];
    $file_name = $file['name'];
    move_uploaded_file($file['tmp_name'], 'Hinh/' . $file_name);
}
?>
<?php
    $totalCost = 0;
    $SQL = "SELECT * FROM bill";
    $que = mysqli_query($con, $SQL);

    if (!$que) {
        echo "Error: " . $SQL . "<br>" . mysqli_error($con);
        exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa Đơn</title>
    <link rel="stylesheet" href="/CSS/bill.css">
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
    </header>
<div class="container" id="container">
    <h1 style="color:#000; text-align:center;">Hóa Đơn</h1>
    <table border="0" style="margin-bottom: 185px;">
        <tr>
            <th>ID</th>
            <th>Ảnh</th>
            <th>Tên Xe</th>
            <th>Thời gian đặt</th>
            <th>Giá</th>
            
            <th><a href="index.php"><i class="ti-plus" style="color:#EE4C7C;"></i></a></th>
        </tr>
        <?php while ($rows = mysqli_fetch_array($que)) {
            $totalCost += $rows['price'];
        ?>
        <tr>
            <td><?php echo $rows['productid'] ?></td>
            <td><img src="/Hinh/<?php echo $rows['image'] ?>" width=100px height=100px></td>
            <td><?php echo $rows['product_name'] ?></td>
            <td><?php echo $rows['date'] ?></td>

            <td><?php echo number_format($rows['price']*1000 , 3, '.', '.') . ' VND'; ?></td>
            <th><a href="delete_bill.php?id=<?php echo $rows['id'] ?>"><i class="ti-trash"></i></a></th> 
        </tr>
        <?php } ?>
        <tr>
            <td colspan="4">Tổng:</td>
            <td><?php echo number_format($totalCost * 1000, 3, '.', '.') . ' VND'; ?></td>
            <td><a href="bank.php"><button>Thanh toán</button></a></td>
        </tr>
    </table>
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
