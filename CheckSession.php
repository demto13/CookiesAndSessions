<?php
/**
 * Created by PhpStorm.
 * User: ToSzi
 * Date: 3/15/2017
 * Time: 7:42 AM
 */
    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['lastName']  = $_POST['lastName'];

    header['location: HomePage.php'];
?>