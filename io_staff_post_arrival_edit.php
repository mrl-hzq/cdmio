<?php
include"connection.php";

if(isset($_POST["submit"]))

  {
    $sql = "INSERT INTO supervisor (pp_yos, pp_picture, pp_number, pp_expiry_date, pp_passport, pp_2nd_number, pp_2nd_expiry_date, pp_2nd_passport, pp_3rd_number, pp_3rd_expiry_date, pp_3rd_passport)
    VALUES ('".$_POST["pp_yos"]."','".$_POST["pp_picture"]."','".$_POST["pp_number"]."','".$_POST["pp_expiry_date"]."','".$_POST["pp_passport"]."','".$_POST["pp_2nd_number"]."','".$_POST["pp_2nd_expiry_date"]."','".$_POST["pp_2nd_passport"]."','".$_POST["pp_3rd_number"]."','".$_POST["pp_3rd_expiry_date"]."','".$_POST["pp_3rd_passport"]."')";

    if (mysqli_query($con, $sql)) 
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
  <title>IO Edit Post Arrival Information</title>
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
      <div class="row">
        <label for="name">Student Name</label>
      </div>
      <br>

      <div class="row">
        <label for="email">Country</label>
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Flight Number</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Arrival Date</label>
        <input type="Date" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Arrival Time</label>
        <input type="time" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Accomodation</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Medical Checkup Date</label>
        <input type="Date" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Medical Checkup Status</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Medical Clinic</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">2nd Medical Checkup Date</label>
        <input type="Date" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">2nd Medical Checkup Status</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">2nd Medical Clinic</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">3rd Medical Checkup Date</label>
        <input type="Date" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">3rd Medical Checkup Status</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">3rd Medical Clinic</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Flight Ticket</label>
        <input type="file" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Receipt of Payment</label>
        <input type="file" id="" name="">
        <h7> </h7>
      </div>
      <br>
      <h2>Special Pass</h2>
      <div class="row">
        <label for="phone">Expiry Date 1</label>
        <input type="Date" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Expiry Date 2</label>
        <input type="date" id="" name="">
        <h7> </h7>
      </div>
      <br>
  </div>

  <div class="container" align="center">
    <div class="row" align="">
    <button type="" class="btn btn-primary" name="">
        <a href="io_staff_post_arrival.php">Back</a>
    </button>

    <button type="" class="btn btn-primary" name="">
        <a href="io_staff_post_arrival.php">Save Changes</a>
    </button>
  </div>


  </body>
</html>