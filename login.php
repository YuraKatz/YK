<!DOCTYPE html>
<html>
   <head>
      <meta charset='utf-8'>
      <link rel="stylesheet" type="text/css" href="main.css">
   </head>
   <body>
   <a href="index.html">Index</a>
      <h1>Login , please</h1>
      <form method="post" action="check_login.php"  >
         <table  class="center">
            <tr  >
               <td >
                  <label for="UserName">User Name</label>
               </td>
               <td id="UserName" style="padding-left:10px;">
                  <input  name="user"  >
               </td>
            </tr>
            <tr>
               <td>
                  <label for="Password">Password</label>
               </td>
               <td id="Password" style="padding-left:10px;">
                  <input   name="pwd"  >
               </td>
            </tr>
             <tr>
                
             </tr>
         </table>
         <div style="text-align: center;"> 
             <button id="btn1"  >GO !</button>
         </div>
        
         
      </form>
   </body>
</html>