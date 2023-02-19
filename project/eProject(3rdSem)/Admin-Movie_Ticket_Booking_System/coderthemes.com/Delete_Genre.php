<?php

include "config.php";

$genre_id=$_GET['id'];

$sql1 = "SELECT * FROM online_movie_sys_genre WHERE genre_id = {$genre_id}";

$result = mysqli_query($conn,$sql1) or die("Query Failed : ");
$row = mysqli_fetch_assoc($result);

// unlink("upload/".$row['Mov_img']);       //unlink() Means Delete Any File From Folder 

$sql = "DELETE FROM online_movie_sys_genre WHERE genre_id = {$genre_id};";

// $sql .= "UPDATE category SET post = post-1 WHERE category_id = {$cat_id}";

if(mysqli_multi_query($conn,$sql))
{
    header("Location: http://localhost/PHP/eProject(3rdSem)/Admin-Movie_Ticket_Booking_System/coderthemes.com/Genre.php");  
}
else{

    echo "Query Failed";
}

?>