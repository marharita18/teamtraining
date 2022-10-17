<?php

class Model
{

    protected $db;

    protected $table = 'users';

    public function __construct()
    {
        $this->db = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->db->connect_error != 0) {
            die($this->db->connect_error);
        }
    }

    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";

        $result = $this->db->query($sql);
        if (!$result) {
            //TODO log with select error
            return [];
        }
        //TODO debug
        return $result->fetch_all(MYSQLI_ASSOC);

    }
}

