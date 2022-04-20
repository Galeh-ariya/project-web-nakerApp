<?php session_start();

class Qa extends Controller {

    public function __construct()
    {
        loginUtil::is_login();
    }

    public function index() {

        $data['page'] = "Ajukan Pertanyaan";

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        // var_dump($data['user']); die;

        $this->view("templates/header", $data);
        $this->view("qa/index", $data);
        $this->view("templates/footer");

    }

    public function admin() {

        $data['page'] = "Pertanyaan Masuk";

        $data['user'] = $this->model('User_model')->viewUser($_SESSION)[0];
        // var_dump($data['user']); die;

        $data['req'] = $this->model('Qa_model')->getAllJoinSended();
        // var_dump($data['req']); die;

        $this->view("templates/header", $data);
        $this->view("qa/admin", $data);
        $this->view("templates/footer");

    }

    public function insertAsk() {

        if($this->model('Qa_model')->insert($_POST) > 0) {
            Flashalert::setFlash('Berhasil mengirim', 'pertanyaan', 'success');
            header('Location: ' . BASEURL . 'qa');
        } else {
            Flashalert::setFlash('Gagal mengirim', 'pertanyaan', 'danger');
            header('Location: ' . BASEURL . 'qa');
        }

    }


}