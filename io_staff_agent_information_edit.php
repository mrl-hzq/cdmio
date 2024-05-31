<!DOCTYPE html>
<html>
<head>
  <title>IO Edit Agent Information</title>
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
        <label for="name">Agent Name</label>
        <input type="text" id="" name="">
      </div>
      <br>
      </form>
      <div class="row">
        <label for="email">Agent ID</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Status</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Email</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Telephone Number</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Mobile Phone Number</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>
  </div>

<div class="container">
      <div class="row">
        <label for="name">2nd Agent Name</label>
        <input type="text" id="" name="">
      </div>
      <br>
      </form>
      <div class="row">
        <label for="email">2nd Agent ID</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Status</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Email</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>

      <div class="row">
        <label for="phone">Telephone Number</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>
      
      <div class="row">
        <label for="phone">Mobile Phone Number</label>
        <input type="text" id="" name="">
        <h7> </h7>
      </div>
      <br>
      
  </div>

  <div class="container" align="center">
    <div class="row" align="">
    <button type="" class="btn btn-primary" name="">
        <a href="io_staff_agent_information.php">Back</a>
    </button>

    <button type="" class="btn btn-primary" name="">
        <a href="io_staff_agent_information.php">Save Changes</a>
    </button>
  </div>

  </body>
</html>