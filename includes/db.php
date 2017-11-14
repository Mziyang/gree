<?php
/**
 * Created by PhpStorm.
 * User: tobymao
 * Date: 13/11/2017
 * Time: 7:17 PM
 */

$con = mysqli_connect("localhost","root", "","gree");

if (
mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
    );
}
//Multilingual supports
mysqli_query($con,"SET NAMES 'UTF8'");
?>

