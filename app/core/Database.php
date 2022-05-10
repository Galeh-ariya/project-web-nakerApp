<?php 

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $connect;
    private $sql;

    public function __construct() {
        $source = "mysql:host=" . $this->host . ";dbname=" . $this->db_name;
        

        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->connect = new PDO($source, $this->user, $this->pass, $options);
        } catch(PDOException $e) {
            die($e->getMessage());
        }

    }

    public function query($sql) {

        $this->sql = $this->connect->prepare($sql);

    }

    public function bind($param, $value, $type = null) {
        
        if(is_null($type)) {

            switch(true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($type):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($type) :
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                
            }

        }

        $this->sql->bindValue($param, $value, $type);

    }


    public function execute() {

        $this->sql->execute();

    }

    public function resultSet() {

        $this->execute();
        return $this->sql->fetchAll(PDO::FETCH_ASSOC);
        
    }

    public function single() {

        $this->execute();
        return $this->sql->fetch(PDO::FETCH_ASSOC);
        
    }

    public function rowCount() {
        return $this->sql->rowCount();
    }

    public function close() {
        $this->sql->close = null;
        $this->connect = null;

        
    }


}