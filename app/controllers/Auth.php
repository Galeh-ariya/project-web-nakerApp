<?php session_start();

class Auth extends Controller {

    public function index() {

        $data['page'] = "Home | Naker";

        if(!isset($_POST['submit'])) {
            $this->view("templates/header", $data);
            $this->view("Auth/login");
            $this->view("templates/footer");
        } else {
            $this->_login();
        }
   
    }

    private function _login() {

        $data = [
            "email" => $_POST['email'],
            "password" => $_POST['password']
        ];

        $this->model('User_model')->cekLogin($data);


    }

    public function register() {

        $data['page'] = "Home | Naker";

        if(isset($_POST['submit'])) {
            $this->tambah();
        }
        

        $this->view("templates/header", $data);
        $this->view("Auth/register");
        $this->view("templates/footer");

    }

    public function tambah() {
        
      if($this->model('User_model')->addUser($_POST) > 0) {
          echo "<script>
          alert('Register berhasil');
          document.location.href = 'auth';
          </script>";
      }  else {
            echo "<script>
            alert('Register gagal');
            </script>";
            

      }

    }

    public function logOut() {
        session_destroy();
        header('Location: ' . BASEURL . 'home');
    }

}