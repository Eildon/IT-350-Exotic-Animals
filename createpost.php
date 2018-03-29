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
?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Create Post</strong>
                    </h2>
                    <hr>
                </div>
                
                <div class="col-lg-12 text-center">
                    <p>

                    <form action="postcreateaction.php" method="post">
                        Animal Name <br><input type="text" name="canimal" placeholder="Animal Name" required><br><br>
                        Diet <br><input type="text" name="cdiet" placeholder="Diet" required><br><br>
                        Age <br> <input type="text" name="cage" placeholder="Age" required><br><br>
                        Weight <br><input type="text" name="cweight" placeholder="Weight" required><br><br>
                        Height <br><input type="text" name="cheight" placeholder="Height" required><br><br>
                        Amount <br><input type="text" name="camount" placeholder="Amount" required><br><br>
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
