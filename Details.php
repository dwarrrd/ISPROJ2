<?php error_reporting(0); // Turn off all error reporting
include("Schedule.php");
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
            <div class="card">
                <div class="content">
                    <h2>Travel Schedule: Details</h2>
                    <?php
                        if(is_array($fetchData)){      
                        $sn=1;
                        foreach($fetchData as $data){
                    ?>
                <form method="post" name="create" action="Create.php">
                   
                        <p> SchedID: <?php echo $data['SchedID'] ?> </p>
                        <p> Bus ID:<?php echo $data['BusID'] ?> </p>
                        <p> Employee ID: <?php echo $data['EmpID'] ?> </p>
                        <p> Reviews ID:<?php echo $data['ReviewsID'] ?> </p>
                        <p> Starting Point: <?php echo $data['StartingPoint'] ?> </p>
                        <p> Destination:<?php echo $data['Destination'] ?> </p>
                        <p> Schedule Date: <?php echo $data['SchedDate'] ?> </p>
                        <p> Departure:<?php echo $data['DepTime'] ?> </p>
                        <p> Est Arrival: <?php echo $data['EstArrivalTime'] ?> </p>
                        <p> Fare Amount:<?php echo $data['FareAmt'] ?> </p>
                        <p>  Remarks:<?php echo $data['Remarks'] ?> </p>
                        <p> Admin ID:<?php echo $data['AdminID'] ?> </p>
                        
                        <br>
                        
                      
                    </form>
                    <?php
                            $sn++;}}else{ ?>
                           
                            <?php echo $fetchData; 
                        ?>
                         <?php
                         }?>
                </div>
               
            </div>
    </body>
      
        
   
</html>