<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'head.php'?>

</head>

<body>

    <?php include 'navbar.php'?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Login</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <p>
                    <form action="loginaction.php" method="post" autocomplete="off">
                        <span class="glyphicon glyphicon-user"></span> Username<br>
                            <input type="text" name="username" placeholder="Username" required> <br><br>
                        <span class="glyphicon glyphicon-asterisk"></span>
                        Password  <br><input type="password" name="password" placeholder="Password" required> <br><br>
                        <button type="submit" class="btn btn-success">Login</button>
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
