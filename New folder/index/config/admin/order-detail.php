<?php require_once '../config.php';?>
<?php
if(!isset($_SESSION['admin-login'])){
  header("Location:logIn.php");  
}


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
   <title>مشخصات سفارش</title>
   <link rel="stylesheet" href="../users/styles/styles.css">
</head>
<body>
   <div id="div1"style="width: 600px;">
      <h3>مشخصات سفارش</h3>
      <hr>
      <div class="nav">
         <ul>
           <li><a href="../index.php">نمایش فروشگاه</a></li>
           <li><a href="product.php">لیست محصولات</a></li>
           <li><a href="./add-product.php">افزودن محصول</a></li>
           <li><a href="users.php">لیست کاربران</a></li>
           <li><a href="commentes.php">نظرات</a></li>
           <li><a href="orders.php">سفارشات</a></li>
           <li><a href="do-logout.php">خروج ازبخش مدیریت</a></li>
         </ul>
      </div>
      <hr>
      <div class="div2">

      </div> 
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
   

</body>
</html>

