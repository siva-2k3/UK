<?php
	$server="localhost";
	$uname="root";
	$pwd="";
	$db="library";
	$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connected");
	$name=$_POST['name'];
	$password=$_POST['password'];
	$query="insert into php values(null,'$name','$password')";
	if($row=mysqli_query($con,$query))
    {
		      echo"<script>alert('Registration was successsful');
		      window.location.href='fetch.php';</script>";
	}
	else
	{ 
		 echo"<script>alert('registration was unsuccessfully');</script>";
	}
	
	?>