<?php include("appoitform_con.php") ?>
<html lang="en">
<head>
<script type="text/javascript" src="https://github.com/rubyeffect/easy_fill/tree/master/lib/easy_fill-0.0.1.min.js"></script>
  <title>Reach Me Form</title>
  <link rel="stylesheet" type="text/css" href="appoitform.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
  <div id="container">
    <!--This is a division tag for body container-->
    <div id="body_header">
      <!--This is a division tag for body header-->
      <h1>Appointment Request Form</h1>
      <p>Make your appointments more easier</p>

    </div>
    <form action="#" method="POST">
      <fieldset>
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="user_name" placeholder=" Yash Manjhi" required>

        <label for="mail">Email:</label>
        <input type="email" id="mail" name="user_email" placeholder="abc@xyz.com" required>

        <label for="tel">Contact Num:</label>
        <input type="tel" id="tel" placeholder="9578XXXXXX" name="user_num" required>

        <label for="skype_name">Year-Branch</label>
        <input type="text" id="branch_name" name="branch_name" placeholder="3rd-EE" required>
        
        <label for="date">Date*:</label>
        <input type="date" name="date" value="" required></input>
        <br>
        <label for="time">Time*:</label>
        <input type="tel" name="time" value="" placeholder=" Between 9 AM to 5 PM" required></input>
        <br>
      </fieldset>
      <div class="butn"><button type="submit" name="submit" >Request For Appointment</button></div>
      
    </form>
  </div>
</body>
<?php

if( isset($_POST['submit']) )
{
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $number = $_POST['user_num'];
    $branch = $_POST['branch_name'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $query = " INSERT INTO FORM (name,email,number,branch,date_app,time_app) values('$name','$email','$number','$branch','$date','$time')";
    $data = mysqli_query( $conn , $query );

    if( $data )
    {
      echo "<script>alert('Appoitment Requested') </script>";
        ?>
           <meta http-equiv="refresh" content="0;url=http://localhost/Appoitform/doctor_page/index.html">
        <?php
        
    }else
    echo "no";

}

?>
</html>