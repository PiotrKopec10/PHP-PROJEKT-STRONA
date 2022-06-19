<?php
//
////Require MySql Connection
//require('../database/DBController.php');
//
////Require Product Class
//require('../database/Product.php');
//
////DBController objekt
//$db=new DBController();
//
////Product Object
//
//$product=new Product($db);
//
//$product_shuffle=$product->getData();
//
//if (isset($_POST['itemid'])){
//
//    $result=$product->getProduct($_POST['itemid']);
//
//    echo json_encode($result);
//
//}


// require MySQL Connection
require('../database/DBController.php');

// require Product Class
require('../database/Product.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);

if (isset($_POST['itemid'])) {
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}