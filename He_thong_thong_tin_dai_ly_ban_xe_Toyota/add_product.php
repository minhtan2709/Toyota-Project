<?php 
session_start();
include "connect.php";

?>
<?php 
if(isset($_POST["them"])){
    $productid = $_POST['productid'];
    $product_name = $_POST['product_name'];
    $detail = $_POST['detail'];
    $price = $_POST['price'];
    $image = $_POST['image'];


    if($productid != "" && $product_name != "" && $price != ""){
        $sql = "INSERT INTO product(productid,product_name,detail,price,image) VALUES('$productid','$product_name','$detail','$price','$image')";
        $query  =mysqli_query($con,$sql);
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <link rel="stylesheet" href="/CSS/form.css">
    <link rel="icon" href="/Hinh/logo.jpg" type="image/x-icon">
</head>
<body>
    <div class="container">

        <form method="POST" action="" >
            <h2>Thêm Sản Phẩm</h2>
        <label>ID</label><input type="text" name="productid"><br></br>
            <label>Tên sản phẩm</label><input type="text" name="product_name"><br></br>
            <label>Mô tả</label><input type="text" name="detail"><br></br>
            <label>Giá </label><input type="text" name="price"><br></br>
            <label>Ảnh</label><input type="text" name="image" ><br></br>
            <input type="submit" name="them" value="Thêm" style="width: 150px;cursor:pointer; ">
        </form>
    </div>
    
</body>
</html>
