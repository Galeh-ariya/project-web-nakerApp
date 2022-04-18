<?php 

class Qa_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll() {

        $sql = "SELECT * FROM qa";

        $this->db->query($sql);
        return $this->db->resultSet();

    }

    public function getAllJoinSended() {

        $sql = "SELECT * FROM qa AS q JOIN users AS u ON (q.user_id = u.id) ORDER BY q.id DESC";

        $this->db->query($sql);
        return $this->db->resultSet();

    }

    public function insert($data) {

        $id = htmlspecialchars($data['id']);
        $judul = htmlspecialchars($data['judulp']);
        $ask = htmlspecialchars($data['ask']);

        $sql = "INSERT INTO qa (judul, ask, user_id) VALUES ('$judul', '$ask', '$id')";

        $this->db->query($sql);
        $this->db->execute();
        return $this->db->rowCount();

    }

}