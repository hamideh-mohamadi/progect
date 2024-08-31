<?php require_once 'config.php';?>
<?php 
$query = mysqli_query($db,"SELECT * FROM products  WHERE sell_num > '10'   ORDER BY sell_num DESC LIMIT 5");
$commentes=mysqli_query($db,"SELECT * FROM commentes WHERE is_confirm='1' ORDER BY id DESC");
$discount=mysqli_query($db,"SELECT * FROM products WHERE product_discount='1' ");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport"
        content="width=device-width , initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./users/styles/STYLE.css">
        <title>فروشگاه اینترنتی کتاب </title>
        <script  src="./images/jquery-3.6.0.min.js"></script>
      </head>
      <body>
        <header>
          <div id="div1">
              <p id="p1">
                <img src="./images/incoming-call-symbol.png" alt="phone"
                width="20px" height="25px" >
                <strong>0917---8247</strong> <b>:فروشگاه اینترنتی یاس</b> 
              <a  href="instagram">
                    <img src="./images/5301 - Instagram.png " alt="instagram"
                    width="30px" height="30px" style="float: left;padding: 3px 15px;"></a>
              <a  href="Twitter">
                    <img src="./images/5294 - Twitter I.png " alt="Twitter"
                    width="30px" height="30px" style="float: left;padding: 3px;"></a>         
              </p>
          </div>
        </header>
        <nav>
          <div id="div2">
            <img src="./images/book.jpg" alt="book" style="float: right;padding: 20px 10px;"
             width="100px" height="60px">

             <ul id="ul">
              <li id="li1">
              <a id="a0" href="index.php">
             خانه</a></li>
              <li id="li1">
              <a id="a0" href="./bookStore/universityBoks.php">
              کتب دانشگاهی</a></li>
              <li id="li1">
              <a id="a0" href="./bookStore/psychologyBooks.php">
              کتب روانشناسی</a></li>
              <li id="li1">
              <a id="a0" href="./bookStore/generalBooks.php">
              کتب عمومی</a></li>
              <li id="li1">
              <a id="a0" href="./users/profile.php">
              حساب کاربری</a></li>
              <li id="li1">
              <a id="a0" href="./users/register.php">
              ثبت نام</a></li>

              </ul>
              <a href="./bookStore/cart.php">
              <img src="./images/shopping-cart-7.png" alt="shopping" width="30px" height="30px" 
              style="float: left;padding: 3px 30px;">
              </a>
          </div>
          <div id="div3">
        <form id="form1" action="./bookStore/search.php" method="get">
              <input type="submit" name="submit" value="جستجو" style="height: 30px; width: 50px;text-align: center" >
                <input type="text" name="search" placeholder="جستجو در اینجا" size="50"
                style="text-align: center;height: 27px;width: 300px;"> 
              </form>         
            <img src="./images/ezgif.com-gif-maker.gif" alt="gif" width="90%" height="400px" 
              style="padding-right: 65px;margin-top:20px;">   
          </div>
        </nav>

          <section class="scrollSlider">
            <section class="headerScroll">
              <section class="right"><h2>تخفیف های ویژه</h2></section>
            </section>
            <section class="contentScroll">
              <section class="nextScroll disable">
                <img src="./images/next-icon.png" alt="next-icon">
              </section>
              <section class="main">
               <div class="div4">
                <?php while($row=mysqli_fetch_array($discount)){ ?>   
                 <div class="demo-1 effect">
                  
                   <p id="p-1"><?php echo $row['product_name']?></p>
                   <p><?php echo $row['product_desc']?></p>
                   <p><del>ريال<?php echo $row['product_price']?></del></p>
                   <p>ريال<?php echo $row['product_price']*0.5;?></p>
                   <img class="top" src="./images/<?php echo $row['product_image']?>" alt="arameshZehn" width="210px">
                   <p>
                    <a class="a1" href="add-to-cart-dis.php?id=<?php echo $row['id']?>">افزودن به سبد خرید</a></p>  
                 </div>
                <?php } ?>
               </div>

              </section>
              <section class="prevScroll">
                <img src="./images/next-icon.png" alt="next-icon">
              </section>
            </section>
          </section>
          
      <article>  
        <div id="div5">
          <h2 class="h2">پر فروش ترین ها</h2> 
          <br>   
          <?php while($roow=mysqli_fetch_array($query)){ ?>   
          <div class="demo-1 effect">  
          
            <p id="p-1"><?php echo $roow['product_name']?></p>
            <p><?php echo $roow['product_desc']?></p>
            <p>ريال<?php echo $roow['product_price']?></p>
            <img class="top" src="./images/<?php echo $roow['product_image']?>" alt="arameshZehn" width="210px">
            <p><a class="a1" href="add-to-cart.php?id=<?php echo $roow['id']?>">افزودن به سبد خرید</a></p>
          </div>
          
          <?php } ?>
        </div>
      </article>

      <action>
        <br>
        <div class="comment">
        <?php while($roww=mysqli_fetch_array($commentes)){ ?>
         <div class="commentes-item">
            <div class="username"><?php echo $roww['username']; ?></div>
            <div class="coment"><?php echo $roww['comment_text']; ?></div>
            <hr>
         </div>
         <?php } ?>
         <hr> 
         <form action="../add-comment.php" method="post">
             <input type="text" name="username" placeholder="*نام"> <br>       
             <input type="text" name="email" placeholder="*ایمیل"><br>
             <textarea name="commentes" placeholder="نظرات خود را وارد کنید"></textarea><br> 
             <input type="submit" name="add-comment" value="افزودن نظر">
         </form>
        </div>
      </action>
      <footer>
        <br>
        <div id="footer">
         <p id="p0">
           <a id="a2" href="#قونین و مقررات">قوانین و مقرارت</a>
           <a id="a2" href="#ارتباط با ما">ارتباط با ما</a>
           <a id="a2" href="#درباره ما">درباره ما</a>
            <a  href="RSS">
             <img src="./images/5304 - RSS.png" alt="RSS"
             width="30px" height="30px" style="float: left;padding-left: 30px;"></a>
            <a  href="LinkedIn">
             <img src="./images/5296 - LinkedIn.png" alt="LinkedIn"
             width="30px" height="30px" style="float: left;padding-left: 20px;">
            </a>
         </p>   
        </div>
      </footer>
      

      
      <script>
        var scrollSliderDiv= $( '.scrollSlider .contentScroll .main').find('.div4');
        function scroll(direct){
          var rangeDiv=parseFloat(scrollSliderDiv.css('right'));
          if(direct=='prev'){


              rangeDiv -=1200;
              $('.nextScroll').removeClass('disable');
          }

          if(direct=='next'){
              if(rangeDiv!=0){
                rangeDiv+=1200;
              }
              else{
                $('.nextScroll').addClass('disable');
              }

          }
          scrollSliderDiv.animate({right:rangeDiv},1000,'swing');
        }
        $(".prevScroll").click(function(){
          scroll('prev');
        })
        $(".nextScroll").click(function(){
          scroll('next');
        })

      </script>
      </body>
</html>