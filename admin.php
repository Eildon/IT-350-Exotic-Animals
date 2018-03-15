<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'head.php';?>
<?php include 'settings.php';?>
</head>

<body>

<?php include 'navbar.php';?>
<?php 
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
            header('Location: login.php');
        }
        elseif($_SESSION['admin'] != true){
            header('Location: home.php');
        }
        $conn = OpenConn();
        if($conn){
            $query = "Select * FROM Users";
            $result = mysqli_query($conn,$query);
            while ($row = mysqli_fetch_assoc($result)){
                ?><div class="box"><?php
                echo "Username: " . $row["Username"]. " - Name: " . $row["First_Name"]. " " . $row["Last_Name"]. " - Email: ". $row["Email"];
                $userid= $row["User_ID"];
                ?>
                <form action="usermanage.php" method="post">
                <input type="hidden" value="<?php echo $userid?>" name="user_id"/>
                <button type="submit" class"btn btn-success" name="edit">Edit User</button>
                <button type="submit" class"btn btn-success" name="delete">Delete User</button>
                </form></div><?php
            }
        }
        CloseConn();
?>
        
</body>

</html>
