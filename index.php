<?php
require('connect.php');
?>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>IIT INDORE Counselling </title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="index.css">

    
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST" action="indesx_connect.php" >
        <h3>Login Here</h3>

        <label >Email</label>
        <input type="text" placeholder="Email" id="username" name="Email_name1">

        <label >Password</label>
        <input type="password" placeholder="Password" id="password" name="Password1">
        <a href="admin_login.php" target="_blank">Admin</a>
        <button type="submit" name="signin" >Log In</button>
        
    </form>

</body>
</html>


