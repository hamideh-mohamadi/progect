<?php
require_once 'config.php';
$product_id=$_GET['id'];
$user_ip= $_SERVER['REMOTE_ADDR'];
$add_to_cart=mysqli_query($db,"INSERT INTO cart (user_ip,product_id) VALUES ('$user_ip','$product_id')");
if(isset($add_to_cart)){
    header("Location: ./bookStore/cart-dis.php");
}else{
    echo  "مشکلی پیش آمده است";
}
?>