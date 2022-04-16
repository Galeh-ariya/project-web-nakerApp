<?php session_start();

class Home extends Controller {

    public function index() {
        
        $data['page'] = "Home | Naker";

        $data['all'] = $this->model('Content_model')->getAll();
        // var_dump($data['all']); die;

        $this->view("templates/header", $data);
        $this->view("Home/index", $data);
        $this->view("templates/footer");

    }

    public function cari() {

        $data['page'] = "Home Admin | Naker";

        $data['all'] = $this->model('Content_model')->cari($_POST);
        // var_dump($data['all']); die;


        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");

    }

}