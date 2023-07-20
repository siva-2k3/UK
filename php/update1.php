<?php
$server="localhost";
$uname="root";
$pwd="";
$db="library";
$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connected");
$name=$_POST['name'];
$password=$_POST['password'];
$que="update sturegform set name='$name',password='$password' where name='$name'";
if($res=mysqli_query($con,$que))
{
	echo "<script>alert('update successful');
	window.location.href='fetch.php';</script>";
}
else
{
	echo"<script>alert('update unsuccessful');</script>";
}
?>

