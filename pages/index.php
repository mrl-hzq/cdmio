<?php
include 'connection.php';
session_start();

//variable for error
$error = '';

//student login
if (isset($_POST['submit']))
{
	$stu_matric_id = mysqli_real_escape_string($con, $_POST['stu_matric_id']);
	$stu_pass = mysqli_real_escape_string($con, $_POST['stu_pass']);

	$query 		= mysqli_query($con, "SELECT * FROM student WHERE  stu_matric_id = '$stu_matric_id' AND stu_pass = '$stu_pass'");
	$row		= mysqli_fetch_array($query);
	$num_row 	= mysqli_num_rows($query);

	if ($num_row > 0)
	{
		$_SESSION['stu_matric_id'] = $row['stu_matric_id'];
		header('Location: student_information_form.php');
		exit();
	} else
	{
		//	$error = "Matric Number or Pasword is Invalid";
		echo "<script>
		alert('invalid Information');
		window.location.href='index.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CENTRALIZED DATA MANAGEMENT FOR INTERNATIONAL STUDENT</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/login_style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<style type="text/css">
		body.body_style
			{
				background-image: url("wallpaper/EBEBEB.png");
				font-family: verdana, arial, helvetica, sans-serif;
				font-weight: bold;
			}
		a.link 	/*link to login form*/
			{
				text-decoration: none;		
			}
	</style>
</head>
<body class="body_style">
	<table border="0" width="100%">
		<tr>
			<td><?php include 'unisel_logo.php'; ?></td>
		</tr>		
		<tr>
			<th style="font-size: 30px; font-family: cambria;">CENTRALIZED DATA MANAGEMENT SYSTEM</th>
		</tr>
		<tr>
			<td>
				<!---student search-->
				<div class="container">
					<div class="info"></div>
				</div>
				<div style="text-align: center;">
					<marquee width="40%">Welcome to CENTRALIZED DATA MANAGEMENT System</marquee>
				</div>
				<br>
				<div class="form" style="background-color:#FFA056" >
					<h2>Student Login</h2>
					<div class="imgcontainer">
						<img src="images/student_icon.png" alt="Avatar" class="avatar">
					</div>

					<form  action="" method="post" class="login-form">
						<input type="text" name="stu_matric_id" placeholder="Matric Number" required>
						<input type="password" name="stu_pass" placeholder="Password" required>
						<button type="submit" name="submit">Log In</button>						
						<br><br><br>
						<a href="staff_login.php" class="link">Click Here for Staff</a>
						<!--error output-->
						<span><center><font color="red"><?php echo $error; ?></font></center></span>
						
					</form>
				</div>	
			</td>		
		</tr>		
	</table>
</body>
</html>