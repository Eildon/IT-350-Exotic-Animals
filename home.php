<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'head.php';?>
</head>

<body>

<?php include 'navbar.php';?>
<?php 
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo "";
        } else {
            header('Location: login.php');
        }

        $command = escapeshellcmd('/usr/bin/python /var/www/html/countallpost.py');
        $count = shell_exec($command);
        echo $count;
        $start = 0;
        $end = 1;
        settype($count, "integer");
        for ($x = $count; $x > 0; $x--){
            $commands = escapeshellcmd('/usr/bin/python /var/www/html/getpost.py '.$start .' '.$end);
            $outputs = shell_exec($commands);
            ?><div class="box"><?php
            echo $outputs;?>


            </div>
        <?php $start+=1; $end;
        } ?>
        
</body>

</html>


