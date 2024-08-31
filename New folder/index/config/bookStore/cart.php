<?php require_once '../config.php';
$query=mysqli_query($db,"SELECT * FROM products ORDER BY id DESC LIMIT 4");
$user_ip = $_SERVER['REMOTE_ADDR'];
$get_cart_items=mysqli_query($db,"SELECT * FROM cart WHERE user_ip='$user_ip'");
$cart_items=mysqli_query($db,"SELECT * FROM cart WHERE user_ip='$user_ip'");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport"
        content="width=device-width , initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../users/styles/stylesss.css">
        <title>سبد خرید</title>
        <script  src="../images/jquery-3.6.0.min.js"></script>
      </head>
      <body>
        <header>
          <div id="div1">
              <p id="p1">
                <img src="../images/incoming-call-symbol.png" alt="phone"
                width="20px" height="25px" >
                <strong>0917---8247</strong> <b>:فروشگاه اینترنتی یاس</b> 
              <a  href="instagram">
                    <img src="../images/5301 - Instagram.png " alt="instagram"
                    width="30px" height="30px" style="float: left;padding: 3px 15px;"></a>
              <a  href="Twitter">
                    <img src="../images/5294 - Twitter I.png " alt="Twitter"
                    width="30px" height="30px" style="float: left;padding: 3px;"></a>         
              </p>
          </div>
        </header>
        <nav>
          <div id="div2">
            <img src="../images/book.jpg" alt="book" style="float: right;padding: 20px 10px;"
             width="100px" height="60px">

             <ul id="ul">
              <li id="li1">
              <a id="a0" href="../index.php">
             خانه</a></li>
              <li id="li1">
              <a id="a0" href="universityBoks.php">
              کتب دانشگاهی</a></li>
              <li id="li1">
              <a id="a0" href="psychologyBooks.php">
              کتب روانشناسی</a></li>
              <li id="li1">
              <a id="a0" href="generalBooks.php">
              کتب عمومی</a></li>
              <li id="li1">
              <a id="a0" href="../users/profile.php">
              حساب کاربری</a></li>
              <li id="li1">
              <a id="a0" href="../users/register.php">
              ثبت نام</a></li>

              </ul>
              <a href="cart.php">
              <img src="../images/shopping-cart-7.png" alt="shopping" width="30px" height="30px" 
              style="float: left;padding: 3px 30px;">
              </a>
          </div>
        </nav>
        <div class="div5">
           <div class="content">
           <?php if(mysqli_num_rows($get_cart_items)==0){
             echo 'سبد خرید شما خالی است';
           }
           ?>
           <ul id="ul">
            <?php while($row=mysqli_fetch_array($get_cart_items)){
              $id=$row['product_id'];
              $get_product_name=mysqli_query($db,"SELECT * FROM products WHERE id=$id");
              $product_name=mysqli_fetch_array($get_product_name);?> 
             <li><?php echo $product_name['product_name']?></li>
              <li><?php echo $product_name['product_desc']?></li>
              <li>ريال<?php echo $product_name['product_price']?></li>
              <p style="text-align: center;">
              <a href="../delete-from-cart.php?product-id=<?php echo $product_name['id']?>" id="a3"> حذف</a></p>
              <hr>
              <?php } ?>
              <form action="../pay.php" method="post">
               <input type="hidden" 
               value="<?php while($row=mysqli_fetch_array($cart_items)){ echo $row['product_id'].",";}?>"
               name="product-ids">
               <p style="text-align: center;color:red;">پرداخت در محل انجام می شود</p>
               <input type="submit" value="ثبت سفارش">
           </form> 
           </ul>
          </div>
        </div>
      
      </body>
</html>