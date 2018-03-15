<?php
include "settings.php";
session_start();
if(isset($_POST['cancel'])){
    header('Location: admin.php');
}
if(!isset($_POST['fname'])||!isset($_POST['lfname'])||!isset($_POST['username'])||!isset($_POST['email'])||!isset($_POST['phone'])||!isset($_POST['zip'])||!isset($_POST['password'])||!isset($_POST['passwordconfirm'])){
    header('Location: edituser.php');
}
    if(isset($_POST['submit'])){
    $userid = $_SESSION['userid'];
    $salt = $_POST['salt'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $zip = $_POST['zip'];
    $userrole = $_POST['userrole'];
    if(isset($_POST['password']) OR isset($_POST['passwordconfim'])){
        $password = $_POST['password'];
        $passwordconfirm = $_POST['passwordconfirm'];
        if ($password != $passwordconfirm){
            header('Location: edituser.php');
        } else {
            $passsalt = $password . $salt;
            $hash = hash('sha512',$passsalt);
            $conn = OpenConn();
            $insert = "UPDATE Users SET 
                First_Name = '$fname',
                Last_Name = '$lname',
                PassHash = '$hash',
                Username = '$username',
                Email ='$email',
                Phone_number ='$phone',
                Zip_Code = '$zip',
                UserRole = '$userrole' WHERE User_ID = '$userid'";
            mysqli_query($conn, $insert);
            header('Location: admin.php');
        }
    } else {
        $conn = OpenConn();
        $insert = "UPDATE Users SET 
        First_Name = '$fname',
        Last_Name = '$lname',
        Username = '$username',
        Email ='$email',
        Phone_number ='$phone',
        Zip_Code = '$zip',
        UserRole = '$userrole' WHERE User_ID = '$userid'";
        echo $insert;
        mysqli_query($conn, $insert);
        header('Location: admin.php');
    }
}
?>