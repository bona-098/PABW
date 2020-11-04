<?php

class Database
{
    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=tugas2", "root", "");
    }

    public function index($table,$column = '*')
    {
        $sql = "SELECT $column FROM $table";
        $stmt = $this->db->query($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt;
    }

    public function get($table,$by,$column = '*')
    {  
        $sql = "SELECT $column FROM $table WHERE $by[0] = '$by[1]' ";
        $stmt = $this->db->query($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt;
    }
    public function join($rules)
    {
        $sql = "SELECT ". implode(", ", $rules['column']) ." FROM ".$rules['table1']." ". $rules['join'] ." ".$rules['table2']." ON ".$rules['table1']. "." .$rules['key1']." = ".$rules['table2']. "." .$rules['key2']." ". $rules['condition'] . "";
        $stmt = $this->db->query($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // print_r($sql);
        return $stmt;
    }
    public function insert($table,$data)
    {
        $prep = array();
        foreach($data as $key => $value ) {
            $prep[$key] = "'" .$value."'";
        }
        $sql = "INSERT INTO $table ( " . implode(', ',array_keys($data)) . ") VALUES (" . implode(', ',array_values($prep)) . ")";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $sql;
    }
    public function update($table,$data,$by)
    {
        $valueSets = array();
        foreach($data as $key => $value) {
            $valueSets[] = $key . " = '" . $value . "'";
        }

        $sql = "UPDATE $table SET ". join(",",$valueSets) . " WHERE $by[0] = '$by[1]' ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
    public function delete($table,$by)
    {
        $sql = "DELETE FROM $table WHERE $by[0] = '$by[1]' ";
        $stmt = $this->db->query($sql);
        $stmt->execute();
        return $stmt;
    }

    public function login($table,$email,$password)
    {
        $stmt = $this->db->query("SELECT id,username,email FROM $table WHERE email='$email' AND password='$password' ");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0) {
            return $stmt;
        }else {
            return false;
        }
    }
}


