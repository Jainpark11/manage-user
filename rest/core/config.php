<?header('Content-type: text/html; charset=utf-8');?>
<?php
$servername = 'localhost';
$dbuser = 'jain423';
$dbpassword = 'dlwjdgus1!';
$dbname = 'jain423';

try {
    //$dsn = "mysql:host={$servername};dbname={$dbname}";
    // $db = new PDO($dsn, $dbuser, $dbpassword);
    $db = new PDO("mysql:host={$servername};dbname={$dbname}", $dbuser, $dbpassword);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo 'core db connect success!';
} catch (PDOException $e) {
    echo $e->getMessage();
}
