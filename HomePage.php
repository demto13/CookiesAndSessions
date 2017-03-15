<?php
/**
 * Created by PhpStorm.
 * User: ToSzi
 * Date: 3/14/2017
 * Time: 9:17 PM
 */
session_start();

    $accessLevel = $_COOKIE['accessLevelCookie'];
    $username = $_POST['id'];

    if($accessLevel == "standardUser")
    {
        echo"<h1>Hello Standard user</h1>";
        echo"id: {$username}" . "<br />" . "pw: {$password}" . "<br />";
        echo"cookie set: {$_COOKIE['accessLevelCookie']}";
    }
    elseif($accessLevel == "rootUser")
    {
        echo"<h1> Hello root user</h1>";
        if(isset($_COOKIE['accessLevelCookie']))
        {
            echo"cookie set: {$_COOKIE['accessLevelCookie']}";
        }
        else
        {
            echo" No cookies set";
        }
    }

    if(isset($_SESSION['id']))
    {
        echo"<p><br />hello {$_SESSION['id']}</p>";
    }
    else
    {
        echo "no session detected";
    }

    if(isset($_SESSION['firstName']))
    {
        print"<p><br />Your first name is : {$_SESSION['firstName']}</p>";
    }
    else{
        print"<p><br />No session detected from 2nd form either</p>";
    }
?>