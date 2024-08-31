<?php
require_once '../config.php';

if(isset($_POST['edit-product'])){
    $productId=$_POST['product-id'];
    $productName = $_POST['product-name'];
    $productPrice= $_POST['product-price'];
    $productDesc = $_POST['product-desc'];
    $productImage= $_POST['image-name'];
    $catId=$_POST['cat-id'];
    $editProduct=mysqli_query($db,"UPDATE products SET cat_id='$catId',
    product_name='$productName', product_price='$productPrice',
    product_desc='$productDesc', product_image='$productImage' WHERE id='$productId'");
}
if($editProduct){
    header("Location:product.php");
}
?>