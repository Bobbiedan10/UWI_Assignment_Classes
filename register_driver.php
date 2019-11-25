<?php
    $NatId = $fields["nationalid"];
    $liceNo = $fields["licenseno"];
    $fname = $fields["fname"];
    $lname = $fields["lname"];
    $email = $fields["email"];
    $phone = $fields["telephone"].$fields["telephone2"];
    $add1 = $fields["add1"];
    $add2 = $fields["add2"];
    $parish = $fields["parish"];

    function randomLetters() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $letters = array(); //remember to declare $pass as an array
        $rand= rand(8,16);
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        
        for ($i = 0; $i < $rand; $i++) {
            $n = rand(0, $alphaLength);
            $letters[] = $alphabet[$n];
    }
        return implode($letters); //turn the array into a string
    }
    if(!ctype_alpha($letters[0]))
    {
        randomLetters();
    }

    $password_= randomLetters();
    $result = $this->sql->query("INSERT INTO ".$tablename." (National_ID, License_No, First_Name, Last_Name, Email, Telephone, Address1, Address2, Parish, Password_) VALUES ('$NatId', '$liceNo', '$fname', '$lname', '$email', '$phone', '$add1', '$add2', '$parish', '$password_')");
    if(!$result)
    {
        die('Could not add citizen'. $this->sql->error);
    }
    else
        $newrecord = "Citizen added to the database.";
        ?>