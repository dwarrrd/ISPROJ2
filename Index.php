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
                    <br>
                    <img src="../Assets/IRIDELOGO.png" height="200" width="220">
                    
                    <?php if (isset($_GET['error'])) { ?>

                        <p class="error"><?php echo $_GET['error']; ?></p>

                    <?php } ?>
                    <br>
                    <form method="post" name="irideLogin" action="Login.php">
                        <input type="text" name="Username" id="Username"placeholder="Username/Email" required>
                        <br>
                        <input type="password" name="Password" id="Password" placeholder="Password" required>
                        <br>
                        <p><a href="ForgotPassword.html">Forgot password?</a> | <a href="ChooseAccount.php">Create Account</a></p>
                        <input type="submit" value="Log In">
                    </form>
                </div>
            </div>
    </body>
      
        
   
</html>