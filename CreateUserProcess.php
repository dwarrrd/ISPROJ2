<?php 

session_start(); 

include "Dbconnection.php";
   
        $UsersUsername =  $_REQUEST['UsersUsername'];
        $Password =  $_REQUEST['Password'];
        $FirstName = $_REQUEST['FirstName'];
        $LastName =  $_REQUEST['LastName'];
        $Mobile = $_REQUEST['Mobile'];
        $Landline = $_REQUEST['Landline'];
        $Address = $_REQUEST['Address'];
       
      
        // Performing insert query execution
        // here our table name is college
        
        $sql = "INSERT INTO `users` ( `UserEmail`, `UserPassword`, `UserFN`, `UserLN`, `UserMobile`, `UserLandline`, `UserAddress`) 
        VALUES ('$UsersUsername', '$Password', '$FirstName', '$LastName', '$Mobile', '$Landline', '$Address' );";
         
        if(mysqli_query($con, $sql)){
            
                echo "Created Successfully!";

               

               

                header("Location: UsersHome.php");
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
        }
         
        // Close connection
        mysqli_close($con);

    ?>