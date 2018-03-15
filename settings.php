<?php

function OpenConn()
{
    $dbhost = "localhost";
    $dbuser = "eildon";
    $dbpass = "csrl";
    $db = "EATC";
        
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
    
    return $conn;
}

function CloseConn($conn)
{
    $conn -> close();
}

function getSalt() {
    $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $randString = "";
    $randStringLen = 15;

    while(strlen($randString) < $randStringLen) {
        $randChar = substr(str_shuffle($charset), mt_rand(0, strlen($charset)), 1);
        $randString .= $randChar;
    }

    return $randString;
}
?>