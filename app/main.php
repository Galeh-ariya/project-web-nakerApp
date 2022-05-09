<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require_once "app/core/App.php";
require_once "app/core/Controller.php";
require_once "app/core/Database.php";
require_once "app/core/Constants.php";
require_once "app/core/Flashalert.php";
require_once "app/core/LoginUtil.php";

// require_once "../app/PHPMailer/PHPMailer.php";
require_once "app/PHPMailer/PHPMailer.php";
require_once "app/PHPMailer/SMTP.php";
require_once "app/PHPMailer/Exception.php";
require_once "app/PHPMailer/vendor/autoload.php";

require_once "repository/DatabaseConfig.php";

