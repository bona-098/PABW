<?php

class Koneksi   
{
    private $table = "koneksi";

    public function __construct()
    {
        $this->db = new Database;
    }
    public function index()
    {
        return $this->db->index($this->table);
    }
    public function edit($by)
    {
        return $this->db->get($this->table,$by);
    }
    public function update($data,$by)
    {
        $this->db->update($this->table,$data,$by);
        header("location: index.php?f=koneksi");
    }
    public function create($data)
    {
        return $this->db->insert($this->table,$data);
    }
    public function delete($by)
    {
        return $this->db->delete($this->table,$by);
    }
}
