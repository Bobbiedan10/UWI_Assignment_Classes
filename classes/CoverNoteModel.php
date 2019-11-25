<?php
class CoverNoteModel extends Model
{
    public function find(string $tablename, array $fields)
    {
        
    }

    public function findall(string $tablename)
    {
        
    }

    public function add(string $tablename, array $fields)
    {
        
    }

    public function del(string $tablename, string $id)
    {
        
    }

    public function update(string $tablename, array $fields)
    {
        $uploaddir = 'www/Assignment2/uploads/';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

        echo '<pre>';
        if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
        {
            die("Possible file upload attack");
        } 


        $NatId = $_SESSION['authenticated_user']['user'];
        $PolicyId = $fields['policyNumber'];
        $DateIssued = $fields['dateIssued'];
        $DateExp = $fields['dateExpired'];

        $result = $this->sql->query("UPDATE ".$tablename." SET
        (National_ID, License_No, First_Name, Last_Name, Email, Telephone, Address1, Address2, Parish, Password_) 
        VALUES ('$NatId', '$liceNo', '$fname', '$lname', '$email', '$phone', '$add1', '$add2', '$parish', '$password_')");
        if(!$result)
        {
            die('Could not add citizen'. $this->sql->error);
        }
        else
            $newrecord = "Citizen added to the database.";
    }
}