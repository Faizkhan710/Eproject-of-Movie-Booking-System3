<?php 

$conn=mysqli_connect("localhost","root","","Movie_Booking_System") or die("Connection Failed");
//We Create a Connection Now We Just we need to include it when we want to use it.

if(!$conn){
    die('Could not Connect My Sql:' .mysqli_error(die()));
 }

?>