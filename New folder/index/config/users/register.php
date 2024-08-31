<?php require_once '../config.php';?>
<?php
 if(isset($_SESSION['user-login'])){
    header("Location:./profile.php");
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>ثبت نام نام کاربر</title>
   <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
   <div id="main">
     <div id="register">
         <form action="register.php" method="post">
             <input type="text" name="display_name" placeholder="*نام"> <br>       
             <input type="email" name="email" placeholder="*ایمیل"><br>
             <textarea name="address" placeholder="آدرس محل زندگی به طور دقیق"></textarea><br>
             <input type="password" name="password" placeholder="*رمز عبور"><br>
             <input type="password" name="password-conf" placeholder="*تکرار رمز عبور"><br>
             <input type="submit" name="register" value="ثبت نام">
         </form>
     </div> 
   </div>
</body>
</html>
<?php
if(isset($_POST['register'])){
    $name=$_POST['display_name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $password=md5($_POST['password']);
    $passwordConf=md5($_POST['password-conf']);
if($password != $passwordConf){
    echo 'پسورد و تکرار آن با هم برابر نیستند';
}else{
    mysqli_query($db,"INSERT INTO users(display_name,email,address,password)VALUES('$name ','$email','$address','$password')"); 
    echo 'ثبت نام شما با موفقیت انجام شد';  
}
}
?>