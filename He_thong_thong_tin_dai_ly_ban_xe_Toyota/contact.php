<?php
session_start();


include("connect.php");
include("functions.php");

 $userdata = check_login($con);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $email =  $_POST['email'];
    $phonenum =  $_POST['phonenum'];
    $content =  $_POST['content'];

    if (!empty($username) && !empty($content) && !is_numeric($username)) {
        // lưu vào database
        $userid = random_num(20);
        // Sửa lỗi syntax trong câu truy vấn SQL
        $query = "INSERT INTO contact (firstname, lastname, email, phonenum, content) VALUES ('$firstname','$lastname','$email','$phonenum','$content')";

        // Sử dụng mysqli_query để thực hiện truy vấn
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<script>
                alert('Bạn đã gửi thành công');
                window.location.href ='contact.php';
            </script>";
    
        } 
        else {
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
    <title>Liên Hệ</title>
    <link rel="stylesheet" href="./CSS/contact.css">
    <link rel="stylesheet" href="/CSS/style.css">   
    <link rel="icon" href="/Hinh/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/contact.js">
    <link rel="stylesheet" href="/CSS/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="contactUs">
        <div class="tittle">
            <h2></h2>
        </div>
    </div>
    <div class="box">
        <div class="contactTwo form">
        <h3>Gửi thông tin tại đây</h3>
        <form method="post">
            <div class="formBox">

                <div class="row50">
                    <div class="inputBox">
                        <span>Tên</span>
                        <input type="text" id="username" name="firstname" placeholder="Họ Tên(*):" required>
                        
                    </div>
                    <div class="inputBox">
                        <span>Tên Đệm</span>
                        <input type="text" id="username" name="lastname" placeholder="Họ Tên(*):" required>
                        
                    </div>
                    
                </div>

                <div class="row50">
                <div class="inputBox">
                        <span>Số điện thoại</span>
                        <input type="number" id="phone_number" name ="phonenum" placeholder="Điện thoại(*):" required>
                    </div>
                    <div class="inputBox">
                        <span>Email của bạn</span>
                        <input type="email" id = "email" name="email" placeholder="abc@email.com" required>
                    </div>
                </div>

                <div class="row100">
                    <div class="inputBox">
                        <span>Thông Điệp</span>
                        <textarea id="content" name="content" placeholder="Nội dung(*):"></textarea>
                    </div>
                </div>

                <div class="row100">
                    <div class="inputBox">
                    <input type="submit"></input>
                    
                        
                    </div>
                </div>

            </div>

        </form>
        </div>
        <!-- end form -->
        <div class="contactTwo info">
            <h3>Liên Hệ với Chúng Tôi</h3>
            <div class="infoBox">
                <div>
                    <span><ion-icon name="location-outline"></ion-icon></span>
                    <p>Đại Học Giao Thông Vận Tải Thành Phố Hồ Chí Minh
                    </p>
                </div>
                <div>
                    <span><ion-icon name="mail-outline"></ion-icon></span>
                    <a href="mailto:22H1120103@UT.EDU.VN">22H1120103@UT.EDU.VN</a>
                </div>
                <div>
                    <span><ion-icon name="call-outline"></ion-icon></span>
                    <a href="telto:+84 376 851 082">0376 851 082</a>
                </div>
            </div>
        </div>
        <!-- end info -->
        <div class="contactTwo map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2771.2147415943286!2d106.71508272998027!3d10.804459181398114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175293dceb22197%3A0x755bb0f39a48d4a6!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBHaWFvIFRow7RuZyBW4bqtbiBU4bqjaSBUaMOgbmggUGjhu5EgSOG7kyBDaMOtIE1pbmggLSBDxqEgc-G7nyAx!5e0!3m2!1svi!2s!4v1719896453706!5m2!1svi!2s" 
             style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- end map -->

    </div>
    
    

</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>