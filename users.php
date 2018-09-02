<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body style="background:none;">

<?php
$firstname="";
$lastname="";
$gender="";
$dob="";
$id=0;

$dbcon =mysqli_connect('localhost', 'root', '', 'user');

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST["submit"]))
{
	$firstname= test_input($_POST["fname"]);
	$lastname= test_input($_POST["lname"]);
	$gender= test_input($_POST["gender"]);
	$dob= test_input($_POST["dob"]);

	$insert="insert into info (fname, lname, gender, dob) values('$firstname','$lastname','$gender','$dob')";
	mysqli_query($dbcon, $insert);
	header('location:users.php');
}


$result=mysqli_query($dbcon,"select * from info");

?>
<div class="container">
	<div class="col-md-12">
		<p>
			<h4>Credenntial Details <a href="index.php" class="btn btn-info" style="margin-left:25px;">Add </a></h4>
			
		</p>
	</div>
	<table class="table">
	<thead>
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Gender</td>
			<td>DOB</td>
			<td colspan="2">Operations</td>
		</tr>
	</thead>
	<tbody>
		<?php while($row=mysqli_fetch_assoc($result)) { 
			echo "
			<tr>
				<td>".$row['fname']."</td>
				<td>".$row['lname']."</td>
				<td>".$row['gender']."</td>
				<td>".$row['dob']."</td>
				<td><a href='update.php?id=$row[id]&fn=$row[fname]&ln=$row[lname]&gen=$row[gender]&dob=$row[dob]' class='btn btn-success btn-block'>Edit</td>
				<td><a href='delete.php?id=$row[id]' class='btn btn-danger btn-block'>Delete</a></td>
			</tr>
			";

		} ?>
	</tbody>
</table>
</div>
</body>
<script src="js/jquerry.js"></script>
<script src="js/bootstrap.js"></script>
</html>