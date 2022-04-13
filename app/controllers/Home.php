<?php 

class Home extends Controller {

    public function index() {
        
        $this->view("templates/header");
        $this->view("Home/index");
        $this->view("templates/footer");

    }

    public function user() {
        
        $this->view("templates/header");
        $this->view("Home/user");
        $this->view("templates/footer");

    }

}