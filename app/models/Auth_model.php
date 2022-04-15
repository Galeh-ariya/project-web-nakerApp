<?php 

class Auth_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login() {
        $email = $_POST['email'];
        // $password=md5($_POST['password']);
        $password = $_POST['password'];
        $this->db->query("SELECT * FROM users WHERE email='$email' AND `password`='$password'");
		// $count = count($res);
        $count = count($this->db->resultSet());
		
		if ($count > 0) {
			
			Session::init();
			Session::set('role', "user");
			Session::set('loggedIn', true);
			Session::set('username', $username);
			Session::set('password', $res[0]['password']);
			header('location: '.BASEURL);
		} 
		   else {
			Session::set('loggedIn', false);
			header('location: '.BASEURL);
		}
    }

}