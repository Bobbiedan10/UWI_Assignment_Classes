<?php
class IndexModel extends Model
{
    public function find(string $tablename, array $fields)
    {
        $id = $fields['nationalid'];
        $passw = $fields['pword'];
        $query = "SELECT * from $tablename WHERE National_ID='$id' AND Password_='$passw'";
        
        $result = $this->sql->query($query);
        if ($this->sql->errno) {
            echo 'SQL Error occurred: ';
            echo $this->sql->error;
            exit();
        }
        if ($result->num_rows==1) {
            while($row = $result->fetch_assoc()){
               
                $_SESSION['authenticated_user'] = array(
                    'licence_num'=>$row['License_No'],
                    'name'=>$row['First_Name']." ".$row['Last_Name'],
                    'address'=>$row['Address1'].", ".$row['Parish'],
                    'L_upload'=>$row['License_Upload'], 
                    'C_Upload' =>$row['Cover_Note_Upload'],
                );
            }
            return true;
        }
        else {
            return false;
        }
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
        
    }
}