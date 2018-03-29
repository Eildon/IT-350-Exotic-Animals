<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'head.php'?>
</head>

<body>
<?php include 'navbar.php';?>  
<?php 
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo "";
        } else {
            header('Location: login.php');
        }
        $postid = $_SESSION['postid'];
        $commandname = escapeshellcmd('/usr/bin/python /var/www/html/getname.py '. $postid);
        $name = shell_exec($commandname);
        $commanddiet = escapeshellcmd('/usr/bin/python /var/www/html/getdiet.py '. $postid);
        $diet = shell_exec($commanddiet);
        $commandage = escapeshellcmd('/usr/bin/python /var/www/html/getage.py '. $postid);
        $age = shell_exec($commandage);
        $commandweight = escapeshellcmd('/usr/bin/python /var/www/html/getweight.py '. $postid);
        $weight = shell_exec($commandweight);
        $commandheight = escapeshellcmd('/usr/bin/python /var/www/html/getheight.py '. $postid);
        $height = shell_exec($commandheight);
        $commandamount = escapeshellcmd('/usr/bin/python /var/www/html/getamount.py '. $postid);
        $amount = shell_exec($commandamount);


?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Edit Post</strong>
                    </h2>
                    <hr>
                </div>
                
                <div class="col-lg-12 text-center">
                    <p>

                    <form action="postupdateaction.php" method="post">
                        Animal Name <br><input type="text" name="canimal" placeholder="Animal Name" value="<?php echo $name ?>" required><br><br>
                        Diet <br><input type="text" name="cdiet" placeholder="Diet" value="<?php echo $diet ?>" required><br><br>
                        Age <br> <input type="text" name="cage" placeholder="Age" value="<?php echo $age ?>" required><br><br>
                        Weight <br><input type="text" name="cweight" placeholder="Weight" value="<?php echo $weight ?>" required><br><br>
                        Height <br><input type="text" name="cheight" placeholder="Height" value="<?php echo $height ?>" required><br><br>
                        Amount <br><input type="text" name="camount" placeholder="Amount" value="<?php echo $amount ?>" required><br><br>
                        <button type="submit" class="btn btn-success">Post</button>
                    </form>

                    </p>
                    
                </div>
               
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Wilson Hulme 2018</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
