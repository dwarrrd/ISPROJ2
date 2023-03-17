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
            <div class="card">
                <div class="content">
                    <h2>Enter Users Details:</h2>
                <form method="post" name="create" action="CreateUserProcess.php">
                    <label for="UsersUsername">Email Address:</label>
                        <input type="text" name="UsersUsername" id="UsersUsername"placeholder="Username" required>
                        <br>
                        <label for="Password">Password:</label>
                        <input type="Password" name="Password" id="Password"placeholder="Password" required>
                        <br>
                        <label for="FirstName">First Name:</label>
                        <input type="text" name="FirstName" id="FirstName" placeholder="First Name" required>
                        <br>
                        <label for="LastName">Last Name:</label>
                        <input type="text" name="LastName" id="LastName"placeholder="Last Name" >
                        <br>
                        <label for="Mobile">Mobile</label>
                        <input type="text" name="Mobile" id="Mobile" placeholder="Mobile No." required>
                        <br>
                        <label for="Landline">Landline</label>
                        <input type="text" name="Landline" id="Landline"placeholder="Landline No." required>
                        <br>
                        <label for="Address">Address:</label>
                        <input type="text" name="Address" id="Address"placeholder="Address" required>
                        <br>
                       
                  
                        <br>
                        
                        
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
    </body>
      
        
   
</html>