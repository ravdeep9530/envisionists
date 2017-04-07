<?php
/**
 * Created by PhpStorm.
 * User: WorldWiki
 * Date: 28-01-2017
 * Time: 07:31 PM
 */
include "connection.php";
$tid=mysqli_real_escape_string($connect,$_GET['tid']);
$obt=mysqli_real_escape_string($connect,$_GET['obt']);
$connect->query("UPDATE your_test SET obt_marks=$obt WHERE yt_id=$tid");

