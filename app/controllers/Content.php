<?php session_start();

class Content extends Controller {

    public function index($id) {

        $data['page'] = "Detail | Naker";

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        $data['userD'] = $this->model('Content_model')->getWhere($id)[0];

        // var_dump($id); die;
        $this->view("templates/header", $data);
        $this->view("content/user", $data);
        $this->view("templates/footer");

    }

    public function admin($id) {

        // var_dump($id);die;

        $data['page'] = "Detail | Naker";

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        $data['userD'] = $this->model('Content_model')->getWhere($id)[0];
        

        $this->view("templates/header", $data);
        $this->view("content/admin", $data);
        $this->view("templates/footer");

    }

}