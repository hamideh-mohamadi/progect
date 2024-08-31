<?php
require_once '../config.php';
$productId = $_GET['id'];
$query = mysqli_query($db,"DELETE FROM products WHERE id=$productId");
if($query){
    header("Location: ./product.php");
}else{
    echo 'مشکلی در هنگام حذف محصول پیش آمده است';
}

?>