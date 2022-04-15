<?php session_start();

class User_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addUser($data) {

        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        $konfir = $data['passwordC'];
        $role = '2';
        $active = '1';


        if($password != $konfir) {
            echo "<script>
            alert('Password tidak sama');
            </script>";
            return 0;
        } else {
            $sql = "INSERT INTO users (name, email, password, role_id, is_active) VALUES ('$name', '$email', '$password', $role, $active)";

            $this->db->query($sql);

            $this->db->execute();

            return 1;
        }

    }

    public function cekLogin($data) {

        $email = $data['email'];
        $pass = $data['password'];

        $sql = "SELECT * FROM users WHERE email = '$email'"; 

         $this->db->query($sql);
         $user = $this->db->resultSet();

        //  var_dump($user);
        //  die;

         if($user) {
             
            //cek aktiv
            if($user[0]['is_active'] == 1) {

                // cek password
                if($pass == $user[0]['password']) {
                    //berhasil

                    $file = [
                        "email" => $user[0]['email'],
                        "role_id" => $user[0]['role_id']
                    ];

                    $_SESSION['data'] = $file;
                    header('Location: ' . BASEURL . 'home/user');

                } else {
                    echo "<script>
                    alert('Password salah!');
                    document.location.href = 'auth';
                    </script>";
                }

            } else {
                echo "<script>
                alert('Email belum terverifikasi');
                document.location.href = 'auth';
                </script>";
            }

         } else {
            echo "<script>
            alert('Email belum terdaftar silahkan registrasi!');
            document.location.href = 'auth';
            </script>";
         }


    }




}