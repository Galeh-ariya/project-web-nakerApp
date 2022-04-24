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

        $sql = "SELECT q.id, q.judul, q.ask, q.user_id, q.time_create, u.name, q.answer FROM qa AS q JOIN users AS u ON (q.user_id = u.id)  WHERE q.answer IS NULL ORDER BY q.id DESC";

        $this->db->query($sql);
        return $this->db->resultSet();

    }

    public function insert($data) {

        $id = htmlspecialchars($data['id']);
        $ask = htmlspecialchars($data['ask']);
        
        $judul = htmlspecialchars($data['judulp']);
        $judul = str_replace([" "], '-', $judul);
        // var_dump($judul); die;

        $sql = "INSERT INTO qa (judul, ask, user_id) VALUES ('$judul', '$ask', '$id')";

        $this->db->query($sql);
        $this->db->execute();
        return $this->db->rowCount();

    }

    public function getQa($id) {

        $sql = "SELECT q.id, q.judul, q.ask, q.time_create, u.name FROM qa AS q JOIN users AS u ON (q.user_id = u.id) WHERE q.id = $id";

        $this->db->query($sql);
        $result = $this->db->single();
        // var_dump($result); die;
        return $result;

    }

    public function insertAsw($data) {

        $id = $data['id'];
        $asw = htmlspecialchars($data['answer']);

        $sql = "UPDATE qa SET answer =  '$asw' WHERE id = $id";
        $this->db->query($sql);
        $this->db->execute();

        return $this->db->rowCount();

    }

    public function countNotify() {

        $sql = "SELECT count(id) AS notif FROM qa WHERE answer IS NULL";

        $this->db->query($sql);
        // var_dump($this->db->single()); die;
        return $this->db->single();

    }

    public function cardQa() {

        $sql = "SELECT id, judul, time_create FROM qa WHERE answer IS NOT NULL";

        $this->db->query($sql);
        // var_dump($this->db->resultSet()); die;
        return $this->db->resultSet();

    }

    public function qaUser($judul) {

        $sql = "SELECT q.judul, q.ask, q.answer, q.time_create, u.name FROM qa AS q JOIN users AS u ON (q.user_id= u.id) WHERE q.judul = '$judul'";

        $this->db->query($sql);
        // var_dump($this->db->single()); die;
        return $this->db->single();

    }

}