<?php

class LoginMhs
{
    private $table = "loginMhs";

    public function __construct()
    {
        $this->db = new Database;
    }
    public function index()
    {
        return $this->db->index($this->table);
    }
    public function edit($rules)
    {
        return $this->db->get($this->table,$rules);
    }
    public function update($data,$by)
    {
        $this->db->update($this->table,$data,$by);
        header("location: index.php?f=loginMhs");
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