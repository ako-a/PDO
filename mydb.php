<?php

$dsn = 'maaasql:dbname=mydb;host=localhost';
$user = 'root';
$password = 'root';
//※XAMPPを使用している場合は、passwordの中身は空にしてください.

try {
$dbh = new PDO($dsn, $user, $password);
echo("接続に成功しました。<br>");
} catch (PDOException $e) {
echo('Error:'.$e->getMessage());
}

$dbh = null;

$dbh = new PDO($dsn, $user, $password);


