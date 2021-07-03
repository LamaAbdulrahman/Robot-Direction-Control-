<?php

$server = "localhost";
$username = "root";
$password = "1234";
$db = "robot_db";

if(isset($_POST['Save']))
{		

//Check if connection was successful

  $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
  $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Database Connected"; //the connection is successful 


try{
//fetching the values of range sliders
$en1 = $_POST['en1'];
$en2 = $_POST['en2'];
$en3 = $_POST['en3'];
$en4 = $_POST['en4'];
$en5 = $_POST['en5'];
$en6 = $_POST['en6'];
$statOff = 0;
   

//inserting the values in the database
  $pdoQuery= "INSERT INTO `engines`(`Engine1`, `Engine2`, `Engine3`, `Engine4`, `Engine5`, `Engine6`,`STATUS`) VALUES (:en1,:en2,:en3,:en4,:en5,:en6,:statOff)";
  $pdoResult = $handle->prepare($pdoQuery);
  $pdoExecute= $pdoResult->execute(array(":en1"=>$en1,":en2"=>$en2,":en3"=>$en3,":en4"=>$en4,":en5"=>$en5,":en6"=>$en6,":statOff"=>$statOff));
  if($pdoExecute)
  {
      echo "\r \n Data Inserted";
  }
  
  else
  {
      echo "\r \n Data Not Inserted";
  }
 } 
 catch(Exception $e){ //alerting of failed database connection
   echo 'something went wrong with database connection!';

 }
}




//play buttion is clicked
if(isset($_POST['Play']))
{		

//Check if connection was successful

  $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
  $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Database Connected";
try{
 //fetching the values from the range sliders
$en1 = $_POST['en1'];
$en2 = $_POST['en2'];
$en3 = $_POST['en3'];
$en4 = $_POST['en4'];
$en5 = $_POST['en5'];
$en6 = $_POST['en6'];
$statOff = 1;
   

//inserting the values in the ststus_on database
  $pdoQuery= "INSERT INTO `STATUS_ON`(`Engine1`, `Engine2`, `Engine3`, `Engine4`, `Engine5`, `Engine6`) VALUES (:en1,:en2,:en3,:en4,:en5,:en6)";
  $pdoResult = $handle->prepare($pdoQuery);
  $pdoExecute= $pdoResult->execute(array(":en1"=>$en1,":en2"=>$en2,":en3"=>$en3,":en4"=>$en4,":en5"=>$en5,":en6"=>$en6));
  if($pdoExecute)
  {
      echo "\r \n Data Inserted in Engines";
  }
  else{
      echo "\r \n Data Not Inserted";
  }
  //inserting the values in the engines database
  $pdoQuery2= "INSERT INTO `engines`(`Engine1`, `Engine2`, `Engine3`, `Engine4`, `Engine5`, `Engine6`,`STATUS`) VALUES (:en1,:en2,:en3,:en4,:en5,:en6,:statOff)";
  $pdoResult2 = $handle->prepare($pdoQuery2);
  $pdoExecute2= $pdoResult2->execute(array(":en1"=>$en1,":en2"=>$en2,":en3"=>$en3,":en4"=>$en4,":en5"=>$en5,":en6"=>$en6,":statOff"=>$statOff));
  if($pdoExecute2)
  {
      echo "\r \n Data Inserted in Status_ON";
  }
  
  else
  {
      echo "\r \n Data Not Inserted";
  }
}

 catch(Exception $e){ //alerting of failed database connection
   echo 'something went wrong with database connection!';
 }
}



    /*****/



        //left button is clicked
        if(isset($_POST['Left']))
         {		

        //Check if connection was successful
        try{
          $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
          $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Database Connected"; //the connection is successful 


    //fetching the values of range sliders
    $btn = "L";

	

    //inserting the values in the database
   $pdoQuery= "INSERT INTO `Directions`(`Direction`) VALUES (:btn)";
   $pdoResult = $handle->prepare($pdoQuery);
   $pdoExecute= $pdoResult->execute(array(":btn"=>$btn));
   if($pdoExecute)
     {
       
    echo "Direction updated!";
     }
   
     else
     {
       echo "\r \n Data Not Inserted";
      }
     }
     catch(Exception $e){ //alerting of failed database connection
       echo 'something went wrong with database connection!';

         }
    }




       //right button is clicked
        if(isset($_POST['Right'])){


         try{

        //Check if connection was successful
        $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
        $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Database Connected"; //the connection is successful 
   
   
        //fetching the values of range sliders
        $btn = "R";

        //inserting the values in the database
         $pdoQuery= "INSERT INTO `Directions`(`Direction`) VALUES (:btn)";
        $pdoResult = $handle->prepare($pdoQuery);
        $pdoExecute= $pdoResult->execute(array(":btn"=>$btn));
        if($pdoExecute)
        {
            echo "Direction updated!";
     }
 
         else
        {
         echo "\r \n Data Not Inserted";
            }
        }
        catch(Exception $e){ //alerting of failed database connection
         echo 'something went wrong with database connection!';

          }
        }



        //forward button is clicked
        if(isset($_POST['Forward'])){
          try{
 
          //Check if connection was successful
   
         $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
         $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //  echo "Database Connected"; //the connection is successful 
   
   
         //fetching the values of range sliders
        $btn = "F";
   
     
           //inserting the values in the database
          $pdoQuery= "INSERT INTO `Directions`(`Direction`) VALUES (:btn)";
          $pdoResult = $handle->prepare($pdoQuery);
         $pdoExecute= $pdoResult->execute(array(":btn"=>$btn));
         if($pdoExecute)
         {
        echo "Direction updated!";
           }
    
         else
         {
        echo "\r \n Data Not Inserted";
        }
        }
        catch(Exception $e){ //alerting of failed database connection
          echo 'something went wrong with database connection!';
   
         }
     }
   


         //stop button is clicked
        if(isset($_POST['STOP'])){

        try{
        //Check if connection was successful
       
        $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
        $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Database Connected"; //the connection is successful 
       
      
       //fetching the values of range sliders
       $btn = "S";
       
         
       
       //inserting the values in the database
        $pdoQuery= "INSERT INTO `Directions`(`Direction`) VALUES (:btn)";
        $pdoResult = $handle->prepare($pdoQuery);
        $pdoExecute= $pdoResult->execute(array(":btn"=>$btn));
        if($pdoExecute)
        {
            echo "Direction updated!";
        }
        
        else
        {
            echo "\r \n Data Not Inserted";
        }
       }
       catch(Exception $e){ //alerting of failed database connection
         echo 'something went wrong with database connection!';
       
       }
        }
       


        //backward button is clicked
        if(isset($_POST['Backward'])){

            try{
            //Check if connection was successful
           
            $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
            $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Database Connected"; //the connection is successful 
           
         
           //fetching the values of range sliders
           $btn = "B";
           
             
           
           //inserting the values in the database
            $pdoQuery= "INSERT INTO `Directions`(`Direction`) VALUES (:btn)";
            $pdoResult = $handle->prepare($pdoQuery);
            $pdoExecute= $pdoResult->execute(array(":btn"=>$btn));
            if($pdoExecute)
            {
               echo "Direction updated!";
         
            }
            
            else
            {
                echo "\r \n Data Not Inserted";
            }
           }
           catch(Exception $e){ //alerting of failed database connection
             echo 'something went wrong with database connection!';
           
           }
            }
           
    

?>