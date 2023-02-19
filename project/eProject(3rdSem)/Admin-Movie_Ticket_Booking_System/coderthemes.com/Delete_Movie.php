<?php

include "config.php";

$movie_id=$_GET['id'];

$sql1 = "SELECT * FROM online_movie_sys_movie WHERE movie_id = {$movie_id}";

$result = mysqli_query($conn,$sql1) or die("Query Failed : Select");
$row = mysqli_fetch_assoc($result);

unlink("upload/".$row['Mov_img']);       //unlink() Means Delete Any File From Folder 

$sql = "DELETE FROM online_movie_sys_movie WHERE movie_id = {$movie_id};";

// $sql .= "UPDATE category SET post = post-1 WHERE category_id = {$cat_id}";

if(mysqli_multi_query($conn,$sql))
{
    header("Location: http://localhost/PHP/eProject(3rdSem)/Admin-Movie_Ticket_Booking_System/coderthemes.com/Movie.php");  
}
else{

    echo "Query Failed";
}

?>