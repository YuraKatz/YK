<?php
session_start();


if(!isset($_SESSION["user"]) )
{
    echo('<meta http-equiv="refresh" content="2; URL = ../login.php">');
die("Login required");
}

$user = $_SESSION["user"];
include(getenv('MYAPP_CONFIG'));
 
 
 
 //  include(getenv('MYAPP_CONFIG'));
  // $pwd = $_REQUEST["pwd"];
 //  $user  =  $_REQUEST["user"];

   //$hashed_pwd = hash('sha256', $pwd);
   // Create connection
   $conn = mysqli_connect($DB_URL, $DB_USER, $DB_PWD, $DB_NAME);
   // Check connection
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }
   //	SELECT * FROM users WHERE UserName='1' or 1=1 -- -' and PwdHash='blah'
   //$user='UserID';
    $sql = "SELECT ID,Number1,Number2,Result,UserID,Timestamp FROM log WHERE UserID = '$user' ";
   //$sql = "SELECT ID,Number1,Number2,Result,UserID FROM log WHERE UserID =  $user  ";
 
   $statement = mysqli_prepare($conn, $sql);
  // mysqli_stmt_bind_param($statement, "ss", $user, $hashed_pwd);
   mysqli_stmt_execute($statement);


   $cursor = mysqli_stmt_get_result($statement);

   $result = mysqli_fetch_all($cursor); //mysqli_stmt_get_result($statement);

   // if (count($result) > 0) {
   //    // output data of each row
   //    echo ("<h2>hello, $user!</h2>");
   //    $_SESSION["user"] = $user;
   //    echo ('<meta http-equiv="refresh" content="2; URL = calc.php">');
   // } else {
   //    echo ("<h1>The username or password is incorrect!</h1>");
   //    echo ('<meta http-equiv="refresh" content="2; URL=login.php">');
   // }
   mysqli_close($conn);
json_encode( $result);
echo(json_encode( $result));

 

 