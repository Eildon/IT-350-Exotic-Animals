<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'head.php'?>

</head>

<body>

<div class="brand">Exotic Animal Trading</div>
    <!--<div class="address-bar">wlhulme@gmail.com | 801-319-9001</div>-->

    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="home.php">Wilson Hulme</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">

                <ul class="nav navbar-nav navbar-center">
                    <li id="login"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li id="register"><a href="register.php"><span class="glyphicon glyphicon-ok-circle"></span> Register</a></li>                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
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
