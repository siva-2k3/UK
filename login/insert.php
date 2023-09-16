<?php
	$server="localhost";
	$uname="root";
	$pwd="";
	$db="login";
	$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connected");
	$name=$_POST['name'];
    $email=$_POST['email'];
	$password=$_POST['password'];
	$query="insert into log values(null,'$name','$email','$password')";
	if($row=mysqli_query($con,$query))
    {
		      echo"<script>alert('Registration was successsful');
		      window.location.href='login.html';</script>";
	}
	else
	{ 
		 echo"<script>alert('registration was unsuccessfully');</script>";
	}
	
	?>
