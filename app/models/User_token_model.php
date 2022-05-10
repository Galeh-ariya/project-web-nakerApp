<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class User_token_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getToken($token) {

        // var_dump($token); die;

        $sql = "SELECT * FROM user_token WHERE token = '$token'";
        $this->db->query($sql);
        $data = $this->db->single();

        // var_dump($data); die;
        $this->db->close();
        return $data;

    }

    public function insert($email) {

        $token = substr(str_replace(['+', '/', '='], '', base64_encode(random_bytes(32))), 0, 32);
        $date = time();

        $sqlToken = "INSERT INTO user_token (email, token, date_created) VALUES ('$email', '$token', $date)";

        $this->db->query($sqlToken);
        $this->db->execute();

        $sqlqueryToken = "SELECT * FROM user_token WHERE email = '$email'";
        $this->db->query($sqlqueryToken);
        $result = $this->db->single();
        // var_dump($result); die;
        $token = $result['token'];
        $this->db->close();

        return $this->_sendEmail($token, 'forgot');

        // return 1;

        // return $this->db->rowCount();

    }

    private function _sendEmail($token, $type) {

        // var_dump($token); die;

        $email = $_POST['email'];

        $name = "Peraturan Ketenagakerjaan";  // Name of your website or yours
        $to = $email;  // mail of reciever

        if($type == 'verify') {

            $subject = "Account Verification";
            $body =  'Click this link to verify your account : <a href="'. BASEURL . 'Auth/verify/' . $email . '/' . urlencode($token) .'">Activate</a>';

        } else if($type == 'forgot') {

            $subject = "Reset Password";
            $body =  'Click this link to reset your password : <a href="'. BASEURL . 'Auth/reset/' . $email . '/' . urlencode($token) .'">Reset Password</a>';

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
            return 1;
        } else {
             return 0;
        }  


    }
 
    public function deleteUser($token) {

        $sql = "DELETE FROM user_token WHERE token = '$token'";

        $this->db->query($sql);
        $this->db->execute();
        $this->db->close();

    }

}
