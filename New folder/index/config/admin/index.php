<?php require_once '../config.php';?>
<?php
if(!isset($_SESSION['admin-login'])){
  header("Location:logIn.php");  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>مدیریت فروشگاه</title>
   <link rel="stylesheet" href="../users/styles/styles.css">
</head>
<body>
   <div id="div1"style="width: 600px;">
      <h3>بخش مدیریت</h3>
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
   </div>
   

</body>
</html>

