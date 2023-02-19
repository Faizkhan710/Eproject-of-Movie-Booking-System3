<?php

include "config.php";

$movie_theater_id=$_GET['id'];

$sql1 = "SELECT * FROM online_movie_sys_theater_movie WHERE movie_theater_id = {$movie_theater_id}";

$result = mysqli_query($conn,$sql1) or die("Query Failed : Select");
$row = mysqli_fetch_assoc($result);

$sql = "DELETE FROM online_movie_sys_theater_movie WHERE movie_theater_id = {$movie_theater_id};";

if(mysqli_multi_query($conn,$sql))
{
    header("Location: http://localhost/PHP/eProject(3rdSem)/Admin-Movie_Ticket_Booking_System/coderthemes.com/Movie_Theater.php");
}
else{

    echo "Query Failed";
}

?>