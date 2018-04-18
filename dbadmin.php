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
?>
<div class ="box">
    <p>Back up database </p>
    <form action="dbbackup.php" method="post">
    <button type="submit" class"btn btn-success" name="mysql">MySQL</button>
    <button type="submit" class"btn btn-success" name="mongo">MongoDB</button>
    <button type="submit" class"btn btn-success" name="elastic">ElasticSearch</button>
    </form>
</div>


<div class="box">
    <h1>MySQL</h1>
</div>
<div class="box">
    <?php $input = escapeshellcmd("ps aux | grep mysql");
    $output = shell_exec("ps aux | grep mysql");
    echo "STATUS and USAGE = ". $output; ?>
</div>


<div class="box">
    <h1>MongoDB</h1>
</div>

<div class="box">
<?php $input = escapeshellcmd("ps aux | grep mongo");
    $output = shell_exec("ps aux | grep mongo");
    echo "STATUS and USAGE = ". $output; ?></div>

<div class="box">
    <h1>Elastic</h1>
</div>
<div class="box">
<?php $input = escapeshellcmd("ps aux | grep elastic");
    $output = shell_exec("ps aux | grep elastic");
    echo "STATUS and USAGE = ". $output; ?>
</div>

        
</body>

</html>
