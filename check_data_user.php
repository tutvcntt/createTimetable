<?php
include "get_data_user.php";
session_start();
$test = get_data_user($_POST['user'], $_POST['pass']);
if($test == "true"){
    $_SESSION['user'] = $_POST['user'];
    header("location:home.php");
}
if($test == "false1"){
    header("location:login.php");
}
if($test == "false2"){
    header("location:login.php");
}
?>