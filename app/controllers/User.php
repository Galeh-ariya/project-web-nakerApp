<?php session_start();


class User extends COntroller {

    public function __construct()
    {
        loginUtil::is_login();
    }

    public function index() {

        
        $data['page'] = "Home | Naker";
        $data['all'] = $this->model('Content_model')->getAll();
        // var_dump($data['all']); die;

        // var_dump($_SESSION['user_data']); die;
        
        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        // var_dump($data['user']); die;
    
    
        $this->view("templates/header", $data);
        $this->view("User/user", $data);
        $this->view("templates/footer");
    
    
    }

    public function cari() {

        $data['page'] = "Home Admin | Naker";

        $data['all'] = $this->model('Content_model')->cari($_POST);
        // var_dump($data['all']); die;

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        // var_dump($data['user']); die;

        $this->view("templates/header", $data);
        $this->view("user/user", $data);
        $this->view("templates/footer");

    }

    public function ubahPassword() {


        $data['page'] = "Ubah Password | Naker";
        $data['all'] = $this->model('Content_model')->getAll();
        // var_dump($data['all']); die;
        
        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        // var_dump($data['user']); die;
    
    
        $this->view("templates/header", $data);
        $this->view("user/pass", $data);
        $this->view("templates/footer");
        
    }

    public function answer($id) {

        $data['page'] = "Jawaban | Naker";

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        // var_dump($data['user']); die;

        $data['req'] = $this->model('User_model')->userAsw($id);
        // var_dump($data['req']); die;

        $this->view("templates/header", $data);
        $this->view("user/answer", $data);
        $this->view("templates/footer");

    }

    public function asw($judul) {

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];

        $data['qall'] = $this->model('Qa_model')->cardQa();
        // var_dump($data['qall']); die;
        
        $data['asw'] = $this->model('Qa_model')->qaUser($judul);
        // var_dump($data['asw']); die;

        $data['page'] = $data['asw']['judul'] . " | Naker";

        $this->view("templates/header", $data);
        $this->view("user/content", $data);
        $this->view("templates/footer");

    }

}