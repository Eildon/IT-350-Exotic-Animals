<?php
include 'settings.php';
if(!isset($_POST['rfname'])||!isset($_POST['rlfname'])||!isset($_POST['rusername'])||!isset($_POST['remail'])||!isset($_POST['rphone'])||!isset($_POST['rzip'])||!isset($_POST['rpassword'])||!isset($_POST['rpasswordconfirm'])){
    header('Location: register.php');
}
$fname = $_POST['rfname'];
$lname = $_POST['rlname'];
$username = $_POST['rusername'];
$email = $_POST['remail'];
$phone = $_POST['rphone'];
$zip= $_POST['rzip'];
$password = $_POST['rpassword'];
$passwordconfirm = $_POST['rpasswordconfirm'];
$role = 'Consumer';
$loggedin = 0;

$conn = OpenConn();
if($conn){
    if($password==$passwordconfirm){
        $salt = getSalt();
        $passsalt = $password . $salt;
        $hash = hash('sha512',$passsalt);
        $insert = "INSERT INTO Users (First_Name, Last_Name, Username, Salt, PassHash, Email, Phone_Number, Zip_Code, UserRole, Logged_in)
        VALUES ('$fname','$lname','$username','$salt','$hash','$email','$phone','$zip','$role','$loggedin')";
        mysqli_query($conn, $insert);
    }else{echo 'Passwords do not match';}
}else{echo 'Connection Failed';}

CloseConn($conn);
header('Location: login.php');
?>