<?php session_start();


class User extends COntroller {

    public function index() {
        
        $data['page'] = "Home | Naker";
        $data['content'] = $this->model('Content_model')->getAll(); 
        // var_dump($data['content']); die;
        
        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        // var_dump($data['user']); die;
    
    
        $this->view("templates/header", $data);
        $this->view("User/user", $data);
        $this->view("templates/footer");
    
    
    }

}