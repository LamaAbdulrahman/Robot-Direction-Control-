<?php
$server = "localhost";
$username = "root";
$password = "1234";
$db = "robot_db";


 try{
  
    $conn = mysqli_connect($server,$username,$password,$db);
    $sql= mysqli_query($conn,"SELECT Direction FROM Directions WHERE id IN (SELECT MAX(id) AS id FROM Directions)");
    $print_data = mysqli_fetch_row($sql);

    //printing the values
    echo "Direction: "  . $print_data[0];
     }
   
    
 
    catch(Exception $e){ //alerting of failed database connection
       echo 'something went wrong with database connection!';

         }
 
?>