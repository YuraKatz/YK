

<?php

session_start();

if(!isset($_SESSION["user"]) )
{
    echo('<meta http-equiv="refresh" content="2; URL = login.php">');
die("Login required");
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" type="text/css" href="main.css">
        <title>Calculator</title>
    </head>
    
  
  

    <style>
    input ,button  {
        width: 140px;
        margin: 5px;
        text-align: center;
    }
    button{
        width: 65px;
    }
    .pressed{
        background-color:  pink;
    }
    </style>


    <script >
                function metod(val)
                {//$sql = "INSERT INTO `log` (`ID`, `Number1`, `Number2`, `Result`, `UserID`, `Timestamp`) VALUES (NULL, \'1\', \'2\', \'3\', \'Yuri\', \'2021-11-10 20:18:36\'), (NULL, \'2\', \'2\', \'4\', \'Vasya\', \'2021-11-25 19:18:36.000000\');";
                
                var x = document.getElementById("x").value|0;
                var y = document.getElementById("y").value|0;
                var url="api/calc.php?x="+x+"&y="+y+"&a="+val;
                var xhr =new XMLHttpRequest();
                    
                xhr.open("GET",url,false);
                xhr.send();
                
                var z=xhr.responseText;
                    document.getElementById("z").value=z;
                    
                    $('tr .pressed').className="";

                    if(val==1)
                        {   

                        document.getElementById("butn1").className="pressed";
                        document.getElementById("butn2").className="";
                        
                        }
                    else
                    {
                        
                        document.getElementById("butn2").className="pressed";
                        document.getElementById("butn1").className="";
                    }
                }

    </script>
    
<body>





    <h1>Calculator</h1>
    <div style="text-align: center;">
    <input id="x"/><br/>
    <input id="y"/><br/>
    <button id="butn1" class='btn' onclick="metod(1);">+</button>
    <button id="butn2" class='btn' onclick="metod(0);">-</button><br/>
    <input id="z" />

    </div>

    
</body>
</html>