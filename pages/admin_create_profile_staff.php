<?php
include"connection.php";
$msg = '';
if(isset($_POST["submit"]))
{
  $password = $_POST['password'];
  $re_password = $_POST['re_password'];

  if ($password == $re_password) 
  {
    $sql = "INSERT INTO user_login (staff_id, name, password, user_access)
    VALUES ('".$_POST["staff_id"]."','".$_POST["name"]."','".$_POST["password"]."','".$_POST["user_access"]."')";

    if (mysqli_query($conn, $sql)) 
    {
        echo "<script type= 'text/javascript'>alert('New account record created successfully'); window.location='admin_create_profile_staff.php'</script>";
    } else 
    {
        $msg =  "<div class='alert alert-danger alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>These user already have an account</div>";
    }
  } else
  {
    $msg =  "<div class='alert alert-danger alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your Password and Retype Password is not match</div>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Create Profile Staff</title>
  <style>
    
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .logo-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .logo-container img {
      height: 100px;
    }

    .navbar {
      background-color: black;
      padding: 15px;
      border-radius: 5px;
      display: flex;
      justify-content: space-between;
      color: white;
      width: 80vw;
      margin: 0 auto;
    }

    .navbar ul {
      margin: 0;
      padding: 0;
      list-style-type: none;
      display: flex;
      justify-content: flex-end;
      width: 100%;
      align-items: center;
    }

    .navbar li {
      display: inline-block;
      margin-right: 10px;
    }

    .navbar a {
      color: #fff;
      text-decoration: none;
      padding: 5px 10px;
      border-radius: 3px;
    }

    .navbar .left {
      margin-right: auto;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown-content a {
      color: black;
      padding: 8px 12px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .container {
      max-width: 80vw;
      margin: 40px auto;
      padding: 20px;
      background-color: #f2f2f2;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    h1 {
      text-align: center;
    }

    form {
      margin-top: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }

    </style>
</head>
<body>
  <div class="logo-container">
    <img src="unisel_logo.png" alt="Logo">
  </div>
  <div class="navbar">
    <ul>
      <li class="left"><a href="#">Home</a></li>
      <li class="dropdown">
        <a href="#" class="dropbtn">Admin</a>
        <div class="dropdown-content">
          <a href="#">Password</a>
          <a href="#">Logout</a>
        </div>
      </li>
    </ul>
  </div>

  <div class="container">
    <h1>Create Profile</h1>

    <form class="form-horizontal" action="" method="post">
      <label for="name">Staff ID</label>
      <input type="text" name="staff_id">

      <label for="email">Password</label>
      <input type="text" name="password">

      <label for="phone">Retype Password</label>
      <input type="text" name="re_password">

      <label for="email">Name</label>
      <input type="text" name="name">


      <label class="col-lg-3 control-label">User Access</label>
                <div class="col-lg-8">
                  <select class="form-control" name="user_access" required>
                    <option value="Mentor">Faculty Administrative Staff</option>
                    <option value="Faculty Management">Director</option>
                    <option value="Counselor">International Office Staff</option>

                  </select>
                </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>

  
  </body>
</html>