<?php
include('LoginUser.php');
?>

<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body>
<ul>
  <li><a href="Register.php">Register</a></li>
  <li><a href="Login.php">Login</a></li>
</ul>

  <div style="text-align: center;"id="formLayout";>
   <form  method="POST">
        <h1>Log in</h1>
        <br><input class="inputLay" style="text-indent:17px;" type="text" placeholder="ID" name="LoginID" /><br>
        <br><input class="inputLay" style="text-indent:17px;" type="password" placeholder="Password" name="LoginPassword" /><br><br />
        <input type="checkbox" onclick="HidePswrd()" />Show Password
        <br><br>
        <br><input id="submit"type="submit" value="LOGIN" name="LoginInto"><br>
  </form>
      </div>
      <script src ="myScript.js"></script>
    </body>
</html>
