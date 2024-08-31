<?php require_once '../config.php';?>
<?php
 if(!isset($_SESSION['user-login'])){
    header("Location:./login.php");
 }
$email=$_SESSION['user-login'];
$getUsername=mysqli_query($db,"SELECT * FROM users WHERE email='$email'");
$username=mysqli_fetch_array($getUsername);
$getOrders=mysqli_query($db,"SELECT * FROM orders WHERE  user_email='$email'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>سفارشات</title>
   <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
   <div id="div1">
      <h3>سفارشات</h3>
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
             <?php while($row=mysqli_fetch_array($getOrders)){?>
                <li><a href="order-detal.php?order-id=<?php echo $row['id']?>">
                 سفارش شماره:<?php echo $row['id']."<br>"?></a></li>
             <?php } ?>
         </ul>
      </div>
   </div>
   

</body>
</html>
