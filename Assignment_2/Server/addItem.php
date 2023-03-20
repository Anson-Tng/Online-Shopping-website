<?php
session_start();
ini_set('display_errors',1);  
error_reporting(E_ALL);
require 'config.php';
require 'product.class.php';
require 'cart.class.php';


if(isset($_SESSION['cart'])){
    $newCart = new cart();
    $newCart = unserialize($_SESSION['cart']);
    
}else{
    $newCart = new cart();
    $_SESSION['cart'] = serialize($newCart);
}

if(isset($_POST['add_btn'])){
    $pName = $_POST['checkout_name'];
    $pPrice = $_POST['checkout_price'];
    $amount = $_POST['amount'];
    $_SESSION['test'] = $pName;
    $product = new product($pName,$pPrice,$amount);
    $newCart->addItem($product);
    $_SESSION['cart'] = serialize($newCart);
    header("Location: ../WebClient/menu.php");
}else{
}










?>