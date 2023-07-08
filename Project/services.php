<?php
     session_start();

     include("db.php");
 
     if($_SERVER['REQUEST_METHOD']=="POST")
     {
         $username=$_POST['username'];
         $source=$_POST['source'];
         $destination=$_POST['destination'];
         if(!empty($username))
         {
              $query="insert into sls2(regno,Source,Destination) values('$username','$source','$destination') ";
              mysqli_query($con,$query);
             echo "<script type='text/javascript'> alert('Now service available')</script> ";
        }
    }
         else
         {
             echo "<script type='text/javascript'> alert('please enter some valid information')</script> ";
         }


?>



<!DOCTYPE html>
<html>
<head>
	<title>College Transport Management System</title>
	<link rel="stylesheet" type="text/css" href="services.css">
</head>
<body>
    <div class="return">
        <a href="nsp.php" class="back-button"><i class="fas fa-arrow-left"></i> Back</a>
      </div>
	<div class="container">
		<h1>College Transport Management System</h1>
		<form action="" method="post">
			<label for="">Registration no</label>
			<input type="text" name="username" id="" required>
			<br>
			<label for="source">Source:</label>
			<select id="source" name="source">
				<option value="location1">Location 1</option>
				<option value="location2">Location 2</option>
				<option value="location3">Location 3</option>
			</select>
			<br>
			<br>
			<label for="destination">Destination:</label>
			<select id="destination" name="destination">
				<option value="PIET">PIET</option>
				<option value="PCE">PCE</option>
			</select>
			<br>
			<br>
			<input type="submit" value="Submit">
		</form>
	</div>
</body>

</html>