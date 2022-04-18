<?php session_start();


class User extends COntroller {

    public function index() {

        
        $data['page'] = "Home | Naker";
        $data['all'] = $this->model('Content_model')->getAll();
        // var_dump($data['all']); die;
        
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

}