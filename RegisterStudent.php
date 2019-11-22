<?php
session_start();
require '/home/ry9102q/include/myConnection.php';

if(isset($_POST['registerSubmit'])){
    if ($_POST["captcha_code"] == $_SESSION["captcha_code"])
        $studentID = $_POST['studentID'];
        $studentEmail = $_POST['StudentEmail'];
        $studentPassword = $_POST['StudentPassword'];
        $groupN = $_POST['groupNumber'];
        $studentH = "Student";
        
    $queryReg = "INSERT INTO TableUser (myID, myEmail, myPassword, myGroup, myHierarchy) VALUES ('$studentID','$studentEmail','$studentPassword','$groupN','$studentH')";

    mysqli_query($connection, $queryReg);
    header("location: Login.php");
    
}
    

?>