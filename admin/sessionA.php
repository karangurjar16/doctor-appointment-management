<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['dun'])){
    header("location:index.php");
    }
?>