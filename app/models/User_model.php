<?php

class User_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addUser($data) {

        $name = htmlspecialchars($data['name']);
        $email = htmlspecialchars($data['email']);
        $password = htmlspecialchars($data['password']);
        $konfir = htmlspecialchars($data['passwordC']);
        $role = '2';
        $active = '1';

        $verifyEmail = $this->cekEmail($email);

        if($verifyEmail != null) {
            echo "<script>
            alert('Email sudah terdaftar');
            </script>";
            return 0;
        }

        if($password != $konfir) {
            echo "<script>
            alert('Password tidak sama');
            </script>";
            return 0;
        }  else {

            $password = password_hash($password, PASSWORD_DEFAULT);
            // var_dump($password); die;

            $sql = "INSERT INTO users (name, email, password, role_id, is_active) VALUES ('$name', '$email', '$password', $role, $active)";

            $this->db->query($sql);

            $this->db->execute();

            return 1;
        }

    }

    private function cekEmail($email) {

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $this->db->query($sql);
        $user = $this->db->resultSet();

        // var_dump($user); die;
        return $user;

    }

    public function cekLogin($data) {

        $email = $data['email'];
        $pass = $data['password'];

        $sql = "SELECT * FROM users WHERE email = '$email'"; 

         $this->db->query($sql);
         $user = $this->db->resultSet()[0];

        //  var_dump($user);
        //  die;

         if($user) {
             
            //cek aktiv
            if($user['is_active'] == 1) {

                // cek password

                if(password_verify($pass, $user['password']) ) {
                    //berhasil

                    $file = [
                        "email" => $user['email'],
                        "role_id" => $user['role_id']
                    ];

                    $_SESSION['data'] = $file;

                    if($user['role_id'] == 1) {
                        header('Location: ' . BASEURL . 'admin');
                    } else {
                        header('Location: ' . BASEURL . 'user');
                    }

                    

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


    // view user
    public function viewUser($data) {

        $email = $data['data']['email'];

        $sql = "SELECT * FROM users WHERE email = '$email'"; 

        $this->db->query($sql);
        $user = $this->db->resultSet();

        return $user;

    }

    public function setProfile($data) {

        $id = $data['id'];
        $gender = $data['gender'];
        $telp = $data['telp'];
        $alamat = $data['alamat'];

        $sql = "UPDATE users
         SET gender = '$gender',
         telp = $telp,
         alamat = '$alamat' WHERE id = $id";

         $this->db->query($sql);

         $this->db->execute();

         return $this->db->rowCount();

    }

    public function setPass($data) {

        $id = htmlspecialchars($data['id']);
        $pwl = htmlspecialchars($data['passwordlama']);
        $pwn = htmlspecialchars($data['passwordbaru']);
        $pwc = htmlspecialchars($data['passwordC']);

        if($this->checkPwLama($id, $pwl)) {

            if($pwn == $pwc) {

                $pwn = password_hash($pwn, PASSWORD_DEFAULT);

                $sql = "UPDATE users SET password = '$pwn' WHERE id = $id";

                $this->db->query($sql);
                $this->db->execute();

                return $this->db->rowCount();

            } else {
                return 0;
            }
            
        } else {
            return 0;
        }


    }

    private function checkPwLama($id, $pwl) {

        // var_dump($pwl); die;

        $sql = "SELECT password FROM users WHERE id = $id";

        $this->db->query($sql);
        // var_dump($this->db->single()); die;
        $pass = $this->db->single();
        // var_dump($pass); die;

        if(password_verify($pwl, $pass['password'])) {
            return true;
        } else {
            return false;
        }

    }

}