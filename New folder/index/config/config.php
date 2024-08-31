<?php
$db=mysqli_connect('localhost','hamideh','hamideh21','book-store');

if(!$db){
    echo mysqli_connect_error();
}

ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

mysqli_set_charset($db,"utf8");


define('ADMIN_USERNAME','admin');
define('ADMIN_PASSWORD','13579');
?>