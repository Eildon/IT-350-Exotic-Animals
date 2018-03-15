<?php
include 'settings.php';
$userid = $_POST['user_id'];
if($_POST){
    if(isset($_POST['edit'])){
        edit();
    }elseif(isset($_POST['delete'])){
        delete();
    }
}

    function edit()
    {
        global $userid;
        echo "The Edit function is called.";
        session_start();
        $_SESSION['userid']= $userid;
        header('Location: edituser.php');
    }
    function delete()
    {
        global $userid;
        echo "The Delete function is called.";
        $conn = OpenConn();
        $query = "DELETE FROM Users WHERE User_ID = '$userid'";
        mysqli_query($conn,$query);
        header('Location: admin.php');
    }
?>