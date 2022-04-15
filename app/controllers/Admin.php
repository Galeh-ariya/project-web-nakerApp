<?php session_start();

class Admin extends Controller {

    public function index() {
        
        $data['page'] = "Home | Naker";

        $this->view("templates/header", $data);
        $this->view("User/admin");
        $this->view("templates/footer");

    }

}

