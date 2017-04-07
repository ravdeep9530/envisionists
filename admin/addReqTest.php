<?php
/**
 * Created by PhpStorm.
 * User: WorldWiki
 * Date: 28-01-2017
 * Time: 07:31 PM
 */
include "connection.php";
$tid=mysqli_real_escape_string($connect,$_GET['tid']);
$hex=mysqli_real_escape_string($connect,$_GET['hex']);
$sxrcx=$connect->query("SELECT * FROM test WHERE id='".$tid."'");
$ss=$sxrcx->fetch_assoc();
$tm=$ss['total_marks'];

$connect->query("INSERT INTO `your_test`(`test_id`, `obt_marks`, `total_marks`, `date`, `hex`) VALUES ($tid,0,$tm,NOW(),'$hex')");
if($connect->insert_id!="")
{
    echo 'done';
}
