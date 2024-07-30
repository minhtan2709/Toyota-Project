<?php
function check_login($con){
    if(isset($_SESSION['userid'])){
        $id = $_SESSION['userid'];
        $query = "SELECT * FROM sign_up WHERE userid = '$id' LIMIT 1";
        if (!empty($query)) {
            $result = $con->query($query);
            // Tiếp tục xử lý kết quả truy vấn
        } else {
            echo "Query is empty!";
        }

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result)>0){
            $userdata = mysqli_fetch_assoc($result);
            return $userdata;
        }
    }
    // redirect to login
    header("Location: login.php");
    die;
}

function random_num($length){
    $text = "";
    if($length <5){
        $length = 5;
    }
    $len = rand(4,$length);

    for($i =0; $i<$len;$i++){
        $text.= rand(0,9);
    }
    return $text;
}
?>