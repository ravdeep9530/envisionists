<?php

$connect = new mysqli('localhost','root','','training1');
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}                                                                                                       
?>
