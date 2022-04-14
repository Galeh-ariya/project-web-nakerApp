<?php 


class Content_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll() {

        $this->db->query("SELECT * FROM contents");
        return $this->db->resultSet();
 
     }

}