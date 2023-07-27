<?php include("appoitform_con.php");

$id = $_GET['id'];
$quer = "SELECT * FROM FORM where id = '$id' ";
$data = mysqli_query( $conn , $quer );

$total = mysqli_num_rows($data);
$res = mysqli_fetch_assoc($data)

?>
<html lang="en">
<head>
<script type="text/javascript" src="https://github.com/rubyeffect/easy_fill/tree/master/lib/easy_fill-0.0.1.min.js"></script>
  <title>update</title>
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
      <h1>Update Request Form</h1>
      <!-- <p>Make your appointments more easier</p> -->

    </div>
    <form action="#" method="POST">
      <fieldset>

        <label for="date">Date*:</label>
        <input type="date" name="date" value ="<?php echo $res['date_app'] ?>" required></input>
        <br>
        <label for="time">Time*:</label>
        <input type="tel" name="time" value="<?php echo $res['time_app'] ?>" required></input>
        <br>
        <!-- <label for="mail">Email:</label>
        <input type="email" id="mail" name="user_email" value="" required></input> -->
      </fieldset>
      <div class="butn"><button type="submit" name="submit" >Comfirm Changes</button></div>
      
    </form>
  </div>
</body>
<?php

if( isset($_POST['submit']) )
{
    // $name = $_POST['user_name'];
       
    // $number = $_POST['user_num'];
    // $branch = $_POST['branch_name'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    //$query = " INSERT INTO FORM (name,email,number,branch,date_app,time_app) values('$name','$email','$number','$branch','$date','$time')";
    $query = " UPDATE FORM set date_app = '$date' , time_app = '$time' WHERE id = '$id' ";
    $data = mysqli_query( $conn , $query );

    if( $data )
    {
        echo "<script>alert('Record Updated') </script>";
        ?>
           <meta http-equiv="refresh" content="0;url=http://localhost/Appoitform/display.php">
        <?php
        
    }else
    echo "no";
    $email = $res['email'];
$subject = "Updation in Your Appoitment";
$body = "Your Date : $date and Time : $time is updated . Please Follw for the appointment. Sorry for the inconvinience caused";
$headers = "From: vyankateshc02@gmail.com";

if (mail($email, $subject, $body, $headers)) {
    // echo "Email successfully sent to $email...";
} else {
    echo "Email sending failed...";
}


}

?>
</html>