<?php require_once'../config.php';?>
<?php
if(!isset($_SESSION['admin-login'])){
  header("Location:logIn.php");  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>افزودن محصول</title>
   <link rel="stylesheet" href="../users/styles/styles.css">
</head>
<body>
   <div id="div1"style="width: 600px;">
      <h3>افزودن محصول</h3>
      <hr>
      <div class="nav">
         <ul>
           <li><a href="../index.php">نمایش فروشگاه</a></li>
           <li><a href="product.php">لیست محصولات</a></li>
           <li><a href="add-product.php">افزودن محصول</a></li>
           <li><a href="users.php">لیست کاربران</a></li>
           <li><a href="commentes.php">نظرات</a></li>
           <li><a href="orders.php">سفارشات</a></li>
           <li><a href="do-logout.php">خروج ازبخش مدیریت</a></li>
         </ul>  
      </div>
      <hr>
      <div class="div2">
        <div class="add-product">
          <form action="add-product.php" method="post">
             <input type="text" name="product-name" placeholder="نام محصول"><br>
             <input type="text" name="product-price" placeholder="قیمت محصول"><br>
             <textarea name="product-desc" placeholder="توضیحات محصول"></textarea><br>
             <input type="text" name="image-name" placeholder="نام عکس محصول"><br>
             <input type="number" name="cat-id" placeholder="دسته محصول"><br>
             <input type="submit" name="add-product" value="افزودن محصول">
          </form>
        </div>  
      </div>

   </div>
</body>
</html>

<?php
if(isset($_POST['add-product'])){
    $productName= $_POST['product-name'];
    $productPrice=$_POST['product-price'];
    $productDesc= $_POST['product-desc'];
    $imageName =   $_POST['image-name'];
    $catId=$_POST['cat-id'];
    $addProduct=mysqli_query($db,"INSERT INTO products (cat_id,product_name,product_price,product_desc,product_image) 
      VALUES('$catId','$productName','$productPrice','$productDesc',' $imageName')");
     if($addProduct){
         echo 'محصول با موفقیت افزوده شد';
     }
     
    }
?>




