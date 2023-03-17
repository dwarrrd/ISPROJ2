<?php
include_once 'Dbconnection.php';
include_once 'Schedule.php';
if(count($_POST)>0) {
mysqli_query($con,"UPDATE traveldetails set SchedID='" . $_POST['SchedID'] . "', EmpID='" . $_POST['Bus'] . "', EmpID='" . $_POST['Employee'] . "', ReviewsID='" . $_POST['Reviews'] . "' ,StartingPoint='" . $_POST['StartingPoint'] ."' ,Destination='" . $_POST['Destination'] ."' ,SchedDate='" . $_POST['SchedDate'] ."' ,DepTime='" . $_POST['Departure'] ."' ,EstArrivalTime='" . $_POST['EstArrival'] ."' ,FareAmt='" . $_POST['FareAmount'] ."' ,Remarks='" . $_POST['Remarks'] ."' ,AdminID='" . $_POST['Admin'] . "' WHERE SchedID='" . $_POST['SchedID'] . "'");
$message = "Record Modified Successfully";
}
$query = "SELECT * FROM traveldetails WHERE SchedID='" . $_GET['SchedID'] . "'";
$result = mysqli_query($con,$query);
$row= mysqli_fetch_array($result);
?>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            IRide
        </title>
        
        <link rel="icon" href="../Assets/IRIDELOGO.png" type="image/icon type">
        <link rel="stylesheet" href="./CSS/Design.css">
        <link rel="icon" href="" type="image/icon type">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
       
        
    </head>
    <body>
    <div class="header">
        
    <ul>
                <li>&nbsp;</li>
                <li><img src="./Assets/IRIDELOGO.png" width="100" height="55"></li>
                <li><a href="AdminsHome.php">Home</a></li>
                <li style="float:right"> <a href="Index.php">Logout</a></li>
                <li style="float:right"> <a href="CreatePage.php">CREATE</a></li>
                
            </ul>
        
    </div>
<form name="frmUser" method="post" action="">
<div>
    <?php if(isset($message)) 
        { echo("Updated Succesfully"); 
        
        } ?>
</div>
<div style="padding-bottom:5px;">
</div>
        <div class="card">
                    <h2>Update:</h2>
                    <form method="post" name="update" action="">
                        <label for="SchedID">SchedID:</label>
                        <input type="text" name="SchedID" id="SchedID" value="<?php echo $row['SchedID']; ?>" required>
                        <br>
                        <label for="Bus">Bus ID:</label>
                        <input type="text" name="Bus" id="Bus" value="<?php echo $row['BusID']; ?>"  required>
                        <br>
                        <label for="Employee">Employee ID:</label>
                        <input type="text" name="Employee" id="Employee"  value="<?php echo $row['EmpID']; ?>" required>
                        <br>
                        <label for="Reviews">Reviews ID:</label>
                        <input type="text" name="Reviews" id="Reviews" value="<?php echo $row['ReviewsID']; ?>" >
                        <br>
                        <label for="StartingPoint">Starting Point:</label>
                        <input type="text" name="StartingPoint" id="StartingPoint"  value="<?php echo $row['StartingPoint']; ?>"  required>
                        <br>
                        <label for="Destination">Destination:</label>
                        <input type="text" name="Destination" id="Destination"  value="<?php echo $row['Destination']; ?>"  required>
                        <br>
                        <label for="SchedDate">Schedule Date:</label>
                        <input type="Date" name="SchedDate" id="SchedDate"  value="<?php echo $row['SchedDate']; ?>"  required>
                        <br>
                        <label for="Departure">Departure:</label>
                        <input type="text" name="Departure" id="Departure"  value="<?php echo $row['DepTime']; ?>"  required>
                        <br>
                        <label for="EstArrival">Est Arrival:</label>
                        <input type="text" name="EstArrival" id="EstArrival"  value="<?php echo $row['EstArrivalTime']; ?>"  required>
                        <br>
                        <label for="FareAmount">Fare Amount:</label>
                        <input type="text" name="FareAmount" id="FareAmount"  value="<?php echo $row['FareAmt']; ?>"  required>
                        <br>
                        <label for="Remarks">Remarks:</label>
                        <input type="text" name="Remarks" id="Remarks" value="<?php echo $row['Remarks']; ?>"  required>
                        <br>
                        <label for="Admin">Admin ID:</label>
                        <input type="text" name="Admin" id="Admin" value="<?php echo $row['AdminID']; ?>"  required>
                        <br>
                        
                        
                        <input type="submit" value="Submit">
                    </form>
        </div>
</form>
</body>
</html>