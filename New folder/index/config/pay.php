<?php
require_once 'config.php'; 
$userEmail=$_SESSION['user-login'];
$productIds=$_POST['product-ids'];
$total=0;
$ids=explode(',',$productIds,-1);
foreach($ids as $id){
    $sql=mysqli_query($db,"SELECT * FROM products WHERE id='$id'");
    $fetch=mysqli_fetch_array($sql);
    $getPrice=$fetch['product_price'];
    $total+=$getPrice;
}

$addOrder=mysqli_query($db,"INSERT INTO orders (total,product_ids,user_email,is_paid)VALUES
  ($total,'$productIds','$userEmail','1')");
if($addOrder){
    header("Location: ./bookStore/success.php");
}
?>