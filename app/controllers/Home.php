<?php session_start();

class Home extends Controller {

    public function index() {
        
        $data['page'] = "Home | Naker";

        $data['all'] = $this->model('Content_model')->getAll();
        // var_dump($data['all']); die;

        $this->view("templates/header", $data);
        $this->view("home/index", $data);
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

    public function qa() {

        $data['page'] = "Tanya Jawab | Naker";

        // if(isset($_SESSION); die; 
        // var_dump($_SESSION); die;
        // var_dump($_SESSION['data']); die;

        if(isset($_SESSION['data'])) {

            $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];

            $data['qall'] = $this->model('Qa_model')->cardQa();

            $this->view("templates/header", $data);
            $this->view("user/qa", $data);
            $this->view("templates/footer");

        } else {

            $data['qall'] = $this->model('Qa_model')->cardQa();
            // var_dump($data['qall']); die;

            $this->view("templates/header", $data);
            $this->view("home/qa", $data);
            $this->view("templates/footer");
        }


    }

    public function asw($judul) {

        // var_dump($judul); die;
        $data['qall'] = $this->model('Qa_model')->cardQa();
        // var_dump($data['qall']); die;
        
        $data['asw'] = $this->model('Qa_model')->qaUser($judul);
        // var_dump($data['asw']); die;

        $data['page'] = $data['asw']['judul'] . " | Naker";

        $this->view("templates/header", $data);
        $this->view("home/content", $data);
        $this->view("templates/footer");



    }

}