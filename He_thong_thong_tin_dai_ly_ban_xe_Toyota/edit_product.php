<?php 
session_start();
include "connect.php";

?>
<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

}
if(isset($id)) {
    $sql = "SELECT * FROM product WHERE id = $id";
    $query = mysqli_query($con, $sql);
    $rows = mysqli_fetch_array($query);
}

?>
<?php 
if(isset($_POST["sua"])){
    $productid = $_POST['productid'];
    $product_name = $_POST['product_name'];
    $detail = $_POST['detail'];
    $price = $_POST['price'];
    $image = $_POST['image'];


    if($productid != "" && $product_name != "" && $price != ""){
        $sql = "UPDATE  product SET productid ='$productid', product_name = '$product_name',detail = '$detail',price = '$price',image='$image' WHERE id =$id";
        $query  =mysqli_query($con,$sql);
        header("Location: index.php");
    }
}
?>

<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Sản Phẩm</title>
    <link rel="stylesheet" href="/CSS/form.css">
    <link rel="icon" href="/Hinh/logo.jpg" type="image/x-icon">
</head>
<body>
    <div class="container">

        <form method="POST" action="" >
            <h2>Sửa Sản Phẩm</h2>
        <label>ID</label><input type="text" name="productid" value="<?php echo isset($rows['productid']) ? $rows['productid'] : ''; ?>" ><br></br>
            <label>Tên sản phẩm</label><input type="text" name="product_name" value="<?php echo isset($rows['product_name']) ? $rows['product_name'] : ''; ?>"><br></br>
            <label>Mô tả</label><input type="text" name="detail"value="<?php echo isset($rows['detail']) ? $rows['detail'] : ''; ?>"><br></br>
            <label>Giá </label><input type="text" name="price"value="<?php echo isset($rows['price']) ? $rows['price'] : ''; ?>"><br></br>
            <label>Ảnh</label><input type="text" name="image" value="<?php echo isset($rows['image']) ? $rows['image'] : ''; ?>"><br></br>
            <input type="submit" name="sua" value="Sửa" style="width: 150px;cursor:pointer; ">
        </form>
    </div>
    
</body>
</html>
