<?php session_start();


class Profile extends Controller {

    public function index() {

        $data['page'] = 'Profile | Naker';

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];

        $this->view("templates/header", $data);
        $this->view("Profile/index", $data);
        $this->view("templates/footer");

    }

    public function admin() {

        $data['page'] = 'Profile | Naker';

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];

        $this->view("templates/header", $data);
        $this->view("Profile/admin", $data);
        $this->view("templates/footer");

    }

}