<?php 

session_start(); 

include "Dbconnection.php";

        $SchedID =  $_REQUEST['SchedID'];
        $BusID =  $_REQUEST['Bus'];
        $EmpID = $_REQUEST['Employee'];
        $ReviewsID =  $_REQUEST['Reviews'];
        $StartingPoint = $_REQUEST['StartingPoint'];
        $Destination = $_REQUEST['Destination'];
        $SchedDate =  $_REQUEST['SchedDate'];
        $DepTime = $_REQUEST['Departure'];
        $EstArrivalTime =  $_REQUEST['EstArrival'];
        $FareAmt = $_REQUEST['FareAmount'];
        $Remarks = $_REQUEST['Remarks'];
        $AdminID =  $_REQUEST['Admin'];
      
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO `traveldetails` (`SchedID`, `BusID`, `EmpID`, `ReviewsID`, `StartingPoint`, `Destination`, `SchedDate`, `DepTime`, `EstArrivalTime`, `FareAmt`, `Remarks`, `AdminID`) 
        VALUES ('$SchedID', '$BusID', '$EmpID', '$ReviewsID', '$StartingPoint', '$Destination', '$SchedDate', '$DepTime', '$EstArrivalTime', '$FareAmt', '$Remarks', '$AdminID');";
         
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