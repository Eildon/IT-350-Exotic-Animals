<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'head.php'?>
</head>

<body>
<?php include 'navbar.php';?>  
<?php include 'settings.php';
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo "";
        } else {
            header('Location: login.php');
        }
        $conn = OpenConn();
        if($conn){
            $username = $_SESSION['username'];
            $query = "Select User_ID FROM Users WHERE Username = '$username'";
            $result = mysqli_query($conn,$query);
            if (mysqli_num_rows($result)>0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['User_ID'] = $row['User_ID'];
                $userid = $_SESSION['User_ID'];
            }
        }
        ?> <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <form action="createpost.php">
                            <button type="submit">Create Post</button>
                        </form>
                    </h2>
                    <hr>
                </div>
        </div> <?php
        $command = escapeshellcmd('/usr/bin/python /var/www/html/countpost.py '. $_SESSION['User_ID']);
        $count = shell_exec($command);
        echo $count;
        $start = 0;
        $end = 1;
        settype($count, "integer");
        for ($x = $count; $x > 0; $x--){
            $commands = escapeshellcmd('/usr/bin/python /var/www/html/showpost.py '. $_SESSION['User_ID'].' '.$start .' '.$end);
            $outputs = shell_exec($commands);
            $commandid = escapeshellcmd('/usr/bin/python /var/www/html/showpostid.py '. $_SESSION['User_ID'].' '.$start .' '.$end);
            $objectid = shell_exec($commandid);
            ?><div class="box"><?php
            echo $outputs;?>
            <form action="postmanage.php" method="post">
                <input type="hidden" value="<?php echo $objectid?>" name="post_id"/>
                <button type="submit" class"btn btn-success" name="edit">Edit Post</button>
                <button type="submit" class"btn btn-success" name="delete">Delete Post</button>
            </form>
            </div>
        <?php $start+=1; $end;
        } ?>
   

</body>

</html>
