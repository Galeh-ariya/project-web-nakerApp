<?php session_start();

class Auth extends Controller {

    public function index() {

        $data['page'] = "Login | Naker";

        if(!isset($_POST['submit'])) {
            $this->view("templates/header", $data);
            $this->view("Auth/login");
        } else {
            $this->_login();
        }
   
    }

    private function _login() {

        // var_dump($_POST); die;

        $data = [
            "email" => htmlspecialchars($_POST['email']),
            "password" => htmlspecialchars($_POST['password'])
        ];

        // var_dump($data); die;

        $this->model('User_model')->cekLogin($data);


    }

    public function register() {

        $data['page'] = "Register | Naker";

        if(isset($_POST['submit'])) {
            $this->tambah();
        }
        

        $this->view("templates/header", $data);
        $this->view("auth/register");

    }

    public function tambah() {
        
      if($this->model('User_model')->addUser($_POST) > 0) {
          Flashalert::setFlash('Berhasil melakukan registrasi,', 'Silahkan aktivasi akun anda terlebih dahulu', 'success');
          header('Location: ' . BASEURL . 'auth');
      }  else {
        Flashalert::setFlash('Gagal melakukan', 'registrasi', 'danger');
        header('Location: ' . BASEURL . 'auth');
    
      }

    }

    public function verify($email, $token) {

        // var_dump($token); die;

        // echo $token; die;

        $user = $this->model('User_model')->cekEmailVeryfy($email);
        // var_dump($user); die;

        if($user['email']) {

            $user_token = $this->model('User_token_model')->getToken($token);
            // var_dump($user_token); die;

            if($user_token['token']) {


                if(time() - $user_token['date_created'] < (60*60*24)) {

                    $this->model('User_model')->isActive($email);
                    $this->model('User_token_model')->deleteUser($token);

                    Flashalert::setFlash('Akun '. $email . '', 'Telah teraktivasi', 'success');
                    header('Location: ' . BASEURL . 'auth');

                } else {

                    $this->model('User_model')->deleteUser($email);
                    $this->model('User_token_model')->deleteUser($token);

                    Flashalert::setFlash('Gagal aktivasi akun.', 'Token kadaluarsa', 'danger');
                    header('Location: ' . BASEURL . 'auth');
                }


            } else {
                Flashalert::setFlash('Gagal aktivasi akun.', 'Token salah', 'danger');
                header('Location: ' . BASEURL . 'auth');
            }

        } else {
            Flashalert::setFlash('Gagal aktivasi akun.', 'Akun salah', 'danger');
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

    public function access() {

        $data['page'] = "Access Forbidden";

            $this->view("templates/header", $data);
            $this->view("access/index");
            $this->view("templates/footer");


    }


    public function forgotpassword() {

            $data['page'] = "Lupa sandi | Naker";

            if(isset($_POST['submit'])) {

                $email = htmlspecialchars($_POST['email']);
                // var_dump($email); die;
                
                $user = $this->model('User_model')->cekEmailVeryfy($email);
                // var_dump($user); die;

                if($user['email'] && $user['is_active'] == 1) {
                    

                    if($this->model('User_token_model')->insert($email) > 0) {

                        Flashalert::setFlash('Cek emailmu', ' untuk melakukan reset password!', 'success');
                        header('Location: ' . BASEURL . 'auth/forgotpassword');

                    } else {
                        Flashalert::setFlash('Gagal', 'mereset password', 'danger');
                        header('Location: ' . BASEURL . 'auth/forgotpassword');
                    }


                } else {
                    Flashalert::setFlash('Email', 'belum terdaftar atau belum teraktivasi', 'danger');
                    header('Location: ' . BASEURL . 'auth/forgotpassword');
                }

            } else {

                $this->view("templates/header", $data);
                $this->view("Auth/forgot");
                $this->view("templates/footer");
            }

        

    }

    public function reset($email, $token) {

        // var_dump($token); die;

        $user = $this->model('User_model')->cekEmailVeryfy($email);

        if($user['email']) {

            $user_token = $this->model('User_token_model')->getToken($token);

            if($user_token['token']) {

                $_SESSION['user_data'] = $email;
                $this->changePassword();

            } else {

                Flashalert::setFlash('Gagal reset password.', 'token salah', 'danger');
                header('Location: ' . BASEURL . 'auth/forgotpassword');

            }


        } else {

            Flashalert::setFlash('Gagal reset password.', 'email salah', 'danger');
            header('Location: ' . BASEURL . 'auth/forgotpassword');

        }

    }


    public function changePassword() {

        if(!isset($_SESSION['user_data'])) {
            header('Location: ' . BASEURL . 'auth');
        } else {

            $data['page'] = "Ubah Password";
            $data['user_data'] = $_SESSION['user_data'];
            // var_dump($data['user_data']); die;
    
            $this->view("templates/header", $data);
            $this->view("Auth/ubahPass", $data);
            $this->view("templates/footer");
        }


    }

    public function cPassword() {

        // var_dump($_SESSION); die;
        if($this->model('User_model')->changePassword($_POST) > 0) {

            Flashalert::setFlash('Password Berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . 'auth');

        } else {

            Flashalert::setFlash('Password gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . 'auth/changePassword');

        }

    }

    

}