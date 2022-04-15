<?php session_start();


class Crud_Admin extends Controller {

    public function index() {

        $data['page'] = 'Tambah Data | Naker';

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];

        $this->view("templates/header", $data);
        $this->view("crudA/index", $data);
        $this->view("templates/footer");

    }

}