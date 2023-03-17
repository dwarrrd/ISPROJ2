<?php 

session_start(); 

include "Dbconnection.php";
   
        $AdminUsername =  $_REQUEST['AdminUsername'];
        $Password =  $_REQUEST['Password'];
        $FirstName = $_REQUEST['FirstName'];
        $LastName =  $_REQUEST['LastName'];
        $Email = $_REQUEST['Email'];
        $ContactNo = $_REQUEST['ContactNo'];
       
      
        // Performing insert query execution
        // here our table name is college
        
        $sql = "INSERT INTO `admins` (`AdminUsername`, `AdminPassword`, `AdminFN`, `AdminLN`, `AdminEmail`, `AdminContactNo`) 
        VALUES ('$AdminUsername', '$Password', '$FirstName', '$LastName', '$Email', '$ContactNo');";
         
        if(mysqli_query($con, $sql)){
            
                echo "Created Successfully!";

               

               

                header("Location: AdminsHome.php");
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
        }
         
        // Close connection
        mysqli_close($con);

    ?>