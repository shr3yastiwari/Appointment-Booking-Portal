<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="display.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Varela+Round&display=swap" rel="stylesheet">
    <title> Councelling Data</title>
</head>
<body>
    

<?php
include("appoitform_con.php");

$quer = "SELECT * FROM FORM";
$data = mysqli_query( $conn , $quer );

$total = mysqli_num_rows($data);


if( $total != 0 )
{    
    ?>
    <nav class="nav">
        
        <img src="i1.png">
        <p style="color: white; padding-right: 10px;font-weight: 500;"> Welcome Dr. Priya Oberoi </p>
    </nav>
    <div class="box">
    <table class="table" >
        <thead>
     <!-- <tr> -->
        <th style="background-color:  #0084c163;">Serial No.</th>
        <th style="background-color:  #0084c163;">Name</th>
        <th style="background-color:  #0084c163;">Emali</th>
        <th style="background-color:  #0084c163;">Number</th>
        <th style="background-color:  #0084c163;">Branch</th>
        <th style="background-color:  #0084c163;">Date of Appointment</th>
        <th style="background-color:  #0084c163;">Time of Appointment</th>
        <th style="background-color:  #0084c163;">Comfirm</th>
        <th style="background-color:  #0084c163;">Update</th>
        <th style="background-color:  #0084c163;">Delete</th>
        <th style="background-color:  #0084c163;">Completed</th>
        
     <!-- </tr> -->
</thead>

<?php
    while($res = mysqli_fetch_assoc($data))
    {
        echo "
        <tbody>
        <tr>
                 <td data-lable='Serial No.'>".$res['id']."</td>
                 <td data-lable='Name'>".$res['name']."</td>
                 <td data-lable='Emali'>".$res['email']."</td>
                 <td data-lable='Number'>".$res['number']."</td>
                 <td data-lable='Branch'>".$res['branch']."</td>
                 <td data-lable='Date of Appointment'>".$res['date_app']."</td>
                <td data-lable='Time of Appointment'>".$res['time_app']."</td>
                <td data-lable='Comfirm' ><a id='col' href='comfirm.php?id=$res[id]'><input style='padding: 5px;font-size: 15px;border-radius: 10px;background: none; background-color: #bcf5ffc4;' type='submit' onclick='return comfirm()' value='Comfirm' ></a></td>
                <td data-lable='Update'><a href='update.php?id=$res[id]'><input style='padding: 5px;font-size: 15px;border-radius: 10px;background: none;background-color: #bcf5ffc4;' type='submit' value='Update' ></a></td>
                <td data-lable='Delete'><a href='delete.php?id=$res[id]'><input style='padding: 5px;font-size: 15px;border-radius: 10px;background: none;background-color: #bcf5ffc4;' type='submit' onclick='return checkdel()' value='Delete' ></a></td>
                <td data-lable='Completed'><a href='delete.php?id=$res[id]'><input style='padding: 5px;font-size: 15px;border-radius: 10px;background: none;background-color: #bcf5ffc4;' type='submit' onclick='return checkdel1()' value='Completed' ></a></td>
     </tr>
     </tbody>";
    }
    
}
?>
</table>
</div>

<!-- footer -->

</body>
<script>
    function checkdel()
    {
        return confirm('Are you sure to delete data');
    }
    function checkdel1()
    {
        return confirm('The Appoitnment is completed and are you sure to delete data');
    }
    function comfirm()
    {
        return confirm('Are you sure to comfirm Appointment');
        document.getElementById('col').style.backgroundColor = 'green';
    }

</script>
</html>