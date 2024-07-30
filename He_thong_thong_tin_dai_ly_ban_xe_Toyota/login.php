<?php
    session_start();
    
    include("connect.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD']== "POST"){

    $username = $_POST['username'];
    // $email = $_POST['email'];
    $password = $_POST['password'];

   
            if(!empty($username) && !empty($password) && !is_numeric($username)){
                // đọc database
           
                $query = "SELECT * FROM sign_up WHERE username = '$username' LIMIT 1";

                $result =mysqli_query($con, $query);
                if($result){
                    if($result && mysqli_num_rows($result)>0){
                        $userdata = mysqli_fetch_assoc($result);
                    
                        if($userdata['password'] === $password && $userdata['username'] === $username ){
                           
                            $_SESSION['userid'] = $userdata['userid'];
                            header("Location: index.php");
                            exit;
                            
                           
                        
                        }
                       
                        
                    }
                    
                
                }
                    
            }
           
             
         
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/signin.css">
    <link rel="icon" href="/Hinh/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/CSS/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
    
</head>
<body>
 <div class="container" id ="container">
    <div id="outer2">
        <div class="login-container">
            <h2>Đăng nhập</h2>
            <form method="post">
                
                <label for="username">Tên Tài Khoản:</label>
                <input type="username" id="username" name="username" required>
                <i class="fa-solid fa-user"></i>

                <label for="password">Nhập Mật Khẩu :</label>
                <input type="password" id="password" name="password" required>
                <i class="fa-solid fa-lock"></i>

            <div class="log">

                <button type="submit">Đăng nhập</button>
                <p>Bạn chưa có tài khoản ? <a href="register.php">Đăng kí tại đây!</a></p>
            </div>
           
            
        </form></br>
        </div>

    </div>
</div>
</body>
</html>