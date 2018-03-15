<?php
include 'settings.php';
session_start();
$conn = OpenConn();
$username = $_SESSION['username'];
if(session_destroy()){
    mysqli_query($conn, "UPDATE Users SET Logged_in = 0 WHERE Username = '$username'"); //Need to make it User specific
    CloseConn($conn);
    header('Location: login.php');
}

?>