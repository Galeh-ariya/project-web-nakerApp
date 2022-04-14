<?php 

class Home extends Controller {

    public function index() {
        
        $data['judul'] = "Home | Naker";

        $this->view("templates/header", $data);
        $this->view("Home/index");
        $this->view("templates/footer");

    }

    public function user() {
        
        $data['page'] = "Home | Naker";
        $data['content'] = $this->model('Content_model')->getAll();

        $this->view("templates/header", $data);
        $this->view("Home/user", $data);
        $this->view("templates/footer");

    }

    public function admin() {
        
        $data['judul'] = "Home | Naker";

        $this->view("templates/header", $data);
        $this->view("Home/admin");
        $this->view("templates/footer");

    }

}