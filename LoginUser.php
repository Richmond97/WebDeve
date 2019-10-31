<?php

session_start();
require '/home/ry9102q/include/mySQL.php';

if (isset($_POST['LoginInto'])){
    $myIDLogin = $_POST['LoginID'];
    $myPasswordLogin = $_POST['LoginPassword'];
    
    $query = "SELECT * FROM TableUser WHERE myID = '$myIDLogin' AND myPassword ='$myPasswordLogin'";
    
    $result = mysqli_query($sqlConnect, $query);
    
    if (mysqli_num_rows($result)){
        header("location: Register.php");
    }
    
    
}



?>