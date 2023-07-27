<?php include("appoitform_con.php");

$id = $_GET['id'];
$queri = "SELECT * FROM FORM where id = '$id' ";

$datar = mysqli_query( $conn , $queri );


$total = mysqli_num_rows($datar);
$res = mysqli_fetch_assoc($datar);

$email = $res['email'];

$quer = "DELETE FROM FORM where id = '$id' ";

$data = mysqli_query( $conn , $quer );


if( $data )
{
    echo " <script>alert('Record Deleted') </script>";
        ?>
           <meta http-equiv="refresh" content="0;url=http://localhost/Appoitform/display.php">
        <?php
}else 
echo " no ";


$subject = "Updation in Your Appoitment";
$body = "Your Appoitment has been cancelled due to some circumstances .Sorry for the inconvinience caused";
$headers = "From: vyankateshc02@gmail.com";

if (mail($email, $subject, $body, $headers)) {
    // echo "Email successfully sent to $email...";
} else {
    echo "Email sending failed...";
}

?>