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
    $sql ="DELETE FROM product WHERE id = $id";
    $query = mysqli_query($con,$sql);
  
    header("Location: car.php");
    exit();
    
    
?>
