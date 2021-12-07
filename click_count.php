

<?php 

session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
  
 
</head>
<body>
    
    <h1>Click count</h1>

    <form    >
     
    <button id="btn1"  >Click here </button>
   </form>
    
<?php

if(isset($_SESSION["clicks"]))
$i= $_SESSION["clicks"];
$i+=1;
 $_SESSION["clicks"]=$i;
// if(isset($_COOKIE['clicks']) )
// {
//     $i=$_COOKIE['clicks'];
// }

echo("Click count: $i"  );
?>
 
</body>
</html> 