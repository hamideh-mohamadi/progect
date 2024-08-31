<?php
 require_once '../config.php';
 $id=$_GET['id'];
 $query=mysqli_query($db,"UPDATE commentes SET is_confirm='1' WHERE id='$id'");
 if($query){
     header("Location:commentes.php");
 }else{
     echo 'خطایی رخ داده است';
 }
 ?>