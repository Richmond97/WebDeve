<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require '/home/ry9102q/include/myConnection.php';

if (isset($_POST['LoginInto'])){
    $myIDLogin = $_POST['LoginID'];
    $myPasswordLogin = $_POST['LoginPassword'];
    
    $query = "SELECT * FROM TableUser WHERE myID = '$myIDLogin' AND myPassword ='$myPasswordLogin'";
    
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result))
    {
    	while($row = mysqli_fetch_assoc($result))
    {
    	 if ($row['myHierarchy'] == 'Student')
    	 {
        header("location: Student.php");
    	 }
   		 else
    	{		
    	header("location: Tutor.php");
    	}


    }

    }
    else
    {
    	echo "Failed to Log in";

    } 
    
    
}



?>