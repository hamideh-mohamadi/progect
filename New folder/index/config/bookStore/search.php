<?php
require_once '../config.php';

if(isset($_GET["submit"])){
  $search=$_GET['search'];
  $query=mysqli_query($db,"SELECT * FROM products WHERE product_name LIKE '%$search%' OR 
    product_desc LIKE '%$search%'");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../users/styles/stylesss.css">
    <title>Search</title>
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
            <a  href="teitter">
                  <img src="../images/5294 - Twitter I.png" alt="Twitter"
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
<?php while($row=mysqli_fetch_array($query)) { ?>
                <div class="search">
                    <img   src="../images/<?php echo $row['product_image']?>" alt="nazarieh" width="170px">
                    <p><b><?php echo $row['product_name']?></b></p>
                    <p><?php echo $row['product_desc']?></p>
                   <p><?php echo $row['product_price']?></p>
                   <p><a class="a1" href="../add-to-cart.php">افزودن به سبدخرید</a></p>
                  </div>
             <?php } ?>                
</body>
</html>