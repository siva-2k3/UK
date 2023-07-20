<?php
$server="localhost";
$uname="root";
$pwd="";
$db="library";
$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connected");
$id=$_GET['id'];
$que="delete from php where id=$id";
if($res=mysqli_query($con,$que))
{
    echo "<script>alert('delete successful');
	window.location.href='fetch.php';</script>";
}
else
{
    echo "<script>alert('delete successful');
	window.location.href='fetch.php';</script>";
}
?>