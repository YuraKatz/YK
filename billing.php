<?php
    session_start();

    //Если жетона безопасности (т.е., в нашем случае, 
    //сессионной переменной c названием user) нет, "не пущаем"
    if (!isset($_SESSION["user"])) {
        echo('<meta http-equiv="refresh" content="2; URL=login.php">');
        die("Требуется логин!");
    }

?>




<style>
    input,
    button {
        width: 140px;
        margin: 5px;
        text-align: center;
    }

    button {
        width: 65px;
    }

    .pressed {
        background-color: pink;
    }
</style>

<html>
    <head>
        
        <!-- Это комментарий HTML -->
        <meta charset="utf-8" />
        <meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="main.css">

        <script>
            function getLog() {
                             
                var url = "api/get_log.php";
                var xhr = new XMLHttpRequest();
                xhr.open("GET",url,false);
                xhr.send();
                var text = xhr.responseText;
                var results = JSON.parse(text);
                 var out="";
                 for(var i=0;i<results.length;i++ )
                 {
                     var calc=results[i];
                      out=out+"X:"+calc[1] +"   Y:" + calc[2]+ "="+calc[3] + "           ["+calc[5]+ "]"+" <br>"  ;
                 }

                document.getElementById("display").innerHTML = out;
                document.getElementById("amount").innerHTML = results.length;
            }
          

        </script>
    </head>
    <body onload="getLog();">
    <a href="index.html">Index</a>
        <h1>Ваши вычисления</h1>
        <div id="display"></div>
       
        <h2 id = "amount"></h2>
    </body>
</html>