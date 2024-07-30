<?php
session_start();

include("connect.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Lấy dữ liệu từ form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birth = $_POST['birth'];
    $nationality = $_POST['nationality'];

    // Kiểm tra dữ liệu
    if (!empty($username) && !empty($password) && !is_numeric($username)) {
        // Lưu vào database
        $userid = random_num(20);
        $query = "INSERT INTO sign_up (userid, username, email, password, nationality, birth) VALUES ('$userid', '$username', '$email', '$password', '$nationality', '$birth')";

        if ($con->query($query) === TRUE) {
            // Chuyển hướng đến trang login
            header("Location: login.php");
            exit();
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
    <title>Register</title>
    <link rel="stylesheet" href="/CSS/signup.css">
    <link rel="icon" href="/Hinh/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/CSS/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('email').value = "";
            document.getElementById('username').value = "";
            document.getElementById('password').value = "";
            document.getElementById('date').value = "";
            document.getElementById('nationality').selectedIndex = 0;
        });
    </script>
</head>
<body>

<div class="container" id="container">
    <div class="login-container">
        <h2>Đăng ký</h2>
        <form id="myForm" method="post" autocomplete="off">
            

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <i class="fa-solid fa-envelope"></i>

            <label for="username">Tên Đăng Ký:</label>
            <input type="text" id="username" name="username" required>
            <i class="fa-solid fa-user"></i>

            <label for="password">Nhập Mật Khẩu Đăng Ký:</label>
            <input type="password" id="password" name="password" required autocomplete="new-password">
            <i class="fa-solid fa-lock"></i>

            <label for="birth">Ngày sinh:</label>
            <input type="date" name="birth" id="birth" placeholder="Ngày sinh" required>

            <label for="nationality">Quốc Tịch</label>
            <select class="form" id="nationality" name="nationality">
                <option value="0">Chọn Quốc Tịch</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Thailand">Thailand</option>
                <option value="England">England</option>
                <option value="Finland">Finland</option>
                <option value="Ireland">Ireland</option>
                <option value="Austria">Austria</option>
                <option value="Germany">Germany</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Italy">Italy</option>
                <option value="Serbia">Serbia</option>
                <option value="Spain">Spain</option>
                <option value="Croatia">Croatia</option>
                <option value="Russia">Russia</option>
                <option value="Ukraine">Ukraine</option>
                <option value="Ireland">Ireland</option>
                <option value="Canada">Canada</option>
                <option value="Mexico">Mexico</option>
                <option value="United States">United States</option>
                <option value="Cuba">Cuba</option>
                <option value="Argentina">Argentina</option>
                <option value="Portugal">Portugal</option>
                <option value="France">France</option>
                <option value="Sweden">Sweden</option>
            </select>

            <div class="log">
                <button type="submit">Đăng Ký</button>
                <p>Bạn đã có tài khoản? <a href="login.php">Đăng nhập tại đây!</a></p>
            </div>
        </form>
    </div>
</div>

    </body>
