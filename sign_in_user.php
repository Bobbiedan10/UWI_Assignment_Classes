<?php
    require('config.php');
    session_start(); //Starting Session
    $error = ''; //Variable to store error message
    $national_Id = $_POST['national_Id'];
    $password = $_POST['pword'];
    if(isset($_POST['sign_in']))
    {
        if(empty($national_Id) || empty($password))
        {
            $error = "Username or Password is invalid";
            header("location: index.php");
        }
        else 
        {
            //Define names and license#
            $sql = "SELECT * FROM citizen WHERE National_ID ='".$national_Id."' AND Password = '".$password."' limit 1";
            $result = $conn->query($sql);

            header("location: public_console.html");
                echo "logged in";
        }
    }
?>