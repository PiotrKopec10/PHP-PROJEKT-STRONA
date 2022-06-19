<?php
//Require MySql Connection
require('database/DBController.php');

//Require Product Class
require('database/Product.php');

//Require Cart Class
require('database/Cart.php');

//DBController objekt
$db=new DBController();

//Product Object

$product=new Product($db);

$product_shuffle=$product->getData();

//Cart Object

$Cart=new Cart($db);

$Cart->getCartId($product->getData('cart'));


$login=mysqli_connect('localhost','root','','kopshoes');


?>
