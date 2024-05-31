<?php
include"connection.php";
if(isset($_POST["submit"]))

  {

  $sql1 = "INSERT INTO student (stu_name, stu_mode_of_study, stu_intake_session, stu_programme, stu_postal_address, stu_post_code, stu_town, stu_country, stu_tel_no, stu_mobile_no, stu_dob, stu_pob, stu_martial_status, stu_race, stu_nationality, stu_religion, stu_disability_specify, stu_email, stu_academic_cert)

        VALUES ('".$_POST["stu_name"]."','".$_POST["stu_mode_of_study"]."','".$_POST["stu_intake_session"]."','".$_POST["stu_programme"]."','".$_POST["stu_postal_address"]."','".$_POST["stu_post_code"]."','".$_POST["stu_town"]."','".$_POST["stu_country"]."','".$_POST["stu_tel_no"]."','".$_POST["stu_mobile_no"]."','".$_POST["stu_dob"]."','".$_POST["stu_pob"]."','".$_POST["stu_martial_status"]."','".$_POST["stu_race"]."','".$_POST["stu_nationality"]."','".$_POST["stu_religion"]."','".$_POST["stu_disability"]."','".$_POST["stu_disability_specify"]."','".$_POST["stu_email"]."','".$_POST["stu_academic_cert"]."')";

  $sql2 = "INSERT INTO parent (par_name, par_ic_passport, par_postal_address, par_post_code, par_town, par_country, par_tel_no, par_mobile_no) 

        VALUES ('".$_POST["par_name"]."','".$_POST["par_ic_passport"]."','".$_POST["par_postal_address"]."','".$_POST["par_post_code"]."','".$_POST["par_town"]."','".$_POST["par_country"]."','".$_POST["par_tel_no"]."','".$_POST["par_mobile_no"]."')";

  $sql3 = "INSERT INTO emergency_contact (emgy_name, emgy_postal_address, emgy_post_code, emgy_town, emgy_country, emgy_occupation, emgy_relay, emgy_tel_no, emgy_mobile_no) 

        VALUES ('".$_POST["emgy_name"]."','".$_POST["emgy_postal_address"]."','".$_POST["emgy_post_code"]."','".$_POST["emgy_town"]."','".$_POST["emgy_country"]."','".$_POST["emgy_occupation"]."','".$_POST["emgy_relay"]."','".$_POST["emgy_tel_no"]."','".$_POST["emgy_mobile_no"]."')";

  $sql4 = "INSERT INTO passport (pp_passport, pp_picture, pp_number, pp_expiry_date) 

        VALUES ('".$_POST["pp_passport"]."','".$_POST["pp_picture"]."','".$_POST["pp_number"]."','".$_POST["pp_expiry_date"]."')";


    if($con->query($sql1) === TRUE &&$con->query($sql2) === TRUE &&$con->query($sql3) === TRUE &&$con->query($sql4) === TRUE)
  {
    echo "data successfully insert";

  } else 
  {
    echo "failed to insert";
  }    


}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>IO Edit Student Information</title>
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

    form {
      margin-top: 50px;
      allign: center;
    }

    label {
      display: block;
      margin-bottom: 5px;
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


    input[type="text"],
    select {
      width: 98%;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 10px;
      border: 1px solid #ccc;
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
    <h4 align="center">Student Information</h4>
      <div class="row">
        <label for="name">Name</label>
        <input type="text" id="" name="stu_name">
      </div>
      <br>

      <div class="row">
        <label for="email">Passport Number</label>
        <input type="text" id="" name="stu_passport_no">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="email">Passport Expiry Date</label>
        <input type="date" id="" name="stu_passport_expiry">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Mode of Study</label>
        <input type="text" id="" name="stu_mode_of_study">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Intake Session</label>
        <input type="text" id="" name="stu_intake_session">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Programme</label>
        <input type="text" id="" name="stu_programme">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Postal Address</label>
        <input type="text" id="" name="stu_postal_address">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Post Code</label>
        <input type="text" id="" name="stu_post_code">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Town</label>
        <input type="text" id="" name="stu_town">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Country</label>
        <input type="text" id="" name="stu_country">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Telephone No</label>
        <input type="text" id="" name="stu_tel_no">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Mobile Phone No</label>
        <input type="text" id="" name="stu_mobile_no">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Date of Birth</label>
        <input type="date" id="" name="stu_dob">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Place of Birth</label>
        <input type="text" id="" name="stu_pob">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Martial Status</label>
        <input type="text" id="" name="stu_martial_status">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Race</label>
        <input type="text" id="" name="stu_race">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Nationality</label>
        <input type="text" id="" name="stu_nationality">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Religion</label>
        <input type="text" id="" name="stu_religion">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Disability</label>
        <input type="text" id="" name="stu_disabiity_specify">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Email</label>
        <input type="text" id="" name="stu_email">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Passport</label>
        <input type="file" id="" name="pp_passport">
      </div>
      <br>

      <div class="row">
        <label for="phone">Acedemic Certificate</label>
        <input type="file" id="" name="stu_academic_cert">
      </div>
      <br>

      <div class="row">
        <label for="phone">Picture</label>
        <input type="file" id="" name="pp_picture">
      <br>
  </div>

<div class="container">
    <h4 align="center">Parents/ Guardians Information</h4>

      <div class="row">
        <label for="name">Name</label>
        <input type="text" id="" name="par_name">
      </div>
      <br>

      <div class="row">
        <label for="name">Passport Number</label>
        <input type="text" id="" name="par_ic_passport">
      </div>
      <br>

      <div class="row">
        <label for="phone">Postal Address</label>
        <input type="text" id="" name="par_postal_address">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Post Code</label>
        <input type="text" id="" name="par_post_code">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Town</label>
        <input type="text" id="" name="par_town">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Country</label>
        <input type="text" id="" name="par_country">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Telephone No</label>
        <input type="text" id="" name="par_tel_no">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Mobile Phone No</label>
        <input type="text" id="" name="par_mobile_no">
        <h7> </h7>
      </div>
      <br>
  </div>

<div class="container">
    <h4 align="center">Emergencies Contact Information</h4>

      <div class="row">
        <label for="name">Name</label>
        <input type="text" id="" name="emgy_name">
      </div>
      <br>

      <div class="row">
        <label for="phone">Postal Address</label>
        <input type="text" id="" name="emgy_postal_address">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Post Code</label>
        <input type="text" id="" name="emgy_post_code">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Town</label>
        <input type="text" id="" name="emgy_town">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Country</label>
        <input type="text" id="" name="emgy_country">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Occupation</label>
        <input type="text" id="" name="emgy_occupation">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Relationship</label>
        <input type="text" id="" name="emgy_relay">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Telephone No</label>
        <input type="text" id="" name="emgy_tel_no">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Mobile Phone No</label>
        <input type="text" id="" name="emgy_mobile_no">
        <h7> </h7>
      </div>
      <br>
  </div>
  <div class="container" align="center">
    <div class="row" align="">
    <button type="" class="btn btn-primary" name="">
        <a href="io_staff_student_information.php">Back</a>
    </button>

    <button type="" class="btn btn-primary" name="">
        <a href="io_staff_student_information.php">Save Changes</a>
    </button>
  </div>

  </body>
</html>