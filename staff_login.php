<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CENTRALIZED DATA MANAGEMENT FOR INTERNATIONAL STUDENT </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/login_style.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        body.body_style
            {
                font-family: verdana, arial, helvetica, sans-serif;
                font-weight: bold;
            }
        a.link  /*link to login form*/
            {
                text-decoration: none;      
            }
        img.avatar 
            {
                width: 50%; 
                height: 30%; 
                border-radius: 50%;
            }
    </style>
</head>
<body class="body_style" bgcolor="EBEBEB">
    <table border="0" width="100%">
        <tr>
            <td><?php include 'unisel_logo.php'; ?></td>
        </tr>        
        <tr>
            <th style="font-size: 30px; font-family: cambria;">CENTRALIZED DATA MANAGEMENT SYSTEM</th>
        </tr>
        <tr>
            <td>
                <!--staff login-->
                <div class="container">
                    <div class="info"></div>
                </div>
                <div style="text-align: center;">
                    <marquee width="40%">Welcome to Academic Advisory System</marquee>
                </div>
                <br>
                <div class="form" style="background-color:#FFA056">
                    <h2>Staff Login</h2>
                    <div class="imgcontainer">
                        <img src="images/lecturer.png" alt="Avatar" class="avatar">
                    </div>
                    <form action="" method="post" class="login-form">
                        <input type="text" name="staff_id" placeholder="ID No"/>
                        <input type="password" name="password" placeholder="Password"/>
                        <button name="login">Log In</button>
                        <br>
                        <br>
                        <!--error output-->
                        <span><center><font color="red"><?php echo $error; ?></font></center></span> 
                        <br>
                        <a href="index.php" class="link">Click Here for Student</a>            
                    </form>
                </div> 
            </td>        
        </tr>       
    </table>
</body>
</html>
