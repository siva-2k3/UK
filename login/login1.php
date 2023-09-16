<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","login") or die("database not connected");
$que="select * from log where email='$email'";
$res=mysqli_query($con,$que);
if($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
    if($row['password']==$password)
    {
        $_SESSION['email']=$row['email'];
        $_SESSION['password']=$row['password'];
        echo"<script>alert('login successful');
        window.location.href='home.php';</script>";
    }
    else{
        echo"<script>alert('login unsuccessfull');</script>";
    }
}
    else{
        echo"<script>alert('enter valid user name');</script>";
    }
?>