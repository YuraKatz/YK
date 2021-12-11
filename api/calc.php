<?php
  //  include("./include/params.php");
 
  include(  getenv('MYAPP_CONFIG'));


  $pwd = $_REQUEST["pwd"];
$x =$_REQUEST["x"];
$y =$_REQUEST["y"];
$a =$_REQUEST["a"];


if($a==1)
$z =$x+$y;
else
$z =$x-$y;






// Create connection
 

 $conn = mysqli_connect($DB_URL, $DB_USER, $DB_PWD,$DB_NAME);
//$conn = mysqli_connect($DB_URL, $DB_USER, $DB_PWD,$DB_NAME);
 
 $sql ="INSERT INTO log(Number1,Number2,Result,UserID,Timestamp) VALUES($x,$y,$z,'anonym',now())";

 mysqli_query($conn ,$sql);
 if($conn->error)
 echo(mysqli_error($conn));
 mysqli_close($conn);


 










echo($z);


