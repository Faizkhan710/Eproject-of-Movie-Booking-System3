<?php

include "config.php";

$theater_id=$_GET['id'];

$sql1 = "SELECT * FROM online_movie_sys_theater WHERE theater_id = {$theater_id}";

$result = mysqli_query($conn,$sql1) or die("Query Failed : Select");
$row = mysqli_fetch_assoc($result);

$sql = "DELETE FROM online_movie_sys_theater WHERE theater_id = {$theater_id};";

if(mysqli_multi_query($conn,$sql))
{
    header("Location: http://localhost/PHP/eProject(3rdSem)/Admin-Movie_Ticket_Booking_System/coderthemes.com/Theater.php");  
}
else{

    echo "Query Failed";
}

?>