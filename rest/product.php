<?php

//db 연결
//include './core/config.php';
//echo $_SERVER['REQUEST_URI'];
//exit;

$parts = explode('/', $_SERVER['REQUEST_URI']);

//echo $parts[3];

if ($parts[2] == 'products') {

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($parts[3]) && is_numeric($parts[3])) {
        $id = 2;
        include './read_one.php';
    } else {
        include './read_all.php';
    }
} else {
    echo 'Not found';
}

}else{
    $a = ["message" => "Not found"];
    echo json_encode($a);
}
