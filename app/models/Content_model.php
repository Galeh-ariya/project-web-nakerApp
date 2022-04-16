<?php 


class Content_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll() {

        $this->db->query("SELECT * FROM contents ORDER BY id DESC");
        return $this->db->resultSet();
 
     }

     public function insert($data) {

        // var_dump($data);
        $peraturan = htmlspecialchars($data['peraturan']);
        $tentang = htmlspecialchars($data['tentang']);
        $konten = htmlspecialchars($data['konten']);

        $sql = "INSERT INTO contents (peraturan, tentang, content) VALUES ('$peraturan', '$tentang', '$konten')";

        $this->db->query($sql);
        $this->db->execute();

        return $this->db->rowCount();

      // return 0;

     }


     public function update($data) {

      $id = $data['id'];
      $peraturan = htmlspecialchars($data['peraturan']);
      $tentang = htmlspecialchars($data['tentang']);
      $konten = htmlspecialchars($data['konten']);

      $sql = "UPDATE contents 
                   SET
               peraturan = '$peraturan',
               tentang = '$tentang',
               content = '$konten'
               WHERE id = $id";

      
      $this->db->query($sql);
      $this->db->execute();

      return $this->db->rowCount();
      

     }

     public function delete($id) {

        $sql = "DELETE FROM contents WHERE id = $id";

        $this->db->query($sql);

        $this->db->execute();

        return $this->db->rowCount();

      // return 0;

     }

     public function cari($data) {

      $keyword = $data['keyword'];
      // $keyword1 = '%' . $keyword . '%';
      // var_dump($keyword); die;

      $sql = "SELECT * FROM contents WHERE peraturan LIKE '%$keyword%' OR tentang LIKE '%$keyword%' OR time_create LIKE '%$keyword%'";

      $this->db->query($sql);
      return $this->db->resultSet();
      // var_dump($this->db->resultSet()); die;
      

     }

         // get user for edit
    public function getWhere($id) {

      $sql = "SELECT * FROM contents WHERE id = $id";

      $this->db->query($sql);

      $data = $this->db->resultSet();
      
      return $data;

  }

}