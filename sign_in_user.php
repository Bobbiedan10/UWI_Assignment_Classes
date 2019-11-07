<?php
    require('config.php');
    session_start(); //Starting Session
    $error = ''; //Variable to store error message
    $national_Id = $_POST['national_Id'];
    $password = $_POST['pword'];

    //Checking if the form was submitted
    if(isset($_POST['sign_in']))
    {
        //Check if form fields were submitted empty or not
        if(empty($national_Id) || empty($password))
        {
            $error = "Username or Password is invalid";
            header("location: index.php"); //redirecting to index.php
        }
        else 
        {
            //Verify if fields contained valid info
            //Check if nationalID was a number
            //Verify that the password was a string

            //TIP: Escape all strings 

            //Define names and license#
            $sql = "SELECT * FROM citizen WHERE National_ID ='".$national_Id."' AND Password = '".$password."'";
            $result = $conn->query($sql);

            // echo '<pre>';
            // print_r($result);
            // echo '</pre>';

            if ($result->num_rows > 0) {
                // output data of each row
                // $rows = array();
                // while($row = $result->fetch_assoc()) {
                //     array_push($rows,array('id'=>$row['id'], 'name'=>$row['user_name'], 'text'=>$row['text'], 'date'=>$row['date_created']));
                // }
                // print_r($result->fetch_assoc());
                $row = $result->fetch_assoc();
                echo '<pre>';
            print_r($row);
            echo '</pre>';
                
            } else {
                die('No user matches that nationalid/password combination');
            }

            // header("location: public_console.html");
            //     echo "logged in";
        }
    }
?>