<?php error_reporting(0); // Turn off all error reporting

include_once 'Schedule.php';
$result = mysqli_query($con,"SELECT * FROM traveldetails");

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
        <?php
if (mysqli_num_rows($result) > 0) {
?>
        <div class="card">
            <div class="content">
            <h3>Passengers</h3>
            <hr>
                        <?php
                                $i=0;
                                while($row = mysqli_fetch_array($result)) {
			?>
                   
                     <div class="square">
                    <p><?php echo $row["SchedID"]; ?> | <?php echo $row["DepTime"]; ?> Departure|
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <progress id="file" value="80" max="100"> 32% </progress> 
                            &nbsp;&nbsp;&nbsp;| 
                            <a href="UpdateProcess.php?SchedID=<?php echo $row["SchedID"]; ?>">Update</a> | <a href="delete.php?SchedID=<?php echo $row["SchedID"]; ?>">Delete</a> | <a href="Details.php?SchedID=<?php echo $row["SchedID"]; ?>">Details</a>
                    </p> 
                    </div>
                    <br>
                    <hr>
                     
                    <?php
			$i++;
			}
			?>      
            </div>
         </div>
         <?php
}
else
{
    echo "No result found";
}
?>
    </body>
      
        
   
</html>