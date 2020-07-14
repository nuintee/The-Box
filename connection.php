<?php

$dsn ="mysql:dbname=theboxdb;host=localhost";
$user = "root";
$password = "";

try{
  $conn = new PDO($dsn,$user,$password);
} catch (PDOException $e){
  echo "接続失敗:".$e -> getMessage();
  exit();
}
