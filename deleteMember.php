<?php

$connect = new mysqli('localhost', 'root','','ltweb');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$username = $_GET['rn'];
$sql = "DELETE FROM `members` WHERE `username`='$username'";
$res = mysqli_query($connect, $sql);
if ($res){
    echo 'delete successful';
} else {
    echo 'failed';
}
$connect->close();
?>