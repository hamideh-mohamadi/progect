<?php require_once '../config.php';?>
<?php
if(!isset($_SESSION['admin-login'])){
  header("Location:logIn.php");  
}
$commentes=mysqli_query($db,"SELECT * FROM commentes WHERE is_confirm='0' ORDER BY id DESC");

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>نظرات کاربران</title>
   <link rel="stylesheet" href="../users/styles/styles.css">
</head>
<body>
   <div id="div1"style="width: 600px;">
      <h3>نظرات کاربران</h3>
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
                <th>نام کاربری</th>
                <th>نظر</th>
                <th>تایید/حدف نظرات</th>
             </tr>
            </thead>
            <?php while($row=mysqli_fetch_array($commentes)){ ?>

            <tbody> 
             <tr>
                 <td><?php echo $row['username'] .'<br>'.$row['user_email'] ?></td>
                 <td><?php echo $row['comment_text'] ?></td>
                 <td><a style="background-color:rgb(0,200,0)" href="confirm-comment.php?id=<?php echo $row['id']?>">تایید</a>  
                 <a style="background-color:red" href="delete-comment.php?id=<?php echo $row['id']?>">حذف</a></td>
             </tr>
            </tbody> 
           <?php } ?>
         </table>
      </div> 
   </div>
   

</body>
</html>

