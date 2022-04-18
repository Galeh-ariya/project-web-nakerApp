<?php session_start();

class Auth extends Controller {

    public function index() {

        $data['page'] = "Login | Naker";

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
            "email" => htmlspecialchars($_POST['email']),
            "password" => htmlspecialchars($_POST['password'])
        ];

        $this->model('User_model')->cekLogin($data);


    }

    public function register() {

        $data['page'] = "Register | Naker";

        if(isset($_POST['submit'])) {
            $this->tambah();
        }
        

        $this->view("templates/header", $data);
        $this->view("Auth/register");
        $this->view("templates/footer");

    }

    public function tambah() {
        
      if($this->model('User_model')->addUser($_POST) > 0) {
          Flashalert::setFlash('Berhasil melakukan', 'registrasi', 'success');
          header('Location: ' . BASEURL . 'auth');
      }  else {
        Flashalert::setFlash('Gagal melakukan', 'registrasi', 'danger');
        header('Location: ' . BASEURL . 'auth');
            

      }

    }

    public function setPassword() {
        
        // var_dump($_POST); die;
        if($this->model('User_model')->setPass($_POST) > 0) {
            Flashalert::setFlash('Berhasil mengubah', 'password', 'success');
            header('Location: ' . BASEURL . 'auth/logoutAfterSetPass');
        } else {
            Flashalert::setFlash('Gagal mengubah', 'password', 'danger');
            header('Location: ' . BASEURL . 'user/ubahPassword');
        }
        


    }

    public function setPasswordAdmin() {
        
        // var_dump($_POST); die;
        if($this->model('User_model')->setPass($_POST) > 0) {
            Flashalert::setFlash('Berhasil mengubah', 'password', 'success');
            header('Location: ' . BASEURL . 'auth/logoutAfterSetPass');
        } else {
            Flashalert::setFlash('Gagal mengubah', 'password', 'danger');
            header('Location: ' . BASEURL . 'admin/ubahPassword');
        }
        


    }

    public function logoutAfterSetPass() {
        session_destroy();
        session_unset();
        header('Location: ' . BASEURL . 'auth');
    }

    public function logOut() {
        session_destroy();
        session_unset();
        header('Location: ' . BASEURL . 'home');
    }

}