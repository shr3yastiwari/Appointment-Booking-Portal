<?php

require('connect.php');

if( isset($_POST['signin']) )
{ 
  $user = $_POST['Email_name1'];
  $pass = $_POST['Password1'];
  
  $query=" select * from user1 where Email_name1 = '$user' and Password1 = '$pass' ";
  // $query="SELECT * FROM `user1` WHERE `Email_name1` = '$_POST[Email_name1]' AND `Password1` = '$_POST[Password1]' ";
  $res = mysqli_query($con,$query);
  $row = mysqli_fetch_array( $res , MYSQLI_ASSOC );
  $count = mysqli_num_rows($res);
  if( $count == 1 )
  {
    header( "Location:main_page\index.html");
  }else
  {
    echo  '<script>
    window.location.href = "index_login.php";
    alert("Login failed. Invalid username or password!!")
</script>';
  }
}
?>