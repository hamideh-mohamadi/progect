<?php 
 require_once 'config.php';
 if(isset($_POST['add-comment'])){
     $username=$_POST['username'];
     $email=$_POST['email'];
     $commentText=$_POST['commentes'];
     $query=mysqli_query($db,"INSERT INTO commentes (username,user_email,comment_text) 
      VALUES ('$username','$email','$commentText')");
      if($query){
          echo 'نظر شما با موفقیت ثبت شد و بعد از تایید مدیریت در صفحه محصول نمایش داده خواهدشد';
      }else{
          echo  'خطایی در ثبت نظر رخ داده است';
      }
 }


?>