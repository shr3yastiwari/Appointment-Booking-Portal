<?php include("appoitform_con.php");

$id = $_GET['id'];
$quer = "SELECT * FROM FORM where id = '$id' ";
$data = mysqli_query( $conn , $quer );


$total = mysqli_num_rows($data);
$res = mysqli_fetch_assoc($data)



// if( $data )
// {
//     echo "<script>comfirm('The Appoitment is Comfirmed') </script>";
//     ?>
//        <meta http-equiv="refresh" content="0;url=http://localhost/Appoitform/display.php">
//     <?php
    
// }else
// echo "no";
$email = $res['email'];
$subject = "Comfirmation in Your Appoitment";
$body = "Your Appoitment in Comfirmed by councoler. Please be on time for the appointment. Thanks";
$headers = "From: vyankateshc02@gmail.com";

if (mail($email, $subject, $body, $headers)) {
// echo "Email successfully sent to $email...";
} else {
echo "Email sending failed...";
}
?>