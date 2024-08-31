<?php require_once '../config.php';?>
<?php
if(!isset($_SESSION['admin-login'])){
  header("Location:logIn.php");  
}
$getOrders=mysqli_query($db,"SELECT * FROM orders");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>سفارشات</title>
   <link rel="stylesheet" href="../users/styles/styles.css">
</head>
<body>
   <div id="div1"style="width: 600px;">
      <h3>سفارشات</h3>
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
        <ul>
           <ul>
             <?php while($row=mysqli_fetch_array($getOrders)){?>
             <li><a href="order-detail.php?order-id=<?php echo $row['id']?>">
             سفارش شماره<?php echo $row['id']?></a></li>
             <?php } ?>
           </ul>
      
        </ul>
           
         
      </div> 
   </div>
   

</body>
</html>

