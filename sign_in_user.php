<?php
    session_start();
    require('config.php');
    $error = ''; //Variable to store error message
    $national_Id = $_POST['national_Id'];
    $password = $_POST['pword'];
    if(isset($_POST['sign_in']))
    {
        if(empty($national_Id) || empty($password))
        {
            $error = "Username or Password is invalid";
        }
        else 
        {
            //Define names and license#
            $sql = "SELECT * FROM citizen WHERE National_ID='".$national_Id."' AND Password_ = '".$password."'";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0)
            {
                $data = mysqli_fetch_array($result);
                
                header("location:public_console.tpl.php");
                
                
            }
            else
            {
                echo 'No results found.';
            }
        }
    }
?>