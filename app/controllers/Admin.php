<?php session_start();

class Admin extends Controller {

    public function index() {
        
        $data['page'] = "Home Admin | Naker";

        $data['contents'] = $this->model('Content_model')->getAll();

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        // var_dump($data['user']); die;

        $this->view("templates/header", $data);
        $this->view("User/admin", $data);
        $this->view("templates/footer");

    }

}

