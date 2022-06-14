<?php
$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_name="discord";

$pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$sql = "SELECT * FROM user";
$res = $pdo->query($sql);
$users = $res->fetchAll();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
echo json_encode($users); 
