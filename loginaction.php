<?php
include 'settings.php';
if(!isset($_POST['username'])||!isset($_POST['password'])){
    header('Location: login.php');
}
$username = $_POST['username'];
$password = $_POST['password'];
$conn = OpenConn();
if($conn){
    $query = "Select Salt FROM Users WHERE Username = '$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result)>0) {
         $row = mysqli_fetch_assoc($result);
         $PassHash = $password . $row['Salt'];
         $hash = hash(sha512,$PassHash);
         $squery = "Select COUNT(*) FROM Users WHERE Username = '$username' AND PassHash = '$hash'";
         $sresult = mysqli_query($conn,$squery);
        if ($sresult == 1){
            $tquery = "UPDATE Users SET Logged_in = 1 WHERE Username='$username' AND PassHash='$hash'";
            mysqli_query($conn, $tquery);
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $checkadmin = "SELECT UserRole FROM Users WHERE Username = '$username'";
            $checkresult = mysqli_query($conn, $checkadmin);
            if (mysqli_num_rows($checkresult)) {
                $crow = mysqli_fetch_array($checkresult);
                echo $crow['UserRole'];
                if ($crow['UserRole'] == 'Administrator'){
                    $_SESSION['admin'] = true;
                }else{$_SERVER['admin']=false;}
            }
            CloseConn($conn);
            header('Location: home.php');
        } else {echo 'Username or Password is incorrect'; CloseConn($conn); header('Location: home.php');}            
    }else {echo 'Username or Password is incorrect'; CloseConn($conn); header('Location: home.php');}
    mysqli_free_result($result);


    //echo $result;

}else{echo 'Connection Failed';}

?>