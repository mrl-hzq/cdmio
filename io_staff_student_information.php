<?php
  include"connection.php";
 
 // $query = mysqli_query($con,"SELECT student.stu_name, parent.par_name FROM student INNER JOIN parent ON parent.stu_matric_id = student.stu_matric_id ");
?>
<!DOCTYPE html>
<html>
<head>
  <title>IO Student Information</title>
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
        <a href="#" class="dropbtn">IO Staff</a>
        <div class="dropdown-content">
          <a href="#">Password</a>
          <a href="#">Logout</a>
        </div>
      </li>
    </ul>
  </div>

  <div class="container">
    <form >
    <h4 align="center">Student Information</h4>
    <?php
    // while ($row = mysqli_fetch_assoc($query)) {
?>
      <div class="row">
        <label for="stu_name" id="stu_name">Name</label>
        <label>:</label>
        <label><?php // echo $row['stu_name']; ?> </label>
      </div>
      <br>
      <?php
      //}
      ?>
      <div class="row">
        <label for="phone">Passport Number</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Passport Expiry Date</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label>Mode of Study</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="email">Intake Session</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="email">Programme</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Postal Address</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Post Code</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Town</label>
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Country</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Telephone No</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Mobile Phone No</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Date of Birth</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Place of Birth</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Martial Status</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Race</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Nationality</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Religion</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Disability</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Email</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Passport</label>
        <button type="" class="btn btn-primary" name="">
        <a href="">Download</a>
      </div>
      <br>

      <div class="row">
        <label for="phone">Acedemic Certificate</label>
        <button type="" class="btn btn-primary" name="">
        <a href="">Download</a>
      </div>
      <br>

      <div class="row">
        <label for="phone">Picture</label>
        <button type="" class="btn btn-primary" name="">
        <a href="">Download</a>
      </div>
      <br>
    </form>
  </div>

  <div class="container">
    <h4 align="center">Parents/ Guardians Information</h4>
      <div class="row">
        <label for="par_name" id="par_name">Name</label>
        <label>:</label>
        <label><?php echo $par_name;?> </label>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Ic. No/ Passport Number</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Postal Address</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Post Code</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Town</label>
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Country</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Telephone No</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Mobile Phone No</label>
        <h7> </h7>
      </div>
      <br>
  </div>

<div class="container">
    <h4 align="center">Emergencies Contact Information</h4>
      <div class="row">
        <label for="name">Name</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Postal Address</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Post Code</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Town</label>
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Country</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Occupation</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Relationship</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Telephone No</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Mobile Phone No</label>
        <h7> </h7>
      </div>
      <br>
  </div>

  <div class="container">
    <div class="row" align="center">
      <button type="" class="btn btn-primary" name="">
        <a href="io_staff_student_information_edit.php">Update Student Information</a>

        <button type="" class="btn btn-primary" name="">
        <a href="io_staff_programme_information_edit.php">Update Program Information</a>
    </div>
    <div class="row" align="center">
    <button type="" class="btn btn-primary" name="Passport Information">
        <a href="io_staff_passport_information.php">Passport Information </a>
    </button>

    <button type="" class="btn btn-primary" name="Passport Information">
        <a href="io_staff_supervisor_information.php">Supervisor Information</a>
    </button>

    <button type="" class="btn btn-primary" name="Passport Information">
        <a href="io_staff_agent_information.php">Agent Information</a>
    </button>
      
  <div class="row" align="center">
    <button type="" class="btn btn-primary" name="Passport Information">
        <a href="io_staff_visa_information.php">Visa Information</a>
    </button>

    <button type="" class="btn btn-primary" name="Passport Information">
        <a href="io_staff_post_arrival.php">Post Arrival Information</a>
    </button>

    <button type="" class="btn btn-primary" name="Passport Information">
        <a href="">  Report</a>
    </button>
  </div>
      
  </body>
</html>