<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

require './core/config.php'; //db
require './core/product.php'; //class

//인스턴스 생성
$product = new Product($db);

$data = json_decode(file_get_contents("php://input")); //데이터 받을때의 방법

$product->name = $data->name;
$product->price = $data->price;
$product->stock = $data->stock;

if($product->create()){
    $a = ["message" =>"Product created"];
    echo json_encode($a);
}else {
    $a = ["message" =>"Product not created"];
    echo json_encode($a);
}