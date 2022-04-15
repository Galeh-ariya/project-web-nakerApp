<?php 

class Auth extends Controller {

    public function index() {
        
        $data['page'] = "Login | Naker";

        $this->view("templates/header", $data);
        $this->view("auth/login");
        $this->view("templates/footer");

    }

    public function postLogin()
    {
        $this->model("Auth_model")->login();
    }

}