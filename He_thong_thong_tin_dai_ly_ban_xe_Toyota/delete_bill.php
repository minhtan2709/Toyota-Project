<?php
session_start();

include "connect.php";
?>

<?php 
    if(isset($_GET["id"])){
        $id =$_GET["id"];
    }

?>
<?php 
    $sql ="DELETE FROM bill WHERE id = $id";
    $query = mysqli_query($con,$sql);
    // chuyển hướng đến trang bill_cart.php
    header("Location: bill.php");
    exit();
    
    
?>