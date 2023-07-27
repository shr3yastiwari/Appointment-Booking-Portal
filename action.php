<?php
include("appoitform_con.php");

if( isset($_POST['submit']) )
{
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $number = $_POST['user_num'];
    $branch = $_POST['branch_name'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $query = " INSERT INTO FORM values('$name','$email','$number','$branch','$date','$time')";
    $data = mysqli_query( $connec , $query );

    if( $data )
    {
        echo "yes";
    }else
    echo "no";

}







?>