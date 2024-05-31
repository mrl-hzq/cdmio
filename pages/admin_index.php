<!DOCTYPE html>
<html lang="en">
<head>
  <title>Super Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  </script>
    <style type="text/css">
      body.admin_bg
        {
          background-color:#EBEBEB;
        }
      div.header_color
        {
          background-color:black;
        }
      div.content_color
        {
          background-color:#EBEBEB;
        }
      .dropdown-submenu 
        {
          position: relative;
      }
    .dropdown-submenu .dropdown-menu 
    {
          top: 0;
          left: 100%;
          margin-top: -1px;
    }
    </style>

      
</head>
<body class="admin_bg">
  <!--Header-->
  <div class="container-fluid">
    <div class="row">
      <div class="header_color">
        <div class="hidden-print">
          <?php include 'unisel_logo.php'; ?> 
        </div>
        <br>
      </div>  
    </div>
  </div>
  <!--Navigation Bar-->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="superAdmin_index.php?sua=19">Home</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Staff <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="superAdmin_index.php?sua=1">Register Staff Account</a></li>
              <li><a href="superAdmin_index.php?sua=9">User Account List</a></li>
            </ul>
          </li>
          
        <ul class="nav navbar-nav navbar-right">          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Admin : <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="superAdmin_index.php?sua=31"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
              <li><a href="superAdmin_index.php?sua=10"><span class="glyphicon glyphicon-lock"></span> Password</a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </ul>
</div>
</nav>

     <div class="button-container">
    <a class="button" href="#">
      <img src="user_icon.png" alt="Admin Profile">
      <div>Admin Profile</div>
    </a>

    <a class="button" href="#">
      <img src="user_icon.png" alt="Create Profile">
      <div>Create Profile Staff</div>
    </a>

    <a class="button" href="#">
      <img src="user_icon.png" alt="Create Profile">
      <div>Create Profile Student</div>
    </a>

    <a class="button" href="#">
      <img src="user_icon.png" alt="User List">
      <div>User List</div>
    </a>
  </div>
  </nav>
</body>
</html>
