<?php
include('connect.php');
session_start();

$user_check = $_SESSION['username'];

$mysql_query = "select * from user where username = '$user_check'";
$row = mysql_fench_array(mysql_query($mysql_query));

$login_session_name = $row['nama'];

if(isset($_SESSION['username'])) {
	header("location:index.php");
}
?>