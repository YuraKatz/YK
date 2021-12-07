<?php 
   session_start();
   ?>
<html>
   <head>
      <meta charset='utf-8'>
      <link rel="stylesheet" type="text/css" href="main.css">
      <title>
      </title>
   </head>
   <body>
      <?php
         $pwd = $_REQUEST["Password"];
         $user  =  $_REQUEST["UserName"];
         
         $hashed_pwd = hash('sha256',$pwd);
         
         // Create connection
         $conn = mysqli_connect("localhost", "root", "","calc");
         // Check connection
         if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
         }
         
         $sql = "SELECT ID,UserName FROM users where UserName= '$user'  AND  PwdHash ='$hashed_pwd'";
         $result = mysqli_query($conn, $sql);
         
         if (mysqli_num_rows($result) > 0) {
         // output data of each row
         echo ("<h2>hello, $user!</h2>"); 
         $_SESSION["user"]=$user;
         echo('<meta http-equiv="refresh" content="2; URL = index.html">');
         } else {



         echo ("<h1>The username or password is incorrect!</h1>");
       //  echo('<meta http-equiv="refresh" content="2; URL=login.php">');




         }
         
         mysqli_close($conn);
         ?>
   </body>
</html>