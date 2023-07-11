<?php

//db 연결
//include './core/config.php';
//echo $_SERVER['REQUEST_URI'];
//exit;

$parts = explode('/', $_SERVER['REQUEST_URI']);



if ($parts[2] == 'products') {

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (is_numeric($parts[3])) {
            $id = $part[3];
            include './read_one.php';
        } else {
            include './read_all.php';
        }
    } else {
        include './create.php';
    }
} else {
    $a = ["message" => "Not found"];
    echo json_encode($a);
}
