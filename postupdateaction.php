<?php
if(!isset($_POST['canimal'])||!isset($_POST['cdiet'])||!isset($_POST['cage'])||!isset($_POST['cweight'])||!isset($_POST['cheight'])||!isset($_POST['camount'])){
    header('Location: editpost.php');
}
session_start();
$name = $_POST['canimal'];
$diet = $_POST['cdiet'];
$age = $_POST['cage'];
$weight = $_POST['cweight'];
$height = $_POST['cheight'];
$amount = $_POST['camount'];
$postid = $_SESSION['postid'];
$userid = $_SESSION['userid'];
$command = escapeshellcmd('/usr/bin/python /var/www/html/updatepost.py ' . $postid. ' '. $name . ' ' . $diet . ' ' . $age . ' ' . $weight. ' ' . $height. ' ' . $amount);
$output = shell_exec($command);
echo $output;

header( 'Location: showposts.php');

?>