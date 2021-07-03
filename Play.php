<?php

$server = "localhost";
$username = "root";
$password = "1234";
$db = "robot_db";

//connecting with the database
$conn = mysqli_connect($server,$username,$password,$db);
$sql= mysqli_query($conn,"SELECT * FROM status_on WHERE id IN (SELECT MAX(id) AS id FROM status_on)");
$print_data = mysqli_fetch_row($sql);
   
//printing the values
   echo "Engine 1: "  . $print_data[1];
   echo "</br>";
   echo "Engine 2: " .  $print_data[2];
   echo "</br>";
   echo "Engine 3: "  . $print_data[3];
   echo "</br>";
   echo "Engine 4: " . $print_data[4];
   echo "</br>";
   echo "Engine 5: " . $print_data[5];
   echo "</br>";
   echo "Engine 6: " . $print_data[6];
   

?>