<?php session_start();

class Admin extends Controller {

    public function __construct()
    {
        // if(!$_SESSION['data']) {
        //     header('Location: ' . BASEURL . 'auth');
        // }
        LoginUtil::is_login();
    }


    public function index() {
        
        $data['page'] = "Home Admin | Naker";

        $data['contents'] = $this->model('Content_model')->getAll();

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        // var_dump($data['user']); die;

        $data['count'] = $this->model('User_model')->countUser();
        $data['notify'] = $this->model('Qa_model')->countNotify();

        $this->view("templates/header", $data);
        $this->view("admin/index", $data);
        $this->view("templates/footer");

    }

    public function insert() {

        $data['page'] = "Home Admin | Naker";

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        $data['notify'] = $this->model('Qa_model')->countNotify();

        $this->view("templates/header", $data);
        $this->view("admin/insert", $data);
        $this->view("templates/footer");

    }

    public function edit($id) {
        $data['page'] = "Home Admin | Naker";

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];

        $data['fileUser'] = $this->model('Content_model')->getWhere($id)[0];
        $data['notify'] = $this->model('Qa_model')->countNotify();

        $this->view("templates/header", $data);
        $this->view("admin/edit", $data);
        $this->view("templates/footer");
    }


    public function tambah() {

        // var_dump($_POST); die;
        if($this->model('Content_model')->insert($_POST) > 0) {
            Flashalert::setFlash('Data berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'admin');
        } else {
            Flashalert::setFlash('Data gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . 'admin/insert');
        }

    }

    public function ubah() {

        // var_dump($_POST); die;
        if($this->model('Content_model')->update($_POST) > 0) {
            Flashalert::setFlash('Data berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . 'admin');
        } else {
            Flashalert::setFlash('Data gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . 'admin/edit/'. $_POST['id']);
        }

    }

    public function hapus($id) {

        // var_dump($id); die;
        if($this->model('Content_model')->delete($id) > 0) {
            Flashalert::setFlash('Data berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . 'admin');

        } else {
            Flashalert::setFlash('Data gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . 'admin');
        }

    }

    public function cari() {

        $data['page'] = "Home Admin | Naker";

        $data['contents'] = $this->model('Content_model')->cari($_POST);

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        // var_dump($data['user']); die;

        $data['count'] = $this->model('User_model')->countUser();
        $data['notify'] = $this->model('Qa_model')->countNotify();
        

        $this->view("templates/header", $data);
        $this->view("admin/index", $data);
        $this->view("templates/footer");

    }

    public function ubahPassword() {


        $data['page'] = "Ubah Password | Naker";
        $data['contents'] = $this->model('Content_model')->getAll();
        // var_dump($data['all']); die;
        
        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        // var_dump($data['user']); die;

        $data['notify'] = $this->model('Qa_model')->countNotify();
    
    
        $this->view("templates/header", $data);
        $this->view("admin/pass", $data);
        $this->view("templates/footer");
        
    }


    public function listUser() {

        $data['page'] = "List User active";

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        $data['user_data'] = $this->model('User_model')->getActiveUser();
        $data['notify'] = $this->model('Qa_model')->countNotify();

        $this->view("templates/header", $data);
        $this->view("admin/user", $data);
        $this->view("templates/footer");

    }

    public function cariUser() {

        $data['page'] = "List User active";

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        $data['user_data'] = $this->model('User_model')->cariS($_POST);

        $data['notify'] = $this->model('Qa_model')->countNotify();

        $this->view("templates/header", $data);
        $this->view("admin/user", $data);
        $this->view("templates/footer");

    }

    public function deleteUser($id) {

        if($this->model('User_model')->delete($id) > 0) {
            Flashalert::setFlash('User berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . 'admin/listUser');
        } else {
            Flashalert::setFlash('User gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . 'admin/listUser');
        }

    }

    public function qa() {

        $data['page'] = "Tanya Jawab";

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];

        $data['qall'] = $this->model('Qa_model')->cardQa();
        // var_dump($data['qall']); die;
        
        $data['notify'] = $this->model('Qa_model')->countNotify();

        $this->view("templates/header", $data);
        $this->view("admin/qa", $data);
        $this->view("templates/footer");

    }

    public function asw($judul) {

        // var_dump($judul); die;
        $data['asw'] = $this->model('Qa_model')->qaUser($judul);

        $data['page'] = $data['asw']['judul'] . " | Naker";

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];

        $data['notify'] = $this->model('Qa_model')->countNotify();

        $this->view("templates/header", $data);
        $this->view("admin/content", $data);
        $this->view("templates/footer");

    }

}

