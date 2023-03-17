<?php error_reporting(0); // Turn off all error reporting
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
                    <h2>Create Travel Schedule:</h2>
                <form method="post" name="create" action="Create.php">
                    <label for="SchedID">SchedID:</label>
                        <input type="text" name="SchedID" id="SchedID"placeholder="Schedule ID" required>
                        <br>
                        <label for="Bus">Bus ID:</label>
                        <input type="text" name="Bus" id="Bus"placeholder="Bus Name" required>
                        <br>
                        <label for="Employee">Employee ID:</label>
                        <input type="text" name="Employee" id="Employee" placeholder="Employee Name" required>
                        <br>
                        <label for="Reviews">Reviews ID:</label>
                        <input type="text" name="Reviews" id="Reviews"placeholder="Reviews" >
                        <br>
                        <label for="StartingPoint">Starting Point:</label>
                        <input type="text" name="StartingPoint" id="StartingPoint" placeholder="Starting Point" required>
                        <br>
                        <label for="Destination">Destination:</label>
                        <input type="text" name="Destination" id="Destination"placeholder="Destination" required>
                        <br>
                        <label for="SchedDate">Schedule Date:</label>
                        <input type="Date" name="SchedDate" id="SchedDate" placeholder="Schedule Date" required>
                        <br>
                        <label for="Departure">Departure:</label>
                        <input type="text" name="Departure" id="Departure"placeholder="Departure" required>
                        <br>
                        <label for="EstArrival">Est Arrival:</label>
                        <input type="text" name="EstArrival" id="EstArrival" placeholder="Est Arrival" required>
                        <br>
                        <label for="FareAmount">Fare Amount:</label>
                        <input type="text" name="FareAmount" id="FareAmount"placeholder="FareAmount" required>
                        <br>
                        <label for="Remarks">Remarks:</label>
                        <input type="text" name="Remarks" id="Remarks" placeholder="Remarks" required>
                        <br>
                        <label for="Admin">Admin ID:</label>
                        <input type="text" name="Admin" id="Admin"placeholder="Admin ID" required>
                        <br>
                        
                        
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
    </body>
      
        
   
</html>