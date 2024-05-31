<?php 
include"connection.php";
include 'student_session.php';  
if(isset($_POST["submit"]))
{

  $sql1 = "UPDATE student SET
        stu_academic_cert = '".$_POST["stu_academic_cert"]."',
        stu_mode_of_study = '".$_POST["stu_mode_of_study"]."',
        stu_intake_session = '".$_POST["stu_intake_session"]."',
        stu_programme = '".$_POST["stu_programme"]."',
        stu_name = '".$_POST["stu_name"]."',
        stu_postal_address = '".$_POST["stu_postal_address"]."',
        stu_post_code = '".$_POST["stu_post_code"]."',
        stu_town = '".$_POST["stu_town"]."',
        stu_country = '".$_POST["stu_country"]."',
        stu_tel_no = '".$_POST["stu_tel_no"]."',
        stu_mobile_no = '".$_POST["stu_mobile_no"]."',
        stu_dob = '".$_POST["stu_dob"]."',
        stu_pob = '".$_POST["stu_pob"]."',
        stu_martial_status = '".$_POST["stu_martial_status"]."',
        stu_race = '".$_POST["stu_race"]."',
        stu_nationality = '".$_POST["stu_nationality"]."',
        stu_religion = '".$_POST["stu_religion"]."',
        stu_disability = '".$_POST["stu_disability"]."',
        stu_disability_specify = '".$_POST["stu_disability_specify"]."',
        stu_email = '".$_POST["stu_email"]."'
        WHERE stu_matric_id = '".$_SESSION['stu_matric_id']."'";

  $sql2 = "INSERT INTO parent (stu_matric_id, par_name, par_ic_passport, par_postal_address, par_post_code, par_town, par_country, par_tel_no, par_mobile_no)
        VALUES ('".$_SESSION['stu_matric_id']."', '".$_POST["par_name"]."', '".$_POST["par_ic_passport"]."', '".$_POST["par_postal_address"]."', '".$_POST["par_post_code"]."', '".$_POST["par_town"]."', '".$_POST["par_country"]."', '".$_POST["par_tel_no"]."', '".$_POST["par_mobile_no"]."')
        ON DUPLICATE KEY UPDATE
        par_name = '".$_POST["par_name"]."',
        par_ic_passport = '".$_POST["par_ic_passport"]."',
        par_postal_address = '".$_POST["par_postal_address"]."',
        par_post_code = '".$_POST["par_post_code"]."',
        par_town = '".$_POST["par_town"]."',
        par_country = '".$_POST["par_country"]."',
        par_tel_no = '".$_POST["par_tel_no"]."',
        par_mobile_no = '".$_POST["par_mobile_no"]."'";

  $sql3 = "INSERT INTO emergency_contact (stu_matric_id, emgy_name, emgy_postal_address, emgy_post_code, emgy_town, emgy_country, emgy_occupation, emgy_relay, emgy_tel_no, emgy_mobile_no)
        VALUES ('".$_SESSION['stu_matric_id']."', '".$_POST["emgy_name"]."', '".$_POST["emgy_postal_address"]."', '".$_POST["emgy_post_code"]."', '".$_POST["emgy_town"]."', '".$_POST["emgy_country"]."', '".$_POST["emgy_occupation"]."', '".$_POST["emgy_relay"]."', '".$_POST["emgy_tel_no"]."', '".$_POST["emgy_mobile_no"]."')
        ON DUPLICATE KEY UPDATE
        emgy_name = '".$_POST["emgy_name"]."',
        emgy_postal_address = '".$_POST["emgy_postal_address"]."',
        emgy_post_code = '".$_POST["emgy_post_code"]."',
        emgy_town = '".$_POST["emgy_town"]."',
        emgy_country = '".$_POST["emgy_country"]."',
        emgy_occupation = '".$_POST["emgy_occupation"]."',
        emgy_relay = '".$_POST["emgy_relay"]."',
        emgy_tel_no = '".$_POST["emgy_tel_no"]."',
        emgy_mobile_no = '".$_POST["emgy_mobile_no"]."'";
  
  $sql4 = "INSERT INTO passport (stu_matric_id, pp_passport, pp_picture, pp_number, pp_expiry_date)
        VALUES ('".$_SESSION['stu_matric_id']."', '".$_POST["pp_passport"]."', '".$_POST["pp_picture"]."', '".$_POST["pp_number"]."', '".$_POST["pp_expiry_date"]."')
        ON DUPLICATE KEY UPDATE
        pp_passport = '".$_POST["pp_passport"]."',
        pp_picture = '".$_POST["pp_picture"]."',
        pp_number = '".$_POST["pp_number"]."',
        pp_expiry_date = '".$_POST["pp_expiry_date"]."'";

if ($con->query($sql1) === TRUE && $con->query($sql2) === TRUE && $con->query($sql3) === TRUE && $con->query($sql4) === TRUE) {
    echo "Data successfully updated";
} else {
    echo "Failed to update data";
}

}
 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Student Information Form</title>
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

    .form-container {
      max-width: 80vw;
      margin: 20px auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .form-container h2 {
      text-align: center;
      margin-top: 0;
    }

    .form-container label {
      display: block;
      margin-bottom: 5px;
    }

    .form-container input[type="file"] {
      display: block;
      margin-top: 5px;
    }

    .form-container .row {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
    }

    .form-container .row label {
      flex: 3;
      margin-right: 10px;
    }

    .form-container .row input {
      flex: 1;
      margin-right: 10px;
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
        <a href="#" class="dropbtn">International Student</a>
        <div class="dropdown-content">
          <a href="#">Password</a>
          <a href="#">Logout</a>
        </div>
      </li>
    </ul>
  </div>

   <div class="form-container">
    <h2>International Student Information Form</h2>
    <form method="post" action="">
      <hr>
      <div class="row">
        <label>Please attach one certified copy of each document in A4 size:</label>
      </div>

      <div class="row">
        <label>Copy of Passport </label>
        <input type="file" id="" name="pp_passport">
      </div>

      <div class="row">
        <label>Copy of academic certificates </label>
        <input type="file" id="" name="stu_academic_cert">
      </div>

      <div class="row">
        <label>One Passport size photograph white background </label>
        <input type="file" id="" name="pp_picture">
      </div>

      <hr>

      <div class="row">
        <label>Mode of Study:</label>
        <input type="checkbox" id="full-time" name="stu_mode_of_study" value="full-time">
        <label for="full-time">Full Time</label>
        <input type="checkbox" id="part-time" name="stu_mode_of_study" value="part-time">
        <label for="part-time">Part Time</label>
      </div>

      <div class="row">
        <label for="intake-session">Intake Session:</label>
        <input type="text" id="intake-session" name="stu_intake_session">
      </div>

      <div class="row">
        <label for="programme">Programme:</label>
        <input type="text" id="programme" name="stu_programme">
      </div>

      <hr>
      
      <h4>Personal Particulars</h4>

      <div class="row">
        <label for="name">Name:</label>
        <input type="text" id="name" name="stu_name">
      </div>

      <div class="row">
        <label for="passport">Passport Number:</label>
        <input type="text" id="passport_no" name="pp_number">
      </div>

      <div class="row">
        <label for="passport">Passport Expiry Date:</label>
        <input type="date" id="" name="pp_expiry_date">
      </div>

      <div class="row">
        <label for="address">Postal Address:</label>
        <input type="text" id="address" name="stu_postal_address">
      </div>

      <div class="row">
        <label for="postcode">Post Code:</label>
        <input type="text" id="postcode" name="stu_post_code">

        <label for="town">Town:</label>
        <input type="text" id="town" name="stu_town">
      </div>

      <div class="row">
        <label for="country">Country:</label>
        <input type="text" id="country" name="stu_country">
      </div>

      <div class="row">
        <label for="telephone">Telephone No.:</label>
        <input type="text" id="telephone" name="stu_tel_no">
      </div>

      <div class="row">
        <label for="telephone">Mobile Phone No.:</label>
        <input type="text" id="telephone" name="stu_mobile_no">
      </div>

      <div class="row">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="stu_dob">

        <label for="pob">Place of Birth:</label>
        <input type="text" id="pob" name="stu_pob">
      </div>

      <div class="row">
        <label for="martial">Martial Status:</label>
        <input type="text" id="martial" name="stu_martial_status">

        <label for="race">Race:</label>
        <input type="text" id="race" name="stu_race">
      </div>

      <div class="row">
        <label for="nationality">Nationality:</label>
        <input type="text" id="nationality" name="stu_nationality">

        <label for="religion">Religion:</label>
        <input type="text" id="religion" name="stu_religion">
      </div>

      <div class="row">
        <label>Disability:</label>
        <input type="checkbox" id="full-time" name="stu_disability" value="full-time">
        <label for="full-time">Yes</label>
        <input type="checkbox" id="part-time" name="stu_disability" value="part-time">
        <label for="part-time">No</label>
      </div>

      <div class="row">
        <label for="disability-specify">IF yes, please specify:</label>
        <input type="text" id="disability-specify" name="stu_disability_specify">
      </div>

      <div class="row">
        <label for="email">Email Address:</label>
        <input type="text" id="email" name="stu_email">
      </div>
      
      <hr>
      
      <h4>Parents/ Guardian's Particulars</h4>

      <div class="row">
        <label for="name">Name:</label>
        <input type="text" id="name" name="par_name">
      </div>

      <div class="row">
        <label for="name">Ic No/ Passport Number:</label>
        <input type="text" id="name" name="par_ic_passport">
      </div>

      <div class="row">
        <label for="passport">Postal Address:</label>
        <input type="text" id="passport" name="par_postal_address">
      </div>

      <div class="row">
        <label for="postcode">Post Code:</label>
        <input type="text" id="postcode" name="par_post_code">

        <label for="town">Town:</label>
        <input type="text" id="town" name="par_town">
      </div>

      <div class="row">
        <label for="passport">Country:</label>
        <input type="text" id="passport" name="par_country">
      </div>

      <div class="row">
        <label for="passport">Telephone No.:</label>
        <input type="text" id="passport" name="par_tel_no">
      </div>

      <div class="row">
        <label for="passport">Mobile Phone No.:</label>
        <input type="text" id="passport" name="par_mobile_no">
      </div>

      <hr>

      <h4>Emergencies Contact Information</h4>

      <div class="row">
        <label for="name">Name:</label>
        <input type="text" id="name" name="emgy_name">
      </div>

      <div class="row">
        <label for="passport">Postal Address:</label>
        <input type="text" id="passport" name="emgy_postal_address">
      </div>

      <div class="row">
        <label for="postcode">Post Code:</label>
        <input type="text" id="postcode" name="emgy_post_code">

        <label for="town">Town:</label>
        <input type="text" id="town" name="emgy_town">
      </div>

      <div class="row">
        <label for="passport">Country:</label>
        <input type="text" id="passport" name="emgy_country">
      </div>

      <div class="row">
        <label for="passport">Occupation:</label>
        <input type="text" id="passport" name="emgy_occupation">
      </div>


      <div class="row">
        <label for="passport">Relationship:</label>
        <input type="text" id="passport" name="emgy_relay">
      </div>

      <div class="row">
        <label for="passport">Telephone No.:</label>
        <input type="text" id="passport" name="emgy_tel_no">
      </div>

      <div class="row">
        <label for="passport">Mobile Phone No.:</label>
        <input type="text" id="passport" name="emgy_mobile_no">
      </div>
    <div class="row">
        <button type="submit" value="" name="submit">Submit</button>
    </div> 
    </form>
  </div>

</body>
</html>