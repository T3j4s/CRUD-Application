<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container ">
		<div class="offset-md-3 col-md-6 container-box">
			<form method="get" action="">
				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
			  <div class="form-group">
			    <label for="fname">First Name:</label>
			    <input type="text" class="form-control" name="fname" placeholder="Enter First Name Here" required value="<?php echo $_GET['fn']; ?>">
			  </div>
			  <div class="form-group">
			    <label for="lname">Last Name:</label>
			    <input type="lname" class="form-control" name="lname" placeholder="enter Last Name Here" required value="<?php echo $_GET['ln']; ?>">
			  </div>
			  <div class="form-group">
				    <label for="gender">Gender:</label>
				    <select class="custom-select" name="gender" required">
				      <option  value="male"
						<?php
							if($_GET['gen']=="male") {
								echo "selected";
							}
						?>
				      ">Male</option>
				      <option value="female"
						<?php
							if($_GET['gen']=="female") {
								echo "selected";
							}
						?>
				      ">Female</option>
				      <option  value="other"
						<?php
							if($_GET['gen']=="other") {
								echo "selected";
							}
						?>
				      ">Other</option>
				     </select>
  			  </div>
  			  <div class="form-group">
			    <label for="dob">Date of Birth:</label>
			    <input type="date" class="form-control" name="dob" required value="<?php echo $_GET['dob']; ?>">
			  </div>
			 <div class="form-group">
			  <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Update</button>
			 </div>
        	</form>
        	 <?php
			 	if(isset($_GET['submit'])) {
						$dbcon=mysqli_connect('localhost','root','','user');
						$fname=$_GET['fname'];
						$lname=$_GET['lname'];
					    $gender=$_GET['gender'];
						$dob=$_GET['dob'];
						$id=$_GET['id'];
						$query="UPDATE info SET fname='$fname',lname='$lname',gender='$gender',dob='$dob' where id='$id'";
						$data=mysqli_query($dbcon,$query);
						header('location:users.php');
			 	} 
			 ?>
		</div>
	</div>

</body>
<script src="js/jquerry.js"></script>
<script src="js/bootstrap.js"></script>
</html>