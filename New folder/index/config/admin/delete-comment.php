<?php 
require_once '../config.php';
$id=$_GET['id'];
$query=mysqli_query($db,"DELETE FROM commentes WHERE id ='$id'");
if($query){
    header("Location:commentes.php");
}else{
    echo 'خطایی هنگام حذف رخ داده است';
}
?>