<?php

session_start();
$_SESSION["hex"]=NULL;
session_destroy();
header("Location:login.php");
?>