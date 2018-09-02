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
			<form method="post" action="users.php">
			  <div class="form-group">
			    <label for="fname">First Name:</label>
			    <input type="text" class="form-control" name="fname" placeholder="Enter First Name Here" required>
			  </div>
			  <div class="form-group">
			    <label for="lname">Last Name:</label>
			    <input type="lname" class="form-control" name="lname" placeholder="Enter Last Name Here" required>
			  </div>
			  <div class="form-group">
				    <label for="gender">Gender:</label>
				    <select class="custom-select" name="gender" required>
				      <option selected>select any one</option>
				      <option  value="male">Male</option>
				      <option  value="female">Female</option>
				      <option  value="other">Other</option>
				     </select>
  			  </div>
  			  <div class="form-group">
			    <label for="dob">Date of Birth:</label>
			    <input type="date" class="form-control" name="dob" required>
			  </div>
			 <div class="form-group">
			  <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
			 </div>
        	</form>
		</div>
	</div>
</body>
<script src="js/jquerry.js"></script>
<script src="js/bootstrap.js"></script>
</html>