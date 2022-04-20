<?php 

class loginUtil {

    public static function is_login() {

        if(!$_SESSION['data']) {
            header('Location: ' . BASEURL . 'auth');
        } else {

            
            $url = self::getUrl();
            // var_dump($url); die;
            $role_id = $_SESSION['data']['role_id'];
            $access = $url[0];
            // $access2 = $url[1];
            // var_dump($access); die;

            if($role_id > 1 && $access === 'admin') {
                header('Location: ' .  BASEURL . 'auth/access');
            } 
            

        }

    }

    private static function getUrl() {

        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }

    }

}