<?php require_once '../config.php';?>
<?php
if(!isset($_SESSION['admin-login'])){
  header("Location:logIn.php");  
  header("Condtent-Type: text/html; charset=utf-8");
}
$id = $_GET['id'];
$query = mysqli_query($db,"SELECT * FROM products WHERE id=$id");
$productInfo = mysqli_fetch_array($query);
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
          <form action="do-edit.php" method="post">
             <input type="text" name="product-name" value= "<?php echo $productInfo['product_name'] ?>"   placeholder="نام محصول"><br>
             <input type="text" name="product-price" value="<?php echo $productInfo['product_price'] ?>" placeholder="قیمت محصول"><br>
             <textarea name="product-desc"  placeholder="توضیحات محصول"><?php echo $productInfo['product_desc'] ?></textarea><br>
             <input type="text" name="image-name" value= "<?php echo $productInfo['product_image'] ?>" placeholder="نام عکس محصول"><br>
             <input type="hidden" name="product-id" value="<?php echo $productInfo['id'] ?>">
             <input type="number" name="cat-id" value="<?php echo $productInfo['cat_id']?>" placeholder="دسته محصول"><br>
             <input type="submit" name="edit-product" value="به روز رسانی محصول">
          </form>
        </div>  
      </div>

   </div>
   

</body>
</html>






