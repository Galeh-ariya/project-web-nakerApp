<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
        $active = '0';

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

            $sqlUser = "INSERT INTO users (name, email, password, role_id, is_active) VALUES ('$name', '$email', '$password', $role, $active)";

            $token = substr(str_replace(['+', '/', '='], '', base64_encode(random_bytes(32))), 0, 32);
            $date = time();

            // $token = explode('/', $token);
            // $token = $token[0];
            // var_dump($token); die;

            $sqlToken = "INSERT INTO user_token (email, token, date_created) VALUES ('$email', '$token', $date)";

            $this->db->query($sqlUser);
            $this->db->execute();

            $this->db->query($sqlToken);
            $this->db->execute();

            $sqlqueryToken = "SELECT * FROM user_token WHERE email = '$email'";
            $this->db->query($sqlqueryToken);
            $result = $this->db->single();
            // var_dump($result); die;
            $token = $result['token'];

            $this->db->close();

            $this->_sendEmail($token, 'verify');

            return 1;

            
        }

    }

    private function _sendEmail($token, $type) {

        // var_dump($token); die;

        $email = $_POST['email'];

        $name = "Peraturan Ketenagakerjaan";  // Name of your website or yours
        $to = $email;  // mail of reciever

        if($type == 'verify') {

            $subject = "Account Verification";
            $body =  'Click this link to verify your account : <a href="'. BASEURL . 'Auth/verify/' . $email . '/' . urlencode($token) .'">Activate</a>';

        }

        $from = "devgaleh@gmail.com";  // you mail
        $password = "qwobghsgomcmxryl";  // your mail password
    
            // Ignore from here
    
            // require_once "PHPMailer/PHPMailer.php";
            // require_once "PHPMailer/SMTP.php";
            // require_once "PHPMailer/Exception.php";
        $mail = new PHPMailer(true);
    
            // To Here
    
            //SMTP Settings
        $mail->isSMTP();
            $mail->SMTPDebug = 3;  //Keep It commented this is used for debugging                          
        $mail->Host = "smtp.gmail.com"; // smtp address of your email
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 465;  // port
        $mail->SMTPSecure = "ssl";  // tls or ssl
        $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ]);
    
            //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($to); // enter email address whom you want to send
        $mail->Subject = ("$subject");
        $mail->Body = $body;
        if ($mail->send()) {
            echo "Email is sent!";
        } else {
             echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }  


    }

    private function cekEmail($email) {

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $this->db->query($sql);
        $user = $this->db->single();

        // var_dump($user); die;
        $this->db->close();
        return $user;

    }

    public function cekEmailVeryfy($email) {

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $this->db->query($sql);
        $user = $this->db->single();

        // var_dump($user); die;
        $this->db->close();
        return $user;

    }

    public function cekLogin($data) {

        $email = $data['email'];
        $pass = $data['password'];

        $sql = "SELECT * FROM users WHERE email = '$email'"; 

         $this->db->query($sql);
         $user = $this->db->resultSet()[0];
         $this->db->close();

        //  var_dump($user); die;
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
                        header('Location: ' . BASEURL . 'Admin');
                    } else {
                        header('Location: ' . BASEURL . 'User');
                    }

                    

                } else {
                    Flashalert::setFlash("Password anda", "salah", "danger");
                    header('Location: ' . BASEURL . 'Auth');
                }

            } else {
                Flashalert::setFlash("Email belum", "teraktivasi", "danger");
                header('Location: ' . BASEURL . 'Auth');
            }

         } else {
            Flashalert::setFlash("Email belum", "terdaftar", "danger");
            header('Location: ' . BASEURL . 'Auth');
         }


    }


    // view user
    public function viewUser($data) {

        $email = $data['data']['email'];

        $sql = "SELECT * FROM users WHERE email = '$email'"; 

        $this->db->query($sql);
        $user = $this->db->resultSet();
        $this->db->close();

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

         $this->db->close();

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

                $this->db->close();

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
        $this->db->close();
        // var_dump($pass); die;

        if(password_verify($pwl, $pass['password'])) {
            return true;
        } else {
            return false;
        }

    }


    public function changePassword($data) {

        // var_dump($_SESSION['user_data']); die;

        $pass1 = htmlspecialchars($data['password']);
        $pass2 = htmlspecialchars($data['passwordC']);

        if($pass1 == $pass2) {

            $password = password_hash($pass1, PASSWORD_DEFAULT);
            $email = $_SESSION['user_data'];

            $sql = "UPDATE users SET password = '$password' WHERE email = '$email'";
            $this->db->query($sql);
            $this->db->execute();
            $this->db->close();

            unset($_SESSION['user_data']);

            return 1;
        } else {
            return 0;
        }

    }


    public function deleteUser($email) {

        $sql = "DELETE FROM users WHERE email = '$email'";

        $this->db->query($sql);
        $this->db->execute();
        $this->db->close();

    }

    public function isActive($email) {

        $sql = "UPDATE users SET is_active = 1 WHERE email = '$email'";

        $this->db->query($sql);
        $this->db->execute();
        $this->db->close();

    }

    public function getActiveUser() {

        $sql = "SELECT * FROM users WHERE role_id = 2 ORDER BY id DESC";

        $this->db->query($sql);
        $data = $this->db->resultSet();
        // var_dump($data); die;
        $this->db->close();
        return $data;

    }

    public function cariS($data) {

        $key = $data['keyword'];

        $sql = "SELECT * FROM users WHERE name LIKE '%$key%' OR email LIKE '%$key%' OR gender LIKE '%$key%' ORDER BY id DESC" ;

        $this->db->query($sql);
        $result = $this->db->resultSet();
        $this->db->close();
        return $result;

    }

    public function countUser() {

        $sql = "SELECT count(name) AS total FROM users WHERE role_id = 2";
        $this->db->query($sql);
        // var_dump($this->db->single()); die;
        $result = $this->db->single();
        $this->db->close();
        return $result;

    }

    public function delete($id) {

        $sql = "DELETE FROM users WHERE id = $id";

        $this->db->query($sql);
        $this->db->execute();
        $this->db->close();

        return $this->db->rowCount();

    }

    public function userAsw($id) {

        $sql = "SELECT * FROM qa WHERE user_id = $id AND answer IS NOT NULL";

        $this->db->query($sql);
        $result = $this->db->resultSet();
        $this->db->close();
        return $result;
        // var_dump($this->db->resultSet()); die;

    }

}
