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

    public function update() {

        $data['page'] = 'Profile | Naker';

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];

        // var_dump($_POST); die;
        $fileUser = [

            "id" => $data['user']['id'],
            "gender" => htmlspecialchars($_POST['gender']),
            "telp" => htmlspecialchars($_POST['telp']),
            "alamat" => htmlspecialchars($_POST['alamat'])

        ];

        // var_dump($fileUser); die;

        if($this->model('User_model')->setProfile($fileUser) > 0) {
            Flashalert::setFlash('Berhasil melakukan', 'ubah data', 'success');
            header('Location: ' . BASEURL . 'profile/admin');
        } else {
            Flashalert::setFlash('Gagal melakukan', 'ubah data', 'success');
            header('Location: ' . BASEURL . 'profile/admin');
        }

        // $this->view("templates/header", $data);
        // $this->view("Profile/index", $data);
        // $this->view("templates/footer");

    }

}