<?php
/**
 * Created by PhpStorm.
 * User: ToSzi
 * Date: 3/14/2017
 * Time: 9:13 PM
 */
    $username = $_POST['id'];
    $password = $_POST['password'];

    if(($username == "user") && ($password == "password"))
    {
        session_start();

        $_SESSION['id'] = $username;
        setcookie('accessLevelCookie', 'standardUser');
        header('location: HomePage.php');
    }
    elseif(($username == "tom") && ($password == "password"))
    {
        session_start();

        $_SESSION['id'] = $username;
        setcookie('accessLevelCookie', 'rootUser');
        header('location: HomePage.php');
    }
    else
    {
        echo"<h1>Incorrect details</h1>";

    }
?>