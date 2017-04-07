<?php
include("connection.php");

$id=$_GET['id'];
$connect->query("DELETE FROM courses WHERE id=$id");
if($connect->affected_rows!=0){
header("Location:delete_item.php");
}
?>
