<?php
include 'settings.php';
$postid = $_POST['post_id'];
if($_POST){
    if(isset($_POST['edit'])){
        edit();
    }elseif(isset($_POST['delete'])){
        delete();
    }
}

    function edit()
    {
        session_start();
        global $postid;
        $_SESSION['postid'] = $postid;
        header('Location: editpost.php');
    }
    function delete()
    {
        global $postid;
        $command = escapeshellcmd('/usr/bin/python /var/www/html/removepost.py '. $postid);
        $removed = shell_exec($command);
        echo $removed;
        header('Location: showposts.php');
    }
?>