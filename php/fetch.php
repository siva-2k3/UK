<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>fetch</title>
</head>
<body>
	<div class="container">
    <div class="row">
	<table class="table table-bordered">
		<thead class="table table-primary">
			<th>id</th>
			<th>name</th>
			<th>password</th>
			<th>update</th>
			<th>delete</th>
		</thead>
		<tbody>
			<?php
            $server="localhost";
			$uname="root";
			$pwd="";
			$db="library";
			$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connected");
			$query="select * from php";
			$res=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($res))
			{
					 $id=$row[0];
					 echo"<tr>";
					 echo"<td>".$row[0]."</td>";
					 echo"<td>".$row[1]."</td>";
					 echo"<td>".$row[2]."</td>";
					 echo"<td><a href='update.php?id=$id' class='btn btn-success'>update</td>";
					 echo"<td><a href='delete.php?id=$id' class='btn btn-danger'>delete</td>";
					 echo"</tr>";
			}
           ?>

		</tbody>
	</table>
	<a class="btn btn-danger" href="index.html">logout</a>
		</div>
		</div>
</body>
</html>