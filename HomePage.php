<?php
/**
 * Created by PhpStorm.
 * User: ToSzi
 * Date: 3/14/2017
 * Time: 9:17 PM
 */

    $accessLevel = $_COOKIE['accessLevelCookie'];
    $username = $_POST['id'];

    if($accessLevel == "standardUser")
    {
        echo"<h1>Hello Standard user</h1>";
        echo"id: {$username}" . "<br />" . "pw: {$password}" . "<br />";
        echo"cookie set: {$_COOKIE}";
    }
    elseif($accessLevel == "rootUser")
    {
        echo"<h1> Hello root user</h1>";
        if(isset($_COOKIE['accessLevel']))
        {
            echo"cookie set: {$_COOKIE['accessLevel']}";
        }
        else
        {
            echo" No cookies set";
        }
    }
?>