<?php
include('RegisterStudent.php');

?>

<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="myScript.js"></script>
  </head>
  <body>
<ul>
  <li><a href="Register.php">Register</a></li>
  <li><a href="Login.php">Login</a></li>
</ul>

  <div style="text-align: center;" id="formLayout">
   <form action="Register.php" method="POST" >
        <h1>Register</h1>
        <br><input class="inputLay" name="studentID" style="text-indent:17px;" type="text" placeholder="Student ID" maxlength="9" /><br>
       
        <br><input class="inputLay" name="StudentEmail" style="text-indent:17px;" type="text" placeholder="Email" /><br>
       
        <br><input id="passwordCheck" class="inputLay" style="text-indent:17px;" type="password" placeholder="Password" name="StudentPassword" /><br><br />
        <select name="groupNumber">
            <option value="1">Group 1</option>
            <option value="2">Group 2</option>
            <option value="3">Group 3</option>
            <option value="4">Group 4</option>
            <option value="5">Group 5</option>
            <option value="6">Group 6</option>
            <option value="7">Group 7</option>
            <option value="8">Group 8</option>
            <option value="9">Group 9</option>
            <option value="10">Group 10</option>
        </select>
        <br />
        <br />
        <input type="checkbox" onclick="HidePswrd()"> Show Password
        <br><input id="submit"type="submit" value="Create Account" name="registerSubmit" /><br>
  </form>
  </div> 
    </body>
</html>
