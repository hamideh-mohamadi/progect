<?php require_once '../config.php';?>
<?php
 if(!isset($_SESSION['user-login'])){
    header("Location:./login.php");
 }
$email=$_SESSION['user-login'];
$getUsername=mysqli_query($db,"SELECT * FROM users WHERE email='$email'");
$username=mysqli_fetch_array($getUsername);
$orderId=$_GET['order-id'];
$getOrderDetal=mysqli_query($db,"SELECT * FROM orders WHERE id=$orderId");
$orderDetal=mysqli_fetch_array($getOrderDetal);
$productIds=$orderDetal['product_ids'];
$geIds=explode(',',$productIds,-1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>جزییات سفارش</title>
   <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
   <div id="div1">
      <h3>جزییات سفارش</h3>
      <hr>
      <div class="nav">
         <ul>
           <li><a href="../index.php">نمایش فروشگاه</a></li>
           <li><a href="orders.php">سفارشات</a></li>
           <li><a href="../do-logOut.php">خروج</a></li>
           <hr>
         </ul>
         
      </div>
      <div class="div2">
         <ul>
          <li>مجموع مبلغ سفارش<?php echo $orderDetal['total']?></li>   
          <li><?php 
          if($orderDetal['is_paid']==1){
          echo 'پرداخت شده';
        }else{
              echo'پرداخت نشده';
          } ?></li> 
         </ul>
         <hr>
         <h3>محصولات خریداری شده</h3>
         <ul>
           <?php
             foreach($geIds as $getId){
                 $getProduct=mysqli_query($db,"SELECT * FROM products WHERE id=$getId");
                 $fetch=mysqli_fetch_array($getProduct);
                 echo $fetch['product_name']."<br>";
             }
           ?>
         </ul>
      </div>
   </div>
</body>
</html>