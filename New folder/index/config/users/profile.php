<?php require_once '../config.php';?>
<?php
 if(!isset($_SESSION['user-login'])){
    header("Location:./login.php");
 }
$email=$_SESSION['user-login'];
$getUsername=mysqli_query($db,"SELECT * FROM users WHERE email='$email'");
$username=mysqli_fetch_array($getUsername);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>پروفایل کاربر</title>
   <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
   <div id="div1">
      <h3>پروفایل کاربر</h3>
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
           <li>مشخصات شما</li>
           <li>نام:<?php echo $username['display_name'];?></li>
           <li> ایمیل شما:<?php echo $username['email'];?></li>
           <li>آدرس:<?php echo $username['address'];?></li>
         </ul>
      </div>
   </div>
</body>
</html>

