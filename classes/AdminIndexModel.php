<?php
class AdminIndexModel extends Model
{
    public function find(string $tablename, array $fields)
    {
        $id = $fields['employeeid'];
        $passw = $fields['pword'];
        $query = "SELECT * from $tablename WHERE Employee_ID='$id' AND Password_='$passw'";
        
        $result = $this->sql->query($query);
        if ($this->sql->errno) {
            echo 'SQL Error occurred: ';
            echo $this->sql->error;
            exit();
        }
        if ($result->num_rows==1) {
            while($row = $result->fetch_assoc()){
               
                $_SESSION['authenticated_admin'] = array(
                    'emp_id'=>$row['Employee_ID'],
                    'name'=>$row['First_Name']." ".$row['Last_Name'],
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