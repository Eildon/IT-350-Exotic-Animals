<?php
include 'settings.php';
if($_POST){
    if(isset($_POST['mysql'])){
        mysql();
    }elseif(isset($_POST['mongo'])){
        mongo();
    }elseif(isset($_POST['elastic'])){
        elastic();
    }
}

    function mysql()
    {
        $date = date_create();
        $time = date_timestamp_get($date);
        $commands = escapeshellcmd('/usr/bin/python /var/www/html/dbmysql.py '.$time);
        $outputs = shell_exec($commands);
        echo $outputs;
        header('Location: dbadmin.php');
    }
    function mongo()
    {
        $date = date_create();
        $time = date_timestamp_get($date);
        $commands = escapeshellcmd('/usr/bin/python /var/www/html/dbmongo.py '.$time);
        $outputs = shell_exec($commands);
        echo $outputs;
        header('Location: dbadmin.php');
    }
    function elastic()
    {

        header('Location: dbadmin.php');
    }
?>