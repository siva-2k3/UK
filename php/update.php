<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>update</title>
	
</head>
<body>
<div class="container">
<div class="row">
<?php
$server="localhost";
$uname="root";
$pwd="";
$db="library";
$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connected");
$id=$_GET['id'];
$que="select * from php where id=$id";
$res=mysqli_query($con,$que);
if($row=mysqli_fetch_array($res))
{
	?>
    <form method="post" action="update1.php">
              	<label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo$row[1];?>" required>
                <label>password</label>
                <input type="text" name="password" class="form-control" value="<?php echo$row[2];?>" required><br>
				<input type="submit" name="submit" class="btn btn-primary" value="Update">
    </form> 
	<?php
	}
	?>
</div>
</div>
</body>
</html>
	
	