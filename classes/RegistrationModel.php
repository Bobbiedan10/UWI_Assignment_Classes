<?php
class RegistrationModel extends Model
{
    public function find(string $tablename, array $fields)
    {
       
    }

    public function findall(string $tablename)
    {

    }

    public function add(string $tablename, array $fields)
    {
        include("register_driver.php");
    }

    public function del(string $tablename, string $id)
    {
        
    }

    public function update(string $tablename, array $fields)
    {
        
    }
}