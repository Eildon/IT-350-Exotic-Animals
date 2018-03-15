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
        $userid = $_SESSION['userid'];
        if($conn){
            $query = "Select * FROM Users Where User_ID = '$userid'";
            $result = mysqli_query($conn,$query);
            while ($row = mysqli_fetch_assoc($result)){
                $firstname = $row['First_Name'];
                $lastname = $row['Last_Name'];
                $username = $row['Username'];
                $email = $row['Email'];
                $phone = $row['Phone_number'];
                $zipcode = $row['Zip_Code'];
                $userrole = $row['UserRole'];
                $salt = $row['Salt'];

                ?><div class="box">
                <form action="useredit.php" method="post">
                    <input type="hidden" name="salt" value = "<?php echo $salt?>"/>
                    First Name <br><input type="text" name="fname" value="<?php echo $firstname?>" required><br><br>
                    Last Name <br><input type="text" name="lname" value="<?php echo $lastname?>" required><br><br>
                    Username <br> <input type="text" name="username" value="<?php echo $username?>" required><br><br>
                    Email <br><input type="email" name="email" value="<?php echo $email?>" required><br><br>
                    Phone <br><input type="text" name="phone" value="<?php echo $phone?>" required><br><br>
                    Zip Code <br><input type="text" name="zip" value="<?php echo $zipcode?>" required><br><br>
                    <?php if($userrole == "Administrator"){?>
                    User Role <br><select name="userrole"><option value="Administrator" selected>Administrator</option><option value="Consumer">Consumer</option></select><br><br>
                    <?php } else { ?>User Role <br><select name="userrole"><option value="Administrator">Administrator</option><option value="Consumer" selected>Consumer</option></select><br><br>
                    <?php } ?>
                    Password <br><input type="password" name="password" ><br><br>
                    Password Confirmation <br><input type="password" name="passwordconfirm" ><br><br>
                    <button type="submit" class="btn btn-success" name= "submit">Change</button>
                    <button type="submit" class="btn btn-success" name= "cancel">Cancel</button>
                </form></div><?php
            }
        }
        CloseConn();
?>
        
</body>

</html>
