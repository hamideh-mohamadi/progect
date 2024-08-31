<?php
session_start();
if(isset($_SESSION['user-login'])){
    unset($_SESSION['user-login']);
    header("Location: ../config/users/login.php");
}
?>