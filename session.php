<?php
session_start();
include('connect.php');
$user_check = $_SESSION['user'];
$ses_sql = mysqli_query($connection,"SELECT * FROM user WHERE `username` = '{$user_check}' ");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session = $row['username'];
if(!isset($_SESSION['user'])){
  header("location:index.php");
}
?>
