<!DOCTYPE html>
<html>

<head>
   <meta charset='utf-8'>
   <link rel="stylesheet" type="text/css" href="main.css">
   <title>Registration</title>
</head>
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
</style>
<script>
   function metod() {

      var paragraph = document.getElementById("resultstate");

      var name = document.getElementById("username").value;
      var pwd = document.getElementById("password").value;
      var url = "api/adduser.php?UserName=" + name + "&PwdHash=" + pwd;
      var xhr = new XMLHttpRequest();

      xhr.open("GET", url, false);
      xhr.send();
      var result = JSON.parse(xhr.responseText);

      paragraph.innerText = String(result.message);

if(result.status=='success')

      setTimeout(function() {
         window.location.href = "index.html";
      }, 2000);




   }
</script>

<body>
  <a href="index.html">Index</a>
   <h1>Registration</h1>
   <h2 style="text-align: center;">
      Please fill username and password !</h1>
      <table class="center">
         <tr>
            <td>
               <label for="UserName">User Name</label>
            </td>
            <td style="padding-left:10px;">
               <input id="username" name="UserName">
            </td>
         </tr>
         <tr>
            <td>
               <label for="Password">Password</label>
            </td>
            <td style="padding-left:10px;">
               <input id="password" name="Password">
            </td>
         </tr>
         <tr>
         </tr>
      </table>
      <div style="text-align: center;">
         <button id="butn1" onclick="metod( );"> register</button>
      </div>
      <h3 id="resultstate" style="text-align: center;"></h3>
</body>

</html>