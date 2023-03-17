<?php 

session_start(); 

include "Dbconnection.php";

if (isset($_POST['Username']) && isset($_POST['Password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['Username']);

    $pass = validate($_POST['Password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM admins WHERE AdminUsername='$uname' AND AdminPassword='$pass'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['AdminUsername'] === $uname && $row['AdminPassword'] === $pass) {

                echo "Logged in!";

                $_SESSION['Username'] = $row['AdminUsername'];

               

                header("Location: AdminsHome.php");

                exit();

            }

        }else{

            $sql = "SELECT * FROM users WHERE UserEmail='$uname' AND UserPassword='$pass'";

            $result = mysqli_query($con, $sql);
    
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if($row['UserEmail'] === $uname && $row['UserPassword'] === $pass) {
            

                    echo "Logged in!";
    
                    $_SESSION['Username'] = $row['AdminUsername'];
    
                   
    
                    header("Location: UsersHome.php");
    
                    exit();
                }
            }

        }

    }

}else{

    header("Location: index.php");

    exit();

}