<?php require_once '../config.php';?>
<?php
if(!isset($_SESSION['admin-login'])){
  header("Location:logIn.php");  
}
$query=mysqli_query($db,"SELECT * FROM products ");
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>لیست محصولات</title>
   <link rel="stylesheet" href="../users/styles/styles.css">
</head>
<body>
   <div id="div1"style="width: 600px;">
      <h3>لیست محصولات</h3>
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
          <table class="styled-table">
            <thead>
             <tr>
                <th>نام محصول</th>
                <th>قیمت محصول</th>
                <th>ویرایش/حذف</th>
             </tr>
            </thead>

            <?php while($row=mysqli_fetch_array($query)){ ?>
            <tbody> 
             <tr>
                 <td><?php echo $row['product_name'] ?></td>
                 <td><?php echo $row['product_price'] ?></td>
                 <td><a href="edit-product.php?id=<?php echo $row['id']?>">ویرایش</a> -
                  <a href="delete-product.php?id= <?php echo $row['id']?>">حذف</a></td>
             </tr>
            </tbody> 
           <?php } ?>
         </table>
      </div>
   </div>
</body>
</html>