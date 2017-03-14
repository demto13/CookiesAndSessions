<?php
/**
 * Created by PhpStorm.
 * User: ToSzi
 * Date: 3/14/2017
 * Time: 9:17 PM
 */

    $accessLevel = $_COOKIE['accessLevelCookie'];

    if($accessLevel == "standardUser")
    {
        echo"<h1>Hello Standard user</h1>";
    }
    elseif($accessLevel == "rootUser")
    {
        echo"<h1> Hello root user";
    }
?>