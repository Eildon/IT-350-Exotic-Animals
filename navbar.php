<div class="brand">Exotic Animal Trading</div>
    <!--<div class="address-bar">wlhulme@gmail.com | 801-319-9001</div>-->
    <!-- Navigation -->
    <?php session_start();?>
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
                <a class="navbar-brand" href="home.php"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="home.php" class="active">Home</a>
                    </li>  
                    <?php if ($_SESSION['admin']==true){?>
                    <li>
                        <a href="admin.php"> Admin</a>
                    </li>
                    <?php } ?>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li id="logout"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>