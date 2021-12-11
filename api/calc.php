<?php

session_start();
include(getenv('MYAPP_CONFIG'));

$x = $_REQUEST["x"];
$y = $_REQUEST["y"];
$a = $_REQUEST["a"];

if ($a == 1)
  $z = $x + $y;
else
  $z = $x - $y;


$conn = mysqli_connect($DB_URL, $DB_USER, $DB_PWD, $DB_NAME);
$username =  $_SESSION["user"];

$sql = "INSERT INTO log(Number1,Number2,Result,UserID ,Timestamp) VALUES (?, ?, ?,? ,now())";

$statement = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($statement, "ssss", $x, $y, $z, $username);

mysqli_stmt_execute($statement);

if ($conn->error)
  echo (mysqli_error($conn));
mysqli_close($conn);

echo ($z);
