<?php

$dsn = 'mysql:dbname=lesson01;host=localhost';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "mysql");

$pdo -> exec("insert into 4each_keijiban(handlename, title, comments)
values('".$_POST['handlename']."', '".$_POST['title']."', '".$_POST['comments']."' ); ");

header("Location:http://localhost/4each_keijiban/index.php");

?>